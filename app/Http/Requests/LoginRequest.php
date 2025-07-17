<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'exists:users,email',
                'regex:/^[^@]+@[^@]+\.[^@]+$/'   
            ],
            'password' => [
                'required',
                'string',
            ]
        ];
    }

    public function messages()
    {
        return[
            'email.required' => 'El correo electronico es obligatorio',
            'email.email'=> 'El correo electronico debe tener un formato valido',
            'email.exists:user.email'=> 'EL correo electronico no pertenece a ningun usuario registrado',
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
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        throw new HttpResponseException(response()->json([
            'result' => false,
            'msg' => 'Los datos proporcionados no son  validos',
            'error_code'=> 1205,
            'data' => $errors,
        ],422));
    }
}
