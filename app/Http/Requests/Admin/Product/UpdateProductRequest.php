<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:products,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'image|mimes:png,webp,jpg,jpeg',
            'discount' => 'required|numeric',
            'rate' => 'required|integer',
            'count' => 'required|integer'
        ];
    }
}
