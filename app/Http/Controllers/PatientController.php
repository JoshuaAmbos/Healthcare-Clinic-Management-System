<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::latest()->paginate(10);

        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blood_types = Patient::BLOOD_TYPES;

        return view('patients.create', compact('blood_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
    {
        Patient::create($request->validated());

        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::findOrFail($id);

        return view('patients.show', compact('patient'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);
        $blood_types = Patient::BLOOD_TYPES;


        return view('patients.edit', compact('patient', 'blood_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientRequest $request, string $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->update($request->validated());

        return redirect()->route('patients.index')->with('success', 'Patient updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted!');
    }   

    
}
