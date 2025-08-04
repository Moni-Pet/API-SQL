<?php

namespace App\Http\Requests\pet;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePetRequest extends FormRequest
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
            'breed_id' => 'required|exists:breeds,id',
            'name' => 'required|string|max:55|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/',
            'birthday' => 'sometimes|nullable|date',
            'gender' => 'required|in:Macho,Hembra,Desconocido',
            'spayed' => 'required|boolean',
            'size' => 'required|in:Chico,Mediano,Grande',
            'weight' => 'required|numeric|min:0|max:999.99|regex:/^\d{1,3}(\.\d{1,2})?$/',
            'height' => 'required|numeric|min:0|max:999.99|regex:/^\d{1,3}(\.\d{1,2})?$/',
            'description' => 'required|string|max:200|regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9\s.,;:()\-¡!¿?"\'%#&]+$/',
            'status' => 'required|in:Adoptado,No adoptado,Pendiente,Personal',
            'id_adopter' => 'sometimes|nullable|exists:users,id',
            'photo' => 'image|mimes:jpeg,png,jpg,webp,svg|max:2048|nullable'
        ];
    }

    public function messages()
    {
        return [
            'breed_id.required' => 'La raza es obligatoria.',
            'breed_id.exists' => 'La raza seleccionada no es válida.',

            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no debe exceder los 55 caracteres.',
            'name.regex' => 'El nombre solo puede contener letras, espacios y comillas simples.',

            'birthday.date' => 'La fecha de nacimiento debe ser una fecha válida.',

            'gender.required' => 'El género es obligatorio.',
            'gender.in' => 'El género debe ser Macho, Hembra o Desconocido.',

            'spayed.required' => 'Debe indicar si la mascota está esterilizada.',
            'spayed.boolean' => 'El valor de esterilización debe ser verdadero o falso.',

            'size.required' => 'El tamaño es obligatorio.',
            'size.in' => 'El tamaño debe ser Chico, Mediano o Grande.',

            'weight.required' => 'El peso es obligatorio.',
            'weight.numeric' => 'El peso debe ser un valor numérico.',
            'weight.min' => 'El peso no puede ser menor que 0.',
            'weight.max' => 'El peso no puede ser mayor a 999.99.',
            'weight.regex' => 'El peso debe tener hasta 3 dígitos enteros y 2 decimales.',

            'height.required' => 'La altura es obligatoria.',
            'height.numeric' => 'La altura debe ser un valor numérico.',
            'height.min' => 'La altura no puede ser menor que 0.',
            'height.max' => 'La altura no puede ser mayor a 999.99.',
            'height.regex' => 'La altura debe tener hasta 3 dígitos enteros y 2 decimales.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'description.max' => 'La descripción no debe exceder los 200 caracteres.',
            'description.regex' => 'La descripción contiene caracteres no válidos.',

            'status.required' => 'El estado es obligatorio.',
            'status.in' => 'El estado debe ser Adoptado, No adoptado, Pendiente o Personal.',

            'id_adopter.exists' => 'El adoptante seleccionado no es válido.',

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
