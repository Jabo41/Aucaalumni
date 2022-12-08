<?php

namespace App\Http\Controllers;

use App\Models\ProgramAttendance;
use Illuminate\Http\Request;

class ProgramAttendanceController extends Controller
{
    public function store(Request $request){

        $program = new ProgramAttendance();
        $program -> names= $request->names;
        $program -> email= $request->email;
        $program -> phone_number= $request->phone_number;
        $program -> start_date= $request->start_date;
        $program -> end_date= $request->end_date;
        $program->save();
        return redirect('/')->with('success','Program Attendance Stored Successfully');
    }
}
