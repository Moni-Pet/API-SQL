<?php

namespace App\Http\Controllers\api\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\service\StoreTypeServiceRequest;
use App\Http\Requests\service\UpdateTypeServiceRequest;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeServices = ServiceType::with('services')->get();

        if ($typeServices->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los tipos de servicio fueron encontrados",
            'error_code' => null,
            'data' => $typeServices,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeServiceRequest $request)
    {
        $typeService = ServiceType::create([
            'type_service' => $request->type_service,
            'icono' => $request->icono
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Tipo de servicio creado correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $typeService = ServiceType::find($id);

        if (!$typeService) {
            return response()->json([
                'result' => false,
                'msg' => "El tipo de servicio no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Tipo de servicio encontrado",
            'error_code' => null,
            'data' => $typeService,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeServiceRequest $request, int $id)
    {
        $typeService = ServiceType::find($id);

        if (!$typeService) {
            return response()->json([
                'result' => false,
                'msg' => "El tipo de servicio no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $typeService->update($request->only([
            'type_service',
            'icono'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Tipo de servicio modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $typeService = ServiceType::find($id);

        if (!$typeService) {
            return response()->json([
                'result' => false,
                'msg' => "El tipo de servicio no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $typeService->delete();

        return response()->json([
            'result' => true,
            'msg' => "Tipo de servicio eliminado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
