<?php

namespace App\Http\Controllers;

use App\Models\Certification;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
