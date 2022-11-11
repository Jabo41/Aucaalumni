<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    public function store(Request $request){

        $dir = 'public/latest_news/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $information = new PersonalInformation();
        $information ->photo=$photo;
        $information->email=$request->email;
        $information->faculty=$request->faculty;
        $information->phone_number=$request->phone_number;
        $information->bio=$request->bio;
        $information->current_employer=$request->current_employer;
        $information->self_employed=$request->self_employed;
        $information->profession=$request->profession;
        $information->latest_education_level=$request->latest_education_level;
        $information->address=$request->address;
        $information->save();
        return redirect('/registration-process/work-experience');
    }
}
