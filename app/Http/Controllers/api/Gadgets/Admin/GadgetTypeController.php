<?php

namespace App\Http\Controllers\api\Gadgets\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\gadgets\StoreGadgetTypeRequest;
use App\Http\Requests\gadgets\UpdateGadgetTypeRequest;
use App\Models\GadgetType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GadgetTypeController extends Controller
{
    public function index()
    {
        $types = GadgetType::all();

        if ($types->isEmpty()) {
            return response()->json([
                'status' => false,
                'msg' => 'Los recursos solicitados no fueron encontrados',
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Tipos de gadgets encontrados correctamente.',
            'error_code' => null,
            'data' => $types
        ], 200);
    }

    public function store(StoreGadgetTypeRequest $request)
    {
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = 'gadget_type_' . uniqid() . '.' . $extension;
        $path = $file->storeAs('gadget_types', $filename, 'digitalocean');

        if (! $path) {
            return response()->json([
                'result' => false,
                'msg' => 'Error al subir la imagen del tipo de gadget.',
                'error_code' => 1301,
                'data' => null
            ], 500);
        }

        $url = Storage::url($path);

        $type = GadgetType::create([
            'gadget_type' => $request->gadget_type,
            'photo_url' => $url
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Tipo de gadget creado correctamente.',
            'error_code' => null,
            'data' => $type
        ], 201);
    }

    public function update(UpdateGadgetTypeRequest $request, $id)
    {
        $type = GadgetType::find($id);

        if (! $type) {
            return response()->json([
                'status' => false,
                'msg' => 'El recurso solicitado no fue encontrado',
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        $type->update($request->validated());

        return response()->json([
            'result' => true,
            'msg' => 'Tipo de gadget actualizado correctamente.',
            'error_code' => null,
            'data' => $type
        ], 200);
    }

    public function destroy($id)
    {
        $type = GadgetType::find($id);

        if (! $type) {
            return response()->json([
                'status' => false,
                'msg' => 'El recurso solicitado no fue encontrado',
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        $type->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Tipo de gadget eliminado correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
