<?php

namespace App\Http\Requests\products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateCategoryRequest extends FormRequest
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
            'category' => 'sometimes|string|max:12|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/',
            'type_category_id' => 'required|exists:types_category,id'
        ];
    }

    public function messages()
    {
        return [
            'category.string' => 'La categoría debe ser una cadena de texto.',
            'category.max' => 'La categoría no debe exceder los 12 caracteres.',
            'category.regex' => 'La categoría solo puede contener letras, espacios y comillas simples.',
            'category.unique' => 'Ya existe una categoría con ese nombre.',

            'type_category_id.required' => 'El tipo de categoría es obligatorio.',
            'type_category_id.exists' => 'El tipo de categoría seleccionado no es válido.',
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
