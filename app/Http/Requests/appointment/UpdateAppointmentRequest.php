<?php

namespace App\Http\Requests\appointment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateAppointmentRequest extends FormRequest
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
            'user_id' => 'sometimes|integer|exists:users,id',
            'pet_id' => 'sometimes|integer|exists:pets,id',
            'status' => 'sometimes|in:pendiente,finalizado,cancelado',
            'descripcion' => 'sometimes|nullable|string|max:250|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú0-9\s.,\-#()¿?¡!]*$/',
            'total_price' => 'sometimes|numeric|min:0|max:99999.99',
            'creation_date' => 'sometimes|date_format:Y-m-d H:i:s',
            'date' => 'sometimes|date_format:Y-m-d H:i:s',
            'transferce_code' => 'sometimes|nullable|string|max:100',
            'type_appointment' => 'sometimes|in:Estetica,Medica,Adoptiva',
        ];
    }

    public function messages()
    {
        return [
            'user_id.integer' => 'El usuario debe ser un número entero.',
            'user_id.exists' => 'El usuario seleccionado no existe.',

            'pet_id.integer' => 'La mascota debe ser un número entero.',
            'pet_id.exists' => 'La mascota seleccionada no existe.',

            'status.in' => 'El estado seleccionado no es válido. Opciones válidas: pendiente, finalizado, cancelado.',

            'descripcion.string' => 'La descripción debe ser una cadena de texto.',
            'descripcion.max' => 'La descripción no debe exceder los 250 caracteres.',
            'descripcion.regex' => 'La descripción contiene caracteres no válidos.',

            'total_price.numeric' => 'El precio total debe ser un número.',
            'total_price.min' => 'El precio total no puede ser negativo.',
            'total_price.max' => 'El precio total no debe exceder 99999.99.',

            'creation_date.date_format' => 'La fecha de creación debe tener el formato YYYY-MM-DD HH:MM:SS.',

            'date.date_format' => 'La fecha debe tener el formato YYYY-MM-DD HH:MM:SS.',

            'transferce_code.string' => 'El código de transferencia debe ser texto.',
            'transferce_code.max' => 'El código de transferencia no debe exceder 100 caracteres.',

            'type_appointment.in' => 'El tipo de cita no es válido. Opciones válidas: Estetica, Medica, Adoptiva.',
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
