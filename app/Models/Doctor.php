<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['first_name',
                            'middle_name',
                            'last_name',
                            'specialization',
                            'qualifications',
                            'license',
                            'contact_number',
                            'email',
                            'bio',
                            'assigned_clinic'];
}
