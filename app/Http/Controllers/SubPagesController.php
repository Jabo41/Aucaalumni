<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubPagesController extends Controller
{
    public function latestNews(){
        return view('sub_pages.latest_news.index');
    }

    public function socialActivity(){
        return view('sub_pages.social_activity.index');
    }

    public function UpComingEvent(){
        return view('sub_pages.up_coming_events.index');
    }
}
