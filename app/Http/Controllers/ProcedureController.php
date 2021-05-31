<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;

class ProcedureController extends Controller
{
    public function index()
    {
        return Procedure::all();
    }

    public function show($id)
    {
        return Procedure::find($id);
    }

    public function store(Request $request)
    {
        return Procedure::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $procedure = Procedure::findOrFail($id);
        $procedure->update($request->all());

        return $procedure;
    }

    public function delete(Request $request, $id)
    {
        $procedure = Procedure::findOrFail($id);
        $procedure->delete();

        return 204;
    }
}
