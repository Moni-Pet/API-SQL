<?php

namespace App\Http\Requests\gadgets;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateGadgetRequest extends FormRequest
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
            'alias' => 'nullable|string|max:255',
            'pet_id' => 'nullable|exists:pets,id',
        ];
    }

    public function messages()
    {
        return [
            'alias.string' => 'El alias debe ser una cadena de texto.',
            'alias.max' => 'El alias no puede superar los 255 caracteres.',

            'pet_id.exists' => 'La mascota seleccionada no existe.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'result' => false,
            'msg' => 'Los datos proporcionados no son válidos.',
            'error_code' => 1205,
            'data' => $validator->errors(),
        ], 422));
    }
    
}
