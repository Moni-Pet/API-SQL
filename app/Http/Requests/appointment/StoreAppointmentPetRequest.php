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
            'pet_id' => 'required|array|min:1',
            'pet_id.*' => 'integer|exists:pets,id',  
        ];
    }

    public function messages()
    {
        return [
            'appointment_id.required' => 'La cita es obligatoria.',
            'appointment_id.integer' => 'El ID de la cita debe ser un número entero.',
            'appointment_id.exists' => 'La cita seleccionada no existe.',

            'pet_id.required' => 'La lista de mascotas es obligatoria.',
            'pet_id.array' => 'Las mascotas deben enviarse en un arreglo.',
            'pet_id.min' => 'Debe haber al menos una mascota seleccionada.',
            'pet_id.*.integer' => 'Cada ID de mascota debe ser un número entero.',
            'pet_id.*.exists' => 'Una o más mascotas seleccionadas no existen.',
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
