<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
{
       public function authorize(): bool
    {
        return true;
    }
    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'price' => 'required|numeric|max:1000000',
            'category_id' => 'required|int|exists:categories,id',
            'img' => 'required|image|max:5120'
        ];
    }
}
