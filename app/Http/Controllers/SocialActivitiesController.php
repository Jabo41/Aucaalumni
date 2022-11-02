<?php

namespace App\Http\Controllers;

use App\Models\SocialActivity;
use Illuminate\Http\Request;

class SocialActivitiesController extends Controller
{
    public function index(){
        $activities = SocialActivity::query()->orderBy('id','DESC')->get();
        return view('backend.social_activities.create',compact('activities'));
    }

    public function store(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/social_activities/'), $photo);

        $activity = new SocialActivity();
        $activity->title=$request->title;
        $activity->date=$request->date;
        $activity->description=$request->description;
        $activity->photo=$photo;
        $activity->save();
        return redirect()->back()->with('success','Activity created successfully');
    }

    public function update(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/latest_news/'), $photo);

        $activity = SocialActivity::FindOrFail($request->input('ActivityId'));
        $activity->title=$request->title;
        $activity->date=$request->date;
        $activity->description=$request->description;
        $activity->photo=$photo;
        $activity->save();
        return redirect()->back()->with('success','Activity updated successfully');
    }

    public function destroy($id){

        $activity = SocialActivity::find($id);
        $activity->delete();
        return redirect()->back()->with('success','Activity deleted successfully');
    }
}
