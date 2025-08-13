<?php

namespace App\Http\Requests\adoption;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreAdopterRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id|unique:adopters,user_id',
            'phone' => 'required|string|size:10|regex:/^\d{10}$/',
            'street' => 'required|string|max:250|regex:/^[A-Za-zÑñÁ-Úá-ú0-9\s,\.\-\#]+$/',
            'neighborhood' => 'required|string|max:100|regex:/^[A-Za-zÑñÁ-Úá-ú0-9\s,\.\-\#]+$/',
            'city_id' => 'required|exists:cities,id',
            'state_id' => 'required|exists:states,id',
            'postal_code' => 'required|string|size:5|regex:/^\d{5}$/',
            'reference' => 'sometimes|nullable|string|max:250|regex:/^[A-Za-z0-9\s,\.\-\#]*$/',
        ];
    }

    public function messages()
    {
        return [
            'user_id.exists' => 'El usuario seleccionado no existe.',

            'phone.required' => 'El teléfono es obligatorio.',
            'phone.string' => 'El teléfono debe ser una cadena de texto.',
            'phone.size' => 'El teléfono debe tener exactamente 10 dígitos.',
            'phone.regex' => 'El teléfono debe contener solo números y tener 10 dígitos.',

            'street.required' => 'La calle es obligatoria.',
            'street.string' => 'La calle debe ser una cadena de texto.',
            'street.max' => 'La calle no debe exceder los 250 caracteres.',
            'street.regex' => 'La calle contiene caracteres inválidos.',

            'neighborhood.required' => 'La colonia es obligatoria.',
            'neighborhood.string' => 'La colonia debe ser una cadena de texto.',
            'neighborhood.max' => 'La colonia no debe exceder los 100 caracteres.',
            'neighborhood.regex' => 'La colonia contiene caracteres inválidos.',

            'city_id.required' => 'La ciudad es obligatoria.',
            'city_id.exists' => 'La ciudad seleccionada no existe.',

            'state_id.required' => 'El estado es obligatorio.',
            'state_id.exists' => 'El estado seleccionado no existe.',

            'postal_code.required' => 'El código postal es obligatorio.',
            'postal_code.string' => 'El código postal debe ser una cadena de texto.',
            'postal_code.size' => 'El código postal debe tener exactamente 5 dígitos.',
            'postal_code.regex' => 'El código postal debe contener solo números y tener 5 dígitos.',

            'reference.string' => 'La referencia debe ser una cadena de texto.',
            'reference.max' => 'La referencia no debe exceder los 250 caracteres.',
            'reference.regex' => 'La referencia contiene caracteres inválidos.',
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
