<?php

namespace App\Http\Requests\service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreTypeServiceRequest extends FormRequest
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
            'type_service' => 'required|string|max:12|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/|unique:types_services,type_service',
            'icono' => 'required|string|max:65535'
        ];
    }

    public function messages()
    {
        return [
            'type_service.required' => 'El tipo de servicio es obligatorio.',
            'type_service.string' => 'El tipo de servicio debe ser una cadena de texto.',
            'type_service.max' => 'El tipo de servicio no debe exceder los 12 caracteres.',
            'type_service.regex' => 'El tipo de servicio solo puede contener letras, espacios y comillas simples.',
            'type_service.unique' => 'Ya existe un tipo de servicio con ese nombre.',

            'icono.required' => 'El icono es obligatorio.',
            'icono.string' => 'El icono debe ser una cadena de texto.',
            'icono.max' => 'El icono no debe exceder los 65535 caracteres.',
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
