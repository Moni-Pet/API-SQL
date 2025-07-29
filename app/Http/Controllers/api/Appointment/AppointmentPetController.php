<?php

namespace App\Http\Controllers\api\Appointment;

use App\Http\Controllers\Controller;
use App\Http\Requests\appointment\StoreAppointmentPetRequest;
use App\Http\Requests\appointment\UpdateAppointmentPetRequest;
use App\Models\AppointmentPet;
use Illuminate\Http\Request;

class AppointmentPetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointmentPets = AppointmentPet::with(['appointment', 'pet'])->get();
        
        if ($appointmentPets->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron registros.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las relaciones cita-mascota fueron encontradas",
            'error_code' => null,
            'data' => $appointmentPets,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentPetRequest $request)
    {
        $appointmentPet = AppointmentPet::create([
            'apointment_id' => $request->appointment_id,
            'pet_id' => $request->pet_id,
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Relación cita-mascota creada correctamente.',
            'error_code' => null,
            'data' => $appointmentPet
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $appointmentPet = AppointmentPet::with(['appointment', 'pet'])->find($id);

        if (!$appointmentPet) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la relación cita-mascota.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Relación cita-mascota encontrada",
            'error_code' => null,
            'data' => $appointmentPet,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentPetRequest $request, int $id)
    {
        $appointmentPet = AppointmentPet::find($id);

        if (!$appointmentPet) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la relación cita-mascota.",
                'data' => null
            ], 404);
        }

        $appointmentPet->update($request->only(['appointment_id', 'pet_id']));

        return response()->json([
            'result' => true,
            'msg' => 'Relación cita-mascota modificada correctamente.',
            'error_code' => null,
            'data' => $appointmentPet
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $appointmentPet = AppointmentPet::find($id);

        if (!$appointmentPet) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la relación cita-mascota.",
                'data' => null
            ], 404);
        }

        $appointmentPet->delete();

        return response()->json([
            'result' => true,
            'msg' => "Relación cita-mascota eliminada correctamente.",
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
