<?php

namespace App\Http\Requests\products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateProductRequest extends FormRequest
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
            'name' => 'sometimes|string|min:3|max:249|regex:/^[A-Za-zÁÉÍÓÚÜÑñáéíóúü\s]+$/u',
            'price' => 'sometimes|numeric|between:0,99999.99',
            'exists' => 'sometimes|integer|min:0|max:999',
            'discount' => 'nullable|numeric|between:0,100',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre no debe exceder los 249 caracteres.',
            'name.regex' => 'El nombre solo puede contener letras y espacios.',

            'price.numeric' => 'El precio debe ser un valor numérico.',
            'price.between' => 'El precio debe estar entre 0 y 99,999.99.',

            'exists.integer' => 'La existencia debe ser un número entero.',
            'exists.min' => 'La existencia no puede ser menor que 0.',
            'exists.max' => 'La existencia no puede ser mayor a 999.',

            'discount.numeric' => 'El descuento debe ser un valor numérico.',
            'discount.between' => 'El descuento debe estar entre 0% y 100%.',
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
