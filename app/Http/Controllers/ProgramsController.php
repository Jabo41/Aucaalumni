<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatePrograms;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index(){
        $programs = Program::query()->orderBy('id','DESC')->get();
        return view('backend.programs.create',compact('programs'));
    }

    public function store(ValidatePrograms $request){

        $dir = 'public/programs/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $program = new Program();
        $program->title=$request->title;
        $program->description=$request->description;
        $program->photo=$photo;
        $program->save();
        return redirect()->back()->with('success','Program created successfully');
    }

    public function update(ValidatePrograms $request){

        $dir = 'public/programs/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $program = Program::FindOrFail($request->input('ProgramId'));
        $program->title=$request->title;
        $program->description=$request->description;
        $program->photo=$photo;
        $program->save();
        return redirect()->back()->with('success','Program updated successfully');
    }

    public function destroy($id){

        $program = Program::find($id);
        $program->delete();
        return redirect()->back()->with('success','Program deleted successfully');
    }
}
