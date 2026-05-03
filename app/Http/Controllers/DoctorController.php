<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::latest()->paginate(6);

        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
        Doctor::create($request->validated());

        return redirect()->route('doctors.index')->with('success', 'Doctor recorded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, string $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->update($request->validated());

        return redirect()->route('doctors.index')->with('success', 'Doctor updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted!');
    }
}
