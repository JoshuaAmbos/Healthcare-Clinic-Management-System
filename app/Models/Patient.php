<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
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
