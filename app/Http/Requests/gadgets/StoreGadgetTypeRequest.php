<?php

namespace App\Http\Requests\gadgets;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreGadgetTypeRequest extends FormRequest
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
            'gadget_type' => 'required|string|max:50|unique:gadget_types,gadget_type',
            'photo' => 'required|image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'gadget_type.required' => 'El nombre del tipo de gadget es obligatorio.',
            'gadget_type.string' => 'Debe ser una cadena de texto.',
            'gadget_type.max' => 'Máximo 50 caracteres.',
            'gadget_type.unique' => 'Ya existe un tipo de gadget con ese nombre.',

            'photo.image' => 'El archivo debe ser una imagen.',
            'photo.max' => 'La imagen no puede superar los 2MB.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'result' => false,
            'msg' => 'No se pudo crear el tipo de gadget.',
            'error_code' => 1205,
            'data' => $validator->errors(),
        ], 422));
    }
}
