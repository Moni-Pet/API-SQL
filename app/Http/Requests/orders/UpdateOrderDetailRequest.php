<?php

namespace App\Http\Requests\orders;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateOrderDetailRequest extends FormRequest
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
            'order_id' => 'sometimes|exists:orders,id',
            'product_id' => 'sometimes|exists:products,id',
            'quantity' => 'sometimes|integer|min:1|max:999',
            'price' => 'sometimes|numeric|between:0,99999.99',
            'discount' => 'sometimes|nullable|numeric|between:0,100',
        ];
    }

    public function messages()
    {
        return [
            'order_id.exists' => 'La orden seleccionada no existe.',

            'product_id.exists' => 'El producto seleccionado no existe.',

            'quantity.integer' => 'La cantidad debe ser un número entero.',
            'quantity.min' => 'La cantidad mínima permitida es 1.',
            'quantity.max' => 'La cantidad máxima permitida es 999.',

            'price.numeric' => 'El precio debe ser un número.',
            'price.between' => 'El precio debe estar entre 0 y 99,999.99.',

            'discount.numeric' => 'El descuento debe ser un número.',
            'discount.between' => 'El descuento debe estar entre 0 y 100.',
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
