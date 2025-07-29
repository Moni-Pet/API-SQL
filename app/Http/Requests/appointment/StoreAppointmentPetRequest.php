<?php

namespace App\Http\Requests\appointment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreAppointmentPetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'appointment_id' => 'required|integer|exists:appointments,id',
            'pet_id' => 'required|integer|exists:pets,id',
        ];
    }

    public function messages()
    {
        return [
            'appointment_id.required' => 'La cita es obligatoria.',
            'appointment_id.integer' => 'El ID de la cita debe ser un número entero.',
            'appointment_id.exists' => 'La cita seleccionada no existe.',

            'pet_id.required' => 'La mascota es obligatoria.',
            'pet_id.integer' => 'El ID de la mascota debe ser un número entero.',
            'pet_id.exists' => 'La mascota seleccionada no existe.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        throw new HttpResponseException(response()->json([
            'result' => false,
            'msg' => 'Los datos proporcionados no son válidos.',
            'error_code' =>  1205,
            'data' => $errors,
        ], 422));
    }
}
