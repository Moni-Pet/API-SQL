<?php

namespace App\Http\Requests\appointment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateAppointmentDetailRequest extends FormRequest
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
            'service_id' => 'sometimes|integer|exists:services,id',
            'apointment_id' => 'sometimes|integer|exists:appointments,id',
            'price_service' => 'sometimes|numeric|min:0|max:99999.99',
            'discount' => 'sometimes|nullable|numeric|between:0,100',
        ];
    }

    public function messages()
    {
        return [
            'service_id.integer' => 'El campo servicio debe ser un número entero.',
            'service_id.exists' => 'El servicio seleccionado no existe.',

            'apointment_id.integer' => 'El campo cita debe ser un número entero.',
            'apointment_id.exists' => 'La cita seleccionada no existe.',

            'price_service.numeric' => 'El precio del servicio debe ser un número.',
            'price_service.min' => 'El precio del servicio no puede ser negativo.',
            'price_service.max' => 'El precio del servicio no debe exceder 99999.99.',

            'discount.numeric' => 'El descuento debe ser un número.',
            'discount.between' => 'El descuento debe estar entre 0 y 100.',
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
