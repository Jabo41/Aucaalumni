<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class AlumniProfileController extends Controller
{
    public function profile(){
        $information = PersonalInformation::query()->where('user_id','=',auth()->id())->get();
        return view('alumni_profile.index',compact('information'));
    }
    public function edit($id){
        $information = PersonalInformation::find($id);
        return view('personal_information.edit',compact('information'));
    }
}
