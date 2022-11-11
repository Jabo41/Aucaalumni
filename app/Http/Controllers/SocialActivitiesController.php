<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateSocialActivities;
use App\Models\SocialActivity;
use Illuminate\Http\Request;

class SocialActivitiesController extends Controller
{
    public function index(){
        $activities = SocialActivity::query()->orderBy('id','DESC')->get();
        return view('backend.social_activities.create',compact('activities'));
    }

    public function store(ValidateSocialActivities $request){

        $request->validated();
        $dir = 'public/social_activities/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $activity = new SocialActivity();
        $activity->title=$request->title;
        $activity->date=$request->date;
        $activity->description=$request->description;
        $activity->photo=$photo;

//        dd($request->all());
        $activity->save();
        return redirect()->back()->with('success','Activity created successfully');
    }

    public function update(ValidateSocialActivities $request){

        $request->validated();
        $dir = 'public/social_activities/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

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
