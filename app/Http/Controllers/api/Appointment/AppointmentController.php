<?php

namespace App\Http\Controllers\api\Appointment;

use App\Http\Controllers\Controller;
use App\Http\Requests\appointment\StoreAppointmentRequest;
use App\Http\Requests\appointment\UpdateAppointmentRequest;
use App\Models\Appointment;
use App\Notifications\AppointmentCancelledNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('user', 'pet.breed.typePet', 'user', 'pet.petPhotos', 'details.service.type', 'appointmentPets.pet.breed.typePet', 'appointmentPets.pet.petPhotos')->get();

        if ($appointments->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron citas registradas.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las citas fueron encontradas",
            'error_code' => null,
            'data' => $appointments,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request)
    {
        $creation_date = now();

        $appointment = Appointment::create([
            'user_id' => $request->user_id,
            'pet_id' => $request->pet_id,
            'status' => "Pendiente",
            'descripcion' => $request->descripcion,
            'total_price' => $request->total_price,
            'creation_date' => $creation_date,
            'date' => $request->date,
            'transferce_code' => $request->transferce_code,
            'type_appointment' => $request->type_appointment
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Cita creada correctamente.',
            'error_code' => null,
            'data' =>[
                'appointment_id' => $appointment->id
            ]
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $appointment = Appointment::with('user', 'pet.breed.typePet', 'user', 'pet.petPhotos', 'details.service.type',  'appointmentPets.pet.breed.typePet', 'appointmentPets.pet.petPhotos')->find($id);

        if (!$appointment) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la cita especificada.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Cita encontrada",
            'error_code' => null,
            'data' => $appointment,
        ], 200);
    }

    public function showUserAppointments(?int $id = null)
    {
        $userId = $id ?? auth()->id();

        $appointments = Appointment::with('user', 'pet', 'details.service.type', 'appointmentPets')
            ->where('user_id', $userId)
            ->get();

        if($appointments->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron citas del usuario especificado.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "citas del usuario encontradas",
            'error_code' => null,
            'data' => $appointments,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, int $id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la cita especificada.",
                'data' => null
            ], 404);
        }
        
        $nuevoStatus = $request->status;
        $statusAnterior = $appointment->status;

        if ($nuevoStatus === 'Cancelada' && $statusAnterior !== 'Cancelada') {
            if (auth()->check() && in_array(auth()->user()->user_type_id, [1, 2])) {
                if ($appointment->user) {
                    $appointment->user->notify(new AppointmentCancelledNotification($appointment));
                    event(new \App\Events\AppointmentCancelledEvent($appointment));
                }
            }
        }

        $appointment->update($request->only([
            'user_id',
            'pet_id',
            'status',
            'descripcion',
            'total_price',
            'creation_date',
            'date',
            'transferce_code',
            'type_appointment'
        ]));

        return response()->json([
            'result' => true,
            'msg' => 'Cita actualizada correctamente.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la cita especificada.",
                'data' => null
            ], 404);
        }

        $appointment->delete();

        return response()->json([
            'result' => true,
            'msg' => "Cita eliminada correctamente.",
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
