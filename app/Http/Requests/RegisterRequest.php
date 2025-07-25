<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:55|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/',
            'last_name' => 'required|string|max:55|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/',
            'last_name2' => 'nullable|string|max:55|regex:/^[A-Za-zÑñÁÉÍÓÚáéíóú\s\']+$/',
            'email' => [
                'required',
                'email',
                'unique:users,email',
                'regex:/^[^@]+@[^@]+\.[^@]+$/'   
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d])[A-Za-z\d\W_]{8,}$/',
                Password::min(8)->letters()->mixedCase()->numbers()->symbols()
            ],
            'gender' => 'required|in:Masculino,Femenino,39 tipos de gays',
            'birth_date' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'user_type_id.exists' => 'El tipo de usuario seleccionado no es válido.',
        
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe tener un formato válido.',
            'name.max' => 'El nombre no puede tener más de 55 caracteres.',
            'name.regex' => 'El nombre solo puede contener letras (incluyendo acentos).',

            'last_name.required' => 'El apellido paterno es obligatorio.',
            'last_name.string' => 'El apellido paterno debe tener un formato válido.',
            'last_name.max' => 'El apellido paterno no puede tener más de 55 caracteres.',
            'last_name.regex' => 'El apellido paterno solo puede contener letras (incluyendo acentos).',

            'last_name2.string' => 'El apellido materno debe tener un formato válido.',
            'last_name2.max' => 'El apellido materno no puede tener más de 55 caracteres.',
            'last_name2.regex' => 'El apellido materno solo puede contener letras (incluyendo acentos).',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe tener un formato válido.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'email.regex'=> 'El correo electronico debe tener un formato valido',

            'password.required' => 'La contraseña es obligatoria.',
            'password.string' => 'La contraseña debe tener un formato válido.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.regex' => 'La contraseña debe tener al menos 8 caracteres, una letra mayúscula, una minúscula, un número y un símbolo.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.letters' => 'La contraseña debe contener al menos una letra.',
            'password.mixedCase' => 'La contraseña debe contener letras mayúsculas y minúsculas.',
            'password.numbers' => 'La contraseña debe contener al menos un número.',
            'password.symbols' => 'La contraseña debe contener al menos un símbolo.',

            'gender.required' => 'El género es obligatorio.',
            'gender.in' => 'El género seleccionado no es válido.',

            'birth_date.required' => 'La fecha de nacimiento es obligatoria.',
            'birth_date.date' => 'La fecha de nacimiento debe debe tener un formato válido.',
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
