<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return response()->json($patient);
    }

    public function store(Request $request)
    {
        Patient::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'specialization' => $request->specialization,
            'license_number' => $request->license_number,
            'phone' => $request->phone,
            'email' => $request->email,
            
        ]);

        return response()->json(['message' => 'Patient added successfully'], 201);
    }

    public function update(Request $request, $id)
    {
        $patient = Product::findOrFail($id);
        $patient->first_name = $request->input('first_name');
        $patient->last_name = $request->input('last_name');
        $patient->specialization = $request->input('specialization');
        $patient->license_number = $request->input('license_number');
        $patient->phone = $request->input('phone');
        $patient->email = $request->input('email');
        $patient->save();

        return response()->json(['message' => 'Patient updated successfully', 'Patient' => $patient]);
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return response()->json(['message' => 'Patient removed successfully']);
    }

}
