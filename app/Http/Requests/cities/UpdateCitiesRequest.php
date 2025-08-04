<?php

namespace App\Http\Requests\cities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateCitiesRequest extends FormRequest
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
            'city' => 'sometimes|string|min:1|max:150|regex:/^[A-Za-zÁÉÍÓÚÜÑñáéíóúü\s\']+$/u',
            'state_id' => 'required|exists:states,id'
        ];
    }

    public function messages()
    {
        return [
            'city.string' => 'La ciudad debe ser una cadena de texto.',
            'city.min' => 'La ciudad debe tener al menos 1 carácter.',
            'city.max' => 'La ciudad no debe exceder los 150 caracteres.',
            'city.regex' => 'La ciudad solo puede contener letras, espacios y comillas simples.',

            'state_id.required' => 'El estado es obligatorio.',
            'state_id.exists' => 'El estado seleccionado no es válido.',
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
