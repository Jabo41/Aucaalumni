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


    public function latestNews($id){
        $details = LatestNew::find($id);
        return view('sub_pages.latest_news.index',compact('details'));
    }

    public function socialActivity($id){
        $details = SocialActivity::find($id);
        return view('sub_pages.social_activity.index',compact('details'));
    }

    public function UpComingEvent($id){
        $details = UpComingEvent::find($id);
        return view('sub_pages.up_coming_events.index',compact('details'));
    }

}
