<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class recoveryPassword extends FormRequest
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
                'sometimes',
                'string',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d])[A-Za-z\d\W_]{8,}$/',
                Password::min(8)->letters()->mixedCase()->numbers()->symbols()
            ],
        ];
    }

    public function messages()
    {
        return  [
            'email.required' => 'El correo electronico es obligatorio',
            'email.email'=> 'El correo electronico debe tener un formato valido',
            'email.exists'=> 'EL correo electronico no pertenece a ningun usuario registrado',
            'email.regex'=> 'El correo electronico debe tener un formato valido',
            
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

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'result' => false,
            'msg' => 'Los datos proporcionados no son válidos.',
            'error_code' =>  1205,
            'data' => $validator->errors(),
        ], 422));
    }
}
