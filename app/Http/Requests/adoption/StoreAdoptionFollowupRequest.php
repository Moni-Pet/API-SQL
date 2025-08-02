<?php

namespace App\Http\Requests\adoption;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreAdoptionFollowupRequest extends FormRequest
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
            'adoption_id' => 'required|exists:adoption,id',
            'follow_up_date' => 'required|date_format:Y-m-d H:i:s',
            'animal_condition' => 'required|in:Buenas condiciones,Mejor que antes,Regular,Peor que antes,Pésimas condiciones',
            'comment' => 'sometimes|nullable|string|max:250|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú0-9\s.,\-#()¿?¡!]*$/',
        ];
    }

    public function messages()
    {
        return [
            'adoption_id.required' => 'El campo adopción es obligatorio.',
            'adoption_id.exists' => 'La adopción seleccionada no existe.',

            'follow_up_date.required' => 'La fecha de seguimiento es obligatoria.',
            'follow_up_date.date_format' => 'La fecha de seguimiento debe tener el formato YYYY-MM-DD HH:MM:SS.',

            'animal_condition.required' => 'La condición del animal es obligatoria.',
            'animal_condition.in' => 'La condición del animal seleccionada no es válida.',

            'comment.string' => 'El comentario debe ser una cadena de texto.',
            'comment.max' => 'El comentario no debe exceder los 250 caracteres.',
            'comment.regex' => 'El comentario contiene caracteres no válidos.',
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
