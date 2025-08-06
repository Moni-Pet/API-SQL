<?php

namespace App\Http\Controllers\api\Gadgets;

use App\Http\Controllers\Controller;
use App\Helpers\FastApiHelper;
use App\Models\Gadget;
use Illuminate\Http\Request;

class FeederGadgetController extends Controller
{
    /**
     * Establecer configuración de horarios y cantidad.
     */
    public function store(Request $request, int $id)
    {
        $validated = $request->validate([
            'horarios' => 'required|array|min:1',
            'horarios.*' => 'regex:/^\d{2}:\d{2}$/',
            'cantidad' => 'required|numeric|min:1',
        ]);

        $gadget = Gadget::find($id);

        if (!$gadget || $gadget->gadget_type_id !== 2) {
            return response()->json([
                'result' => false,
                'msg' => 'Este gadget no es un comedero válido.',
                'error_code' => 1604,
                'data' => null
            ], 404);
        }

        $payload = [
            'mac_address' => $gadget->mac_address,
            'horarios' => $validated['horarios'],
            'cantidad' => $validated['cantidad'],
        ];

        $response = FastApiHelper::request('post', 'comedero/comedero-config', $payload);

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    /**
     * Obtener configuración del comedero por ID.
     */
    public function show(int $id)
    {
        $gadget = Gadget::find($id);

        if (!$gadget || $gadget->gadget_type_id !== 2) {
            return response()->json([
                'result' => false,
                'msg' => 'Este gadget no es un comedero válido.',
                'error_code' => 1604,
                'data' => null
            ], 404);
        }

        $response = FastApiHelper::request('get', 'comedero/comedero-config', [
            'mac_address' => $gadget->mac_address
        ]);

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }
}
