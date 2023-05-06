<?php

namespace App\Http\Requests\Admin\Employee;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'id' => 'required|integer|exists:employees,id',
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,webp,jpeg',
            'email' => 'required|email|unique:employees,email,' . request('id'),
            'password' => 'required|string|confirmed',
            'phone' => 'required|numeric|unique:employees,phone,' . request('id'),
            'location' => 'required|string',
            'position' => 'required|string|max:255',
            'biography' => 'required|string'
        ];
    }
}
