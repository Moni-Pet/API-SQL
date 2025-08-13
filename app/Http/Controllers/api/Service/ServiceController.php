<?php

namespace App\Http\Controllers\api\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\service\StoreServiceRequest;
use App\Http\Requests\service\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('type')->get();

        if ($services->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los servicios fueron encontrados",
            'error_code' => null,
            'data' => $services,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $service = Service::create([
            'type_service_id' => $request->type_service_id,
            'service' => $request->service,
            'price' => $request->price,
            'discounts' => $request->discounts
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Servicio creado correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $service = Service::with('type')->find($id);

        if (!$service) {
            return response()->json([
                'result' => false,
                'msg' => "Servicio no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Servicio encontrado",
            'error_code' => null,
            'data' => $service,
        ], 200);
    }

    public function serviceList(Request $request) {
        $validated = $request->validate([
            'serviceIds' => 'required|array',
            'serviceIds.*' => 'integer|exists:services,id',
        ]);

        $services = Service::whereIn('id', $validated['serviceIds'])
            ->with('type')
            ->get();

        return response()->json([
            'result' => true,
            'msg' => "Lista de servicios",
            'error_code' => null,
            'data' => $services,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, int $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json([
                'result' => false,
                'msg' => "Servicio no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $service->update($request->only([
            'type_service_id',
            'service',
            'price',
            'discounts'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Servicio modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json([
                'result' => false,
                'msg' => "El servicio no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $service->delete();

        return response()->json([
            'result' => true,
            'msg' => "Servicio eliminado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }

    public function serviceStats()
    {
        $services = Service::withCount('details')->has('details')
        ->orderByDesc('details_count')->with('details')->take(4)->get();

        if($services->count() <= 0){
            return response()->json([
                'result' => false,
                'msg' => "No hay estadisticas de los servicios"
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los servicios más comprados",
            'data' => $services
        ]);
    }
}
