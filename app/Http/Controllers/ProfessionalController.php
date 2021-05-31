<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;

class ProfessionalController extends Controller
{
    public function index()
    {
        return Professional::all();
    }

    public function show($id)
    {
        return Professional::find($id);
    }

    public function store(Request $request)
    {
        return Professional::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $professional = Professional::findOrFail($id);
        $professional->update($request->all());

        return $professional;
    }

    public function delete(Request $request, $id)
    {
        $professional = Professional::findOrFail($id);
        $professional->delete();

        return 204;
    }
}
