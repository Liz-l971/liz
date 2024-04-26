<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => 'required|string|min:2|max:255',
            'surname' => 'required|string|min:2|max:255',
            'patronymic' => 'string|min:2|max:255',
            'login' => 'required|string|min:2|max:255|unique:users,login',
            'email' => 'required|string|min:5|max:255|email|unique:users,email',
            'password' => 'required|string|min:6|max:255|same:password_r'
        ];
    }
}
