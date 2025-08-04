<?php

namespace App\Http\Requests\pet;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdatePetTypeRequest extends FormRequest
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
            'type_pet' => 'sometimes|string|max:12|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/',
            'icono' => 'sometimes|string|max:2083'
        ];
    }

    public function messages()
    {
        return [
            'type_pet.string' => 'El tipo de mascota debe ser una cadena de texto.',
            'type_pet.max' => 'El tipo de mascota no debe exceder los 12 caracteres.',
            'type_pet.regex' => 'El tipo de mascota solo puede contener letras, espacios y comillas simples.',
            'type_pet.unique' => 'Ya existe este tipo de mascota.',

            'icono.string' => 'El icono debe ser una cadena de texto.',
            'icono.max' => 'El icono no debe exceder los 2083 caracteres.',
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
