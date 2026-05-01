<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
            [
                'first_name' => 'Gregory',
                'middle_name' => 'J.',
                'last_name' => 'House',
                'specialization' => 'Diagnostic Medicine',
                'qualifications' => 'MD, Board Certified',
                'license' => 'MED-12345',
                'contact_number' => '555-0101',
                'email' => 'house@clinic.com',
                'bio' => 'Specialist in nephrology and infectious diseases.',
                'assigned_clinic' => 'Central Diagnostic Wing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Meredith',
                'middle_name' => null,
                'last_name' => 'Grey',
                'specialization' => 'General Surgery',
                'qualifications' => 'MD, FACS',
                'license' => 'SURG-98765',
                'contact_number' => '555-0202',
                'email' => 'meredith@clinic.com',
                'bio' => 'Experienced general surgeon with a focus on neurobiology.',
                'assigned_clinic' => 'Surgical Department',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}