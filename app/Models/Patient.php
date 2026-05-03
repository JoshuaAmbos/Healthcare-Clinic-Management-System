<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public const BLOOD_TYPES = [
        'A+',
        'A-',
        'B+',
        'B-',
        'AB+',
        'AB-',
        'O+',
        'O-',
        ];

    // protected $attributes = [
    //     'middle_name' => 'None',
    //     'allergy' => 'None',
    //     'chronic_conditions' => 'None',
    //     'past_surgeries' => 'None',
    //     'family_medical_history' => 'None',
    // ];

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'allergy',
        'chronic_conditions',
        'past_surgeries',
        'family_medical_history',
        'blood_group',
        'emergency_contact_name',
        'emergency_contact_phone',
    ];

    


}
