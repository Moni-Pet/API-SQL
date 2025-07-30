<?php

namespace App\Http\Requests\appointment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreAppointmentDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
            'services' => 'required|array|min:1',
            'services.*.service_id' => 'required|integer|exists:services,id',
        ];
    }

    public function messages()
    {
        return [
            'appointment_id.required' => 'La cita es obligatoria.',
            'appointment_id.integer' => 'La cita debe ser un número entero.',
            'appointment_id.exists' => 'La cita seleccionada no existe.',

            'services.required' => 'Debe agregar al menos un servicio.',
            'services.array' => 'Los servicios deben estar en un formato de lista.',
            'services.min' => 'Debe agregar al menos un servicio.',

            'services.*.service_id.required' => 'El ID del servicio es obligatorio.',
            'services.*.service_id.integer' => 'El ID del servicio debe ser un número entero.',
            'services.*.service_id.exists' => 'El servicio seleccionado no existe.',

            'services.*.price_service.numeric' => 'El precio del servicio debe ser un número.',
            'services.*.price_service.min' => 'El precio del servicio no puede ser negativo.',
            'services.*.price_service.max' => 'El precio del servicio no debe exceder 99999.99.',
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
