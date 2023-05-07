<?php

namespace App\Http\Requests\Admin\Tour;

use Illuminate\Foundation\Http\FormRequest;

class CreateTourRequest extends FormRequest
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
            'number_of_days' => 'required|integer',
            'rate' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,webp,jpeg',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'icon' => 'required|image|mimes:png,jpg,webp,jpeg',
            'country_id' => 'required|integer|exists:countries,id',
            'travel_type_id' => 'required|integer|exists:travel_types,id'
        ];
    }
}
