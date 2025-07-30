<?php

namespace App\Http\Requests\photos;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StorePetPhotoRequest extends FormRequest
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
            'pet_id' => 'required|exists:pets,id',
            'photo' => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'pet_id.required' => 'La mascota es obligatoria.',
            'pet_id.exists' => 'La mascota seleccionada no existe.',

            'photo.required' => 'La foto es obligatoria.',
            'photo.image' => 'El archivo debe ser una imagen válida.',
            'photo.mimes' => 'La imagen debe ser de tipo: jpeg, png, jpg, webp o svg.',
            'photo.max' => 'La imagen no debe superar los 2MB.',
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
