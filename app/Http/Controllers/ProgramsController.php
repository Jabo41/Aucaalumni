<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index(){
        $programs = Program::query()->orderBy('id','DESC')->get();
        return view('backend.programs.create',compact('programs'));
    }

    public function store(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/programs/'), $photo);

        $program = new Program();
        $program->title=$request->title;
        $program->description=$request->description;
        $program->photo=$photo;
        $program->save();
        return redirect()->back()->with('success','Program created successfully');
    }

    public function update(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/latest_news/'), $photo);

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
