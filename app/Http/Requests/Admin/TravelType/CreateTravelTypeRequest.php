<?php

namespace App\Http\Requests\Admin\TravelType;

use Illuminate\Foundation\Http\FormRequest;

class CreateTravelTypeRequest extends FormRequest
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
            'type' => 'required|string|max:255',
            'svg' => 'required|file|max:1024|mimes:svg'
        ];
    }
}
