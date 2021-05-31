<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        return Attendance::all();
    }

    public function show($id)
    {
        return Attendance::find($id);
    }

    public function store(Request $request)
    {
        return Attendance::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());

        return $attendance;
    }

    public function delete(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return 204;
    }
}
