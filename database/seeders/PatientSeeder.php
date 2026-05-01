<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patients')->insert([
            [
                'first_name' => 'John',
                'middle_name' => 'Quincy',
                'last_name' => 'Doe',
                'allergy' => 'Penicillin, Peanuts',
                'chronic_conditions' => 'Hypertension',
                'past_surgeries' => 'Appendectomy (2015)',
                'family_medical_history' => 'Type 2 Diabetes (Father)',
                'blood_group' => 'O+',
                'emergency_contact_name' => 'Jane Doe',
                'emergency_contact_phone' => '09123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'first_name' => 'Alice',
                'middle_name' => null,
                'last_name' => 'Smith',
                'allergy' => null,
                'chronic_conditions' => 'Asthma',
                'past_surgeries' => null,
                'family_medical_history' => 'None',
                'blood_group' => 'A-',
                'emergency_contact_name' => 'Robert Smith',
                'emergency_contact_phone' => '09987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'first_name' => 'Angel Mary',
                'middle_name' => 'Gelay',
                'last_name' => 'Singco',
                'allergy' => null,
                'chronic_conditions' => 'Mental Disorder',
                'past_surgeries' => null,
                'family_medical_history' => 'None',
                'blood_group' => 'A-',
                'emergency_contact_name' => 'Michelle Gelay',
                'emergency_contact_phone' => '0999876423',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}