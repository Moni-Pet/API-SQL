<?php

namespace App\Http\Requests\orders;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class StoreOrderDetailRequest extends FormRequest
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
            'order_id' => 'required|exists:orders,id',
            'items' => 'required|array|min:1',
            'items.*.producto_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1|max:999',
        ];
    }

    public function messages()
    {
        return [
            'order_id.required' => 'La orden es obligatoria.',
            'order_id.exists' => 'La orden seleccionada no existe.',

            'items.required' => 'Se requiere al menos un producto.',
            'items.array' => 'Los productos deben enviarse como un arreglo.',
            'items.min' => 'Debes agregar al menos un producto.',

            'items.*.producto_id.required' => 'El producto es obligatorio.',
            'items.*.producto_id.exists' => 'El producto seleccionado no existe.',

            'items.*.quantity.required' => 'La cantidad es obligatoria.',
            'items.*.quantity.integer' => 'La cantidad debe ser un número entero.',
            'items.*.quantity.min' => 'La cantidad mínima permitida es 1.',
            'items.*.quantity.max' => 'La cantidad máxima permitida es 999.',
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
