<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            "name" => "required|string|min:2",
            "password" => "required|string|min:6"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "el campo es obligatorio",
            "name.min" => "requiere minimo 2 caracteres",
            "password.required" => "el campo es obligatorio",
            "password.min" => "requiere minimo 6 caracteres"
        ];
    }
}