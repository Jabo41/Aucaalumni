<?php

namespace App\Http\Controllers;

use App\Models\LatestNew;
use App\Models\Opportunity;
use App\Models\Program;
use App\Models\SocialActivity;
use App\Models\UpComingEvent;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        $events = UpComingEvent::all();
        $news = LatestNew::all();
        $programs = Program::all();
        $activities = SocialActivity::all();
        $opportunity = Opportunity::all();
        return view('welcome',compact('events','news','programs','activities','opportunity'));
    }
}
