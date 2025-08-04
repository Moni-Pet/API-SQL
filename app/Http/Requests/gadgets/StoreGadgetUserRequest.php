<?php

namespace App\Http\Requests\gadgets;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreGadgetUserRequest extends FormRequest
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
            'mac_address' => 'required|string|max:17|exists:gadgets,mac_address|regex:/^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$/',
            'user_id' => 'required|exists:users,id'
        ];
    }

    public function messages()
    {
        return [
            'mac_address.required' => 'La dirección MAC es obligatoria.',
            'mac_address.string' => 'La dirección MAC debe ser un texto.',
            'mac_address.max' => 'La dirección MAC no puede superar los 17 caracteres.',
            'mac_address.exists' => 'El gadget no esta registrado en la bd.',
            'mac_address.regex' => 'El formato de la MAC address no es válido. (Ej: AA:BB:CC:DD:EE:FF)',
            
            'user_id.required' => 'El campo usuario es obligatorio.',
            'user_id.exists' => 'El usuario seleccionado no existe.',
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
