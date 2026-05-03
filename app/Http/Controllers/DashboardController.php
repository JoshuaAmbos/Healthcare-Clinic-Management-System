<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class DashboardController extends Controller
{
    public function index()
    {
        $number_of_patients = Patient::count();
        return view('/dashboard', compact('number_of_patients'));
    }
}
