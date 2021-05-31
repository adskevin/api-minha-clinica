<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::all();
    }

    public function show($id)
    {
        return Patient::find($id);
    }

    public function store(Request $request)
    {
        return Patient::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->update($request->all());

        return $patient;
    }

    public function delete(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return 204;
    }
}
