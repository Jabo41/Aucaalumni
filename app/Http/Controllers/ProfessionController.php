<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateProfession;
use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index(){
        $profession = Profession::query()->orderBy('id','DESC')->get();
        return view('backend.system_settings.profession.index',compact('profession'));
    }

    public function store(ValidateProfession $request){

        $profession = new Profession();
        $profession->name=$request->name;
        $profession->save();
        return redirect()->back()->with('success','Profession created successfully');
    }

    public function update(ValidateProfession $request){

        $profession = Profession::FindOrFail($request->input('ProfessionId'));
        $profession->name=$request->name;
        $profession->save();
        return redirect()->back()->with('success','Profession updated successfully');
    }

    public function destroy($id){

        $profession = Profession::find($id);
        $profession->delete();
        return redirect()->back()->with('success','Profession deleted successfully');
    }
}
