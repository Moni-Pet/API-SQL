<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class   TwoAfVerificationRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'code' => ['required', 'regex:/^\d{6}$/']
        ];
    }
    public function messages()
    {
        return[
            'email.required' => 'El correo electronico es obligatorio',
            'email.email'=> 'El correo electronico debe tener un formato valido',
            'email.exists'=> 'EL correo electronico no pertenece a ningun usuario registrado',
            'email.regex'=> 'El correo electronico debe tener un formato valido',

            'code.required' => 'El codigo es obligatorio.',
            'code.regex' => 'El codigo dedbe contener exactamente 6 digitos.'
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
