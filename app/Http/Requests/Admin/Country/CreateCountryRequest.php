<?php

namespace App\Http\Requests\Admin\Country;

use Illuminate\Foundation\Http\FormRequest;

class CreateCountryRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:countries,name',
            'iso' => 'required|string|max:3|unique:countries,iso',
            'code' => 'required|integer|unique:countries,code',
            'image' => 'required|image|mimes:png,webp,jpg,jpeg'
        ];
    }
}
