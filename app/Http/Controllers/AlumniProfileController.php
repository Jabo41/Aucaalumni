<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniProfileController extends Controller
{
    public function profile(){
        return view('alumni_profile.app');
    }
}
