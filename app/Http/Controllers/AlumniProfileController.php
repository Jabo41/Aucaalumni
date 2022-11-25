<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class AlumniProfileController extends Controller
{
    public function profile()
    {
        $information = PersonalInformation::query()->where('user_id', '=', auth()->id())->first();
        if (is_null($information))
            return redirect()->route('registration.personal.information');
        return view('alumni_profile.index', compact('information'));
    }

    public function edit($id)
    {
        $information = PersonalInformation::find($id);
        if (is_null($information))
            return redirect()->route('registration.personal.information');
        return view('personal_information.edit', compact('information'));
    }

    public function update(Request $request,$id){

        $dir = 'public/personal_information/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $information = PersonalInformation::find($id);
        $information ->photo=$photo;
        $information->email=$request->email;
        $information->faculty=$request->faculty;
        $information->phone_number=$request->phone_number;
        $information->bio=$request->bio;
        $information->current_employer=$request->current_employer;
        $information->self_employed=$request->self_employed;
        $information->profession_id=$request->profession_id;
        $information->latest_education_level=$request->latest_education_level;
        $information->address=$request->address;
        $information->full_names=$request->full_names;
        $information->dob=$request->dob;
        $information->user_id=auth()->id();
//        dd($request->all());
        $information->save();
        return redirect('/registration-process/profile')->with('success','Personal Information Updated Successfully');
    }
}
