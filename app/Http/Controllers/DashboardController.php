<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('backend.layouts.dashboard',compact('sliders'));
    }
}
