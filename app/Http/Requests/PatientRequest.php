<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
        return[
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',

            'allergy' => 'nullable|string|max:255',
            'chronic_conditions' => 'nullable|string|max:255',
            'past_surgeries' => 'nullable|string|max:255',
            'family_medical_history' => 'nullable|string|max:255',
            
            'blood_group' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',

            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:20', 
        ];
    }
}
