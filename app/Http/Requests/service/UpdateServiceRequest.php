<?php

namespace App\Http\Requests\service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateServiceRequest extends FormRequest
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
            'type_service_id' => 'sometimes|exists:types_services,id',
            'service' => 'sometimes|string|min:1|max:150|regex:/^[A-Za-zÁÉÍÓÚÜÑñáéíóúü\s\']+$/u',
            'price' => 'sometimes|numeric|min:0|max:99999.99',
            'discounts' => 'sometimes|numeric|min:0|max:100'
        ];
    }

    public function messages()
    {
        return [
            'type_service_id.exists' => 'El tipo de servicio seleccionado no es válido.',

            'service.string' => 'El nombre del servicio debe ser una cadena de texto.',
            'service.min' => 'El nombre del servicio debe tener al menos 1 carácter.',
            'service.max' => 'El nombre del servicio no debe exceder los 150 caracteres.',
            'service.regex' => 'El nombre del servicio solo puede contener letras, espacios y comillas simples.',

            'price.numeric' => 'El precio debe ser un valor numérico.',
            'price.min' => 'El precio no puede ser menor que 0.',
            'price.max' => 'El precio no puede ser mayor a 99999.99.',

            'discounts.numeric' => 'El descuento debe ser un valor numérico.',
            'discounts.min' => 'El descuento no puede ser menor que 0%.',
            'discounts.max' => 'El descuento no puede ser mayor al 100%.',
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
