<?php

namespace App\Http\Requests\gadgets;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreGadgetRequest extends FormRequest
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
            'mac_address' => 'required|string|max:17|unique:gadgets,mac_address|regex:/^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$/',
            'gadget_type_id' => 'required|integer|exists:gadget_types,id',
            'alias' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'mac_address.required' => 'La dirección MAC es obligatoria.',
            'mac_address.string' => 'La dirección MAC debe ser un texto.',
            'mac_address.max' => 'La dirección MAC no puede superar los 17 caracteres.',
            'mac_address.unique' => 'Ya existe un gadget con esta dirección MAC.',
            'mac_address.regex' => 'El formato de la MAC address no es válido. (Ej: AA:BB:CC:DD:EE:FF)',

            'gadget_type_id.required' => 'El tipo de gadget es obligatorio.',
            'gadget_type_id.integer' => 'El tipo de gadget debe ser un número válido.',
            'gadget_type_id.exists' => 'El tipo de gadget seleccionado no existe.',

            'alias.string' => 'El alias debe ser una cadena de texto.',
            'alias.max' => 'El alias no puede superar los 255 caracteres.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'result' => false,
            'msg' => 'Los datos del gadget no son válidos.',
            'error_code' => 1205,
            'data' => $validator->errors(),
        ], 422));
    }
}
