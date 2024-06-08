<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            "remitente" => "required|string",
            "telefono" => "required|integer",
            "mensaje" => "required|string|min:5",
            "check" => "required"
        ];
    }

    public function messages()
    {
        return [
            "remitente.required" => "failed",
            "remitente.string" => "failed",
            "telefono.required" => "failed",
            "telefono.integer" => "failed",
            "mensaje.required" => "failed",
            "mensaje.string" => "failed",
            "mensaje.min" => "failed",
            "check.required" => "failed"
        ];
    }

}
