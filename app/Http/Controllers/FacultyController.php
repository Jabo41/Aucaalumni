<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultyRequest;
use App\Http\Requests\ValidateProfession;
use App\Models\Faculty;
use App\Models\Profession;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        $faculties = Faculty::query()->orderBy('id','DESC')->get();
        return view('backend.faculty.index',compact('faculties'));
    }

    public function store(FacultyRequest $request){

        $request->validated();
        $profession = new Faculty();
        $profession->name=$request->name;
        $profession->description=$request->description;
        $profession->save();
        return redirect()->back()->with('success','Faculty created successfully');
    }

    public function update(FacultyRequest $request){

        $request->validated();
        $profession = Faculty::FindOrFail($request->input('FacultyId'));
//        return $profession;
        $profession->name=$request->name;
        $profession->description=$request->description;
//        dd($request->all());
        $profession->save();
        return redirect()->back()->with('success','Faculty updated successfully');
    }

    public function destroy($id){

        $profession = Faculty::find($id);
        $profession->delete();
        return redirect()->back()->with('success','Faculty deleted successfully');
    }
}
