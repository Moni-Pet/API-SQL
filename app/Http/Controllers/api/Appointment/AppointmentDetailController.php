<?php

namespace App\Http\Controllers\api\Appointment;

use App\Http\Controllers\Controller;
use App\Http\Requests\appointment\StoreAppointmentDetailRequest;
use App\Http\Requests\appointment\UpdateAppointmentDetailRequest;
use App\Models\AppointmentDetail;
use App\Models\Service;
use Illuminate\Http\Request;

class AppointmentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appontmentDetails = AppointmentDetail::with('service')->get();

        if ($appontmentDetails->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron detalles de citas registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los detalles de las citas fueron encontradas",
            'error_code' => null,
            'data' => $appontmentDetails,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentDetailRequest $request)
    {
        $validated = $request->validated();
        $appointment_id = $validated['appointment_id'];
        $services = $validated['services'];
        $createdServices = [];

        foreach ($services as $service) {
            $service = Service::find($service['service_id']);

            if (!$service) {
                return response()->json([
                    'result' => false,
                    'msg' => "Servicio con ID {$service['service_id']} no encontrado.",
                    'error_code' => 1202,
                    'data' => null
                ], 404);
            }
            
            $discount = ($service->price * $service->discounts) / 100;

            $createdServices[] = AppointmentDetail::create([
                'service_id' => $service->id,
                'appointment_id' => $appointment_id,
                'price_service' => $service->price,
                'discount' => $discount
            ]);
        }

        return response()->json([
            'result' => true,
            'msg' => "Detalles de cita creados correctamente.",
            'error_code' => null,
            'data' => $createdServices,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $appointmentDetail = AppointmentDetail::with('service')->find($id);

        if (!$appointmentDetail) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el detalle de cita especificado.",
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Detalle de cita encontrado.",
            'error_code' => null,
            'data' => $appointmentDetail,
        ], 200);
    }

    public function showAppointmentDetails(int $id) 
    {
        $appointmentDetails = AppointmentDetail::with('service')
            ->where('appointment_id', $id)
            ->get();

        if ($appointmentDetails->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron los detalles de la cita especificada.",
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Detalles de la cita encontrados.",
            'error_code' => null,
            'data' => $appointmentDetails,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentDetailRequest $request, int $id)
    {
        $appointmentDetail = AppointmentDetail::find($id);

        if (!$appointmentDetail) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el detalle de cita especificado.",
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        $data = $request->only([
            'service_id',
            'appointment_id',
            'price_service',
            'discount',
        ]);

        if ($request->service_id !== $appointmentDetail->service_id) {
            $service = Service::find($request->service_id);

            if (!$service) {
                return response()->json([
                    'result' => false,
                    'msg' => "El servicio especificado no existe.",
                    'error_code' => 1203,
                    'data' => null
                ], 404);
            }

            $data['price_service'] = $service->price;
            $data['discount'] = ($service->price * $service->discounts) / 100;
        }

        $appointmentDetail->update($data);

        return response()->json([
            'result' => true,
            'msg' => "Detalle de cita actualizado correctamente.",
            'error_code' => null,
            'data' => $appointmentDetail,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $appointmentDetail = AppointmentDetail::find($id);

        if (!$appointmentDetail) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el detalle de cita especificado.",
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        $appointmentDetail->delete();

        return response()->json([
            'result' => true,
            'msg' => "Detalle de cita eliminado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
