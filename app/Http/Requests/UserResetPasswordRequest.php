<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserResetPasswordRequest extends FormRequest
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
            'password' => 'required|min:6',
            'confirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'el campo es obligatorio',
            'password.min' => 'tiene que tener un minimo de 6 caracteres',
            'confirm.required' => 'el campo es obligatorio',
            'confirm.same' => 'las contraseñas no coinciden',
        ];
    }
}
