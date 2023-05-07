<?php

namespace App\Http\Requests\Admin\Destination;

use Illuminate\Foundation\Http\FormRequest;

class CreateDestinationRequest extends FormRequest
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
            'image' => 'required|image|mimes:png,webp,jpg,jpeg',
            'country_id' => 'required|integer|exists:countries,id'
        ];
    }
}
