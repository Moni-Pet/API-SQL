<?php

namespace App\Http\Requests\pet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateBreedRequest extends FormRequest
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
            'type_pet_id' => 'sometimes|exists:types_pet,id',
            'breed' => 'sometimes|string|max:50|unique:breeds,breed|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/',
        ];
    }

    public function messages()
    {
        return [
            'type_pet_id.exists' => 'El tipo de mascota seleccionado no es válido.',

            'breed.string' => 'La raza debe ser una cadena de texto.',
            'breed.max' => 'La raza no debe exceder los 50 caracteres.',
            'breed.regex' => 'La raza solo puede contener letras, espacios y comillas simples.',
            'breed.unique' => 'Ya existe una raza con ese nombre.',
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
