<?php

namespace App\Http\Controllers;

use App\Models\UpComingEvent;
use Illuminate\Http\Request;

class UpComingEventController extends Controller
{
    public function index(){
        $events = UpComingEvent::query()->orderBy('id','DESC')->get();
        return view('backend.upcoming_events.create',compact('events'));
    }

    public function store(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/up_coming_events/'), $photo);

        $event = new UpComingEvent();
        $event->date=$request->date;
        $event->description=$request->description;
        $event->photo=$photo;
        $event->save();
        return redirect()->back()->with('success','Event created successfully');
    }

    public function update(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/up_coming_events/'), $photo);

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
