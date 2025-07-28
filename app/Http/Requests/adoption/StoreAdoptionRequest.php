<?php

namespace App\Http\Requests\adoption;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreAdoptionRequest extends FormRequest
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
            'adopter_id' => 'required|exists:adopters,id',
            'pet_id' => 'required|exists:pets,id',
            'date' => 'sometimes|date_format:Y-m-d H:i:s',
            'adoption_status' => 'required|in:En proceso,Cancelada,Realiazada,Revocada',
            'notes' => 'sometimes|nullable|string|max:250',
            'delivery_date' => 'sometimes|nullable|date_format:Y-m-d H:i:s',
        ];
    }

    public function messages()
    {
        return [
            'adopter_id.required' => 'El adoptante es obligatorio.',
            'adopter_id.exists' => 'El adoptante seleccionado no existe.',

            'pet_id.required' => 'La mascota es obligatoria.',
            'pet_id.exists' => 'La mascota seleccionada no existe.',

            'date.date_format' => 'La fecha de solicitud debe tener el formato YYYY-MM-DD HH:MM:SS.',

            'adoption_status.required' => 'El estado es obligatorio.',
            'adoption_status.in' => 'El estado debe ser uno de los siguientes: En proceso, Cancelada, Realiazada, Revocada.',

            'notes.string' => 'Las notas deben ser una cadena de texto.',
            'notes.max' => 'Las notas no deben exceder los 250 caracteres.',

            'delivery_date.date_format' => 'La fecha de entrega debe tener el formato YYYY-MM-DD HH:MM:SS.',
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
