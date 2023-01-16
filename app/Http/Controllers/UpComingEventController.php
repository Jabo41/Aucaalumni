<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateSocialActivities;
use App\Http\Requests\ValidateUpcomingEvent;
use App\Models\UpComingEvent;
use Illuminate\Http\Request;

class UpComingEventController extends Controller
{
    public function index(){
        $events = UpComingEvent::query()->orderBy('id','DESC')->get();
        return view('backend.upcoming_events.create',compact('events'));
    }

    public function store(ValidateUpcomingEvent $request){

        $request->validated();
        $dir = 'public/up_coming_event/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $event = new UpComingEvent();
        $event->date=$request->date;
        $event->description=$request->description;
        $event->photo=$photo;
        $event->save();
        return redirect()->back()->with('success','Event created successfully');
    }

    public function update(ValidateUpcomingEvent $request){

        $request->validated();
        $dir = 'public/up_coming_event/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $event = UpComingEvent::FindOrFail($request->input('EventId'));
        $event->photo=$photo;
        $event->date=$request->date;
        $event->description=$request->description;
        $event->save();
        return redirect()->back()->with('success','Event updated successfully');
    }

    public function destroy($id){

        $event = UpComingEvent::find($id);
        $event->delete();
        return redirect()->back()->with('success','Event deleted successfully');
    }
}
