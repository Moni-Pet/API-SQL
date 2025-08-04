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
            'description' => 'sometimes|nullable|string|max:200|regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9\s.,;:()\-¡!¿?"\'%#&]+$/',
            'price' => 'sometimes|numeric|between:0,99999.99',
            'stock' => 'sometimes|integer|min:0|max:999',
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

            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.max' => 'La descripción no debe exceder los 200 caracteres.',
            'description.regex' => 'La descripción contiene caracteres no válidos.',

            'price.numeric' => 'El precio debe ser un valor numérico.',
            'price.between' => 'El precio debe estar entre 0 y 99,999.99.',

            'stock.integer' => 'La existencia debe ser un número entero.',
            'stock.min' => 'La existencia no puede ser menor que 0.',
            'stock.max' => 'La existencia no puede ser mayor a 999.',

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
