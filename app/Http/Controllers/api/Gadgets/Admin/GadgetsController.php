<?php

namespace App\Http\Controllers\api\Gadgets\Admin;

use App\Helpers\FastApiHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\gadgets\StoreGadgetRequest;
use App\Http\Requests\gadgets\UpdateGadgetRequest;
use App\Models\Gadget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isEmpty;

class GadgetsController extends Controller
{
    protected $fastApiUrl;

    public function __construct()
    {
        $this->fastApiUrl = config('services.fastapi.url'); // Usa el .env vía services.php
    }
    public function index()
    {
        $gadgets = Gadget::with('type')->get();

        if (isEmpty($gadgets)) {
            return response()->json([
                'status' => false,
                'msg' => 'Los recursos solicitados no fueron encontrados',
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => 'Los gadgets fueron encontrados correctramente.',
            'error_code' => null,
            'data' => $gadgets
        ], 200);
    }
    public function store(StoreGadgetRequest $request)
    {
        $gadget = Gadget::create([
            'mac_address' => $request['mac_address'],
            'gadget_type_id' => $request['gadget_type_id'],
            'alias' => $request['alias'] ?? 'desconocido'
        ]);
        if ($request->gadget_type_id == 1) {
            $response = FastApiHelper::request('post', 'gps/create/tracking-status', [
                'mac_address' => $request->mac_address,
                'tracking_enabled' => false
            ]);

            if ($response['success']) {
                return response()->json([
                    'result' => true,
                    'msg' => $response['msg'],
                    'error_code'=>$response['error_code'],
                    'data' => $response['data']
                ]);
            }
            return response()->json([
                'result' => false,
                'msg' => $response['msg'],
                'error_code' => $response['error_code'],
                'data' => $response['data']
            ], $response['status']);
        }
        return response()->json([
            'result' => true,
            'msg' => "Gadget creado correctamente",
            'error_code' => null,
            'data' => null
        ], 201);
    }
    public function update(UpdateGadgetRequest $request, $id)
    {
        $gadget = Gadget::find($id);

        if (! $gadget) {
            return response()->json([
                'result' => false,
                'msg' => 'El recurso solicitado no fue encontrado.',
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        $fields = ['alias', 'pet_id'];
        $data = $request->only($fields);

        $gadget->update($data);

        return response()->json([
            'result' => true,
            'msg' => 'Gadget modificado correctamente.',
            'error_code' => null,
            'data' => $gadget
        ], 200);
    }

    public function destroy($id)
    {
        $gadget = Gadget::findOrFail($id);
        $gadget->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Gadget eliminado correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
