<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name'      => 'required|string|max:255',
            'middle_name'     => 'nullable|string|max:255',
            'last_name'       => 'required|string|max:255',

            'specialization'  => 'required|string|max:255',
            'qualifications'  => 'required|string|max:500',
            
            'license'         => 'required|string|max:50|unique:doctors,license,' . $this->route('doctor'),

            'contact_number'  => 'required|string|max:20', 
            'email'           => 'required|string|max:255|unique:doctors,email,' . $this->route('doctor'),

            'bio'             => 'required|string|max:1000', 
            'assigned_clinic' => 'required|string|max:255',
        ];
    }
}
