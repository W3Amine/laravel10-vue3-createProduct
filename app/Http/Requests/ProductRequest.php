<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
<<<<<<< Updated upstream

    
=======
>>>>>>> Stashed changes
    public function authorize(): bool
    {
        return true;
    }

<<<<<<< Updated upstream


=======
>>>>>>> Stashed changes
    public function rules(): array
    {

        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|max:8048',
            'categories' => ['required', 'array', Rule::exists('categories', 'id')],

        ];
    }
}
