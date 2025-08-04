<?php

namespace App\Http\Requests\orders;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreOrderRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'purchase_date' => 'date_format:Y-m-d H:i:s',
            'pickup_date' => 'sometimes|nullable|date_format:Y-m-d H:i:s',
            'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'status' => 'required|in:Pendiente,Entregada,Cancelada',
            'transferce_code' => 'sometimes|nullable|string|max:100'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'El campo usuario es obligatorio.',
            'user_id.exists' => 'El usuario seleccionado no existe.',
            
            'purchase_date.date_format' => 'La fecha de compra debe tener el formato: YYYY-MM-DD HH:MM:SS.',

            'pickup_date.date_format' => 'La fecha de recogida debe tener el formato: YYYY-MM-DD HH:MM:SS.',

            'price.required' => 'El precio es obligatorio.',
            'price.numeric' => 'El precio debe ser un número.',
            'price.min' => 'El precio no puede ser negativo.',
            'price.regex' => 'El precio debe tener hasta dos decimales.',

            'status.required' => 'El estado es obligatorio.',
            'status.in' => 'El estado debe ser uno de los siguientes: pendiente, entregado o cancelado.',

            'transferce_code.string' => 'El código de transferencia debe ser una cadena de texto.',
            'transferce_code.max' => 'El código de transferencia no debe exceder los 100 caracteres.',
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
