<?php

namespace App\Http\Requests\NoSqlRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ChatRequest extends FormRequest
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
            'user_id'    => 'required|integer|exists:users,id',
            'pet_id' => 'required|integer|exists:pets,id',
            'text'       => 'required|string|max:500',
        ];
    }
    public function messages()
    {
        return [
            'user_id.required'    => 'Debes especificar el usuario.',
            'user_id.integer'     => 'El usuario debe ser un ID numérico.',
            'user_id.exists'      => 'El usuario seleccionado no existe.',

            'mascota_id.required' => 'Debes especificar la mascota.',
            'mascota_id.integer'  => 'La mascota debe ser un ID numérico.',
            'mascota_id.exists'   => 'La mascota seleccionada no existe.',

            'sender.required'     => 'Debes indicar quién envía el mensaje.',
            'sender.string'       => 'El emisor debe ser texto.',
            'sender.in'           => 'El emisor debe ser "user" o "admin".',

            'text.required'       => 'El mensaje no puede estar vacío.',
            'text.string'         => 'El mensaje debe ser texto.',
            'text.max'            => 'El mensaje no puede exceder 500 caracteres.',
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
