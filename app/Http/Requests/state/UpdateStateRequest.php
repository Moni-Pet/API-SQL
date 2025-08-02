<?php

namespace App\Http\Requests\state;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateStateRequest extends FormRequest
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
            'state' => 'required|string|min:1|max:150|regex:/^[A-Za-zÁÉÍÓÚÜÑñáéíóúü\s\']+$/u'
        ];
    }

    public function messages()
    {
        return [
            'state.required' => 'El estado es obligatorio.',
            'state.string' => 'El estado debe ser una cadena de texto.',
            'state.min' => 'El estado debe tener al menos 1 carácter.',
            'state.max' => 'El estado no debe exceder los 150 caracteres.',
            'state.regex' => 'El estado solo puede contener letras, espacios y comillas simples.',
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
