<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatePersonalInformation;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    public function store(ValidatePersonalInformation $request){

        $dir = 'public/personal_information/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $information = new PersonalInformation();
        $information ->photo=$photo;
        $information->start_date=$request->start_date;
        $information->faculty=$request->faculty;
        $information->end_date=$request->end_date;
        $information->bio=$request->bio;
        $information->current_employer=$request->current_employer;
        $information->self_employed=$request->self_employed;
        $information->profession_id=$request->profession_id;
        $information->latest_education_level=$request->latest_education_level;
        $information->address=$request->address;
        $information->dob=$request->dob;
        $information->department=$request->department;
        $information->user_id=auth()->id();
//        dd($request->all());
        $information->save();


//        $user= auth()->user();
//        $user->first_name =$request->first_name;
//        $user->last_name =$request->last_name;
//        $user->email =$request->email;
//        $user->phone_number =$request->phone_number;
//        dd($request->all());
//        $user->update();


        return redirect('/registration-process/work-experience');
    }

}
