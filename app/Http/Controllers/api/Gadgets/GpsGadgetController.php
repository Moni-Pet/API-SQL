<?php

namespace App\Http\Controllers\api\Gadgets;

use App\Http\Controllers\Controller;
use App\Models\Gadget;
use Illuminate\Http\Request;
use App\Helpers\FastApiHelper;
use App\Models\Pet;

class GpsGadgetController extends Controller
{
    /**
     * Cambiar el estado de rastreo del GPS.
     */
    public function toggleTracking($id)
    {
        $gadget = Gadget::find($id);

        if (! $gadget) {
            return response()->json([
                'result' => false,
                'msg' => 'El gadget no fue encontrado.',
                'error_code' => 1604,
                'data' => null
            ], 404);
        }

        // Obtener el estado actual
        $estadoResponse = FastApiHelper::request('get', "gps/status/tracking-status/{$gadget->mac_address}");
        if (! $estadoResponse['success']) {
            return response()->json([
                'result' => false,
                'msg' => 'No se pudo obtener el estado actual del rastreo.',
                'error_code' => 1605,
                'data' => null
            ], $estadoResponse['status']);
        }

        $estadoActual = $estadoResponse['data']['tracking_enabled'];
        $nuevoEstado = ! $estadoActual;

        // Cambiar el estado
        $updateResponse = FastApiHelper::request('patch', "gps/tracking-status/{$gadget->mac_address}", [
            'enabled' => $nuevoEstado
        ]);

        return response()->json([
            'result' => $updateResponse['success'],
            'msg' => $nuevoEstado ? 'Rastreo activado.' : 'Rastreo desactivado.',
            'error_code' => $updateResponse['error_code'],
            'data' => $updateResponse['data']
        ], $updateResponse['status']);
    }


    /**
     * Consultar el estado de rastreo actual del GPS.
     */
    public function trackingStatus($id)
    {
        $gadget = Gadget::findOrFail($id);

        $response = FastApiHelper::request('get', "gps/status/tracking-status/{$gadget->mac_address}");

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data']
        ], $response['status']);
    }

    /**
     * Consultar la última ubicación de la mascota asociada al GPS.
     */
    public function ubicacionActual($id)
    {
        $gadget = Gadget::with('pet')->findOrFail($id);

        $response = FastApiHelper::request('get', 'gps/ultima-ubicacion', [
            'mac_address' => $gadget->mac_address
        ]);

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => [
                'pet' => $gadget->pet,
                'location' => $response['data']
            ]
        ], $response['status']);
    }

    public function showUserPetsWithGps()
    {
        $user_id = auth()->id();
        $petsWithGps = Pet::where('user_id', $user_id)
            ->whereHas('gadgets', function ($query) {
                $query->where('gadget_type_id', 1);
            })
            ->with(['gadgets' => function ($query) {
                $query->where('gadget_type_id', 1)->with('type');
            }])
            ->get();

        if ($petsWithGps->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => 'No se encontraron mascotas con GPS asignado.',
                'error_code' => 1410,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Mascotas con GPS encontradas correctamente.',
            'error_code' => null,
            'data' => $petsWithGps
        ]);
    }
}
