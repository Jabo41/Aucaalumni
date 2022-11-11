<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index(){
        $students = Student::query()->orderBy('id','DESC')->get();
        return view('backend.student.create',compact('students'));
    }

    public function store(ValidateStudent $request){

        $request->validated();
        $student = new Student();
        $student->id_number=$request->id_number;
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        $student->save();
        return redirect()->back()->with('success','Student created successfully');
    }

    public function update(ValidateStudent $request){

        $request->validated();
        $student = Student::FindOrFail($request->input('StudentId'));
        $student->id_number=$request->id_number;
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        $student->save();
        return redirect()->back()->with('success','Student updated successfully');
    }

    public function destroy($id){

        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('success','Student deleted successfully');
    }
}
