<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\PersonalInformation;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $info= PersonalInformation::query()->where('user_id','=',auth()->id())->first();
        if($info)
            return  redirect()->route('registration.alumni.profile');
        return view('home');
    }

    public function work()
    {

        $works = WorkExperience::query()->where('user_id','=',auth()->id())
            ->latest()->get();
        return view('work_exp', [
            'works' => $works
        ]);
    }

    public function certificate()
    {
        $certifications = Certification::query()->where('user_id','=',auth()->id())
            ->latest()->get();
        return view('certification', [
            'certifications' => $certifications
        ]);
    }
}
