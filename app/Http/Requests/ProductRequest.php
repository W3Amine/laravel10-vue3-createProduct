<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    
    public function authorize(): bool
    {
        return true;
    }



    public function rules(): array
    {

        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|max:8048',
            'categories' => ['required' , 'array' , Rule::exists('categories', 'id')],

        ];
    }
}
