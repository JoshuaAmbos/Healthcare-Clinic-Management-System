<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;


class DashboardController extends Controller
{
    public function index()
    {
        $number_of_patients = Patient::count();
        $number_of_doctors = Doctor::count();

        return view('/dashboard', compact(
        'number_of_patients',
        'number_of_doctors'));
    }
}
