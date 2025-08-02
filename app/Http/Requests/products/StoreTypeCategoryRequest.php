<?php

namespace App\Http\Requests\products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreTypeCategoryRequest extends FormRequest
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
            'type_category' => 'required|string|max:12|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/|unique:types_category,type_category'
        ];
    }

    public function messages()
    {
        return [
            'type_category.required' => 'El tipo de categoría es obligatorio.',
            'type_category.string' => 'El tipo de categoría debe ser una cadena de texto.',
            'type_category.max' => 'El tipo de categoría no debe exceder los 12 caracteres.',
            'type_category.regex' => 'El tipo de categoría solo puede contener letras, espacios y comillas simples.',
            'type_category.unique' => 'Ya existe un tipo de categoría con ese nombre.',
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
