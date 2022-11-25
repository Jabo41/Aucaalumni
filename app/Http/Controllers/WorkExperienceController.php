<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperienceRequest;
use App\Models\Profession;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function store(WorkExperienceRequest $request)
    {
        $request->validated();

        $work = new WorkExperience();
        $work->company = $request->company;
        $work->employer = $request->employer;
        $work->start_date = $request->start_date;
        $work->end_date = $request->end_date;
        $work->job_title = $request->job_title;
        $work->job_description = $request->job_description;
        $work->user_id = auth()->id();
//        dd($request->all());
        $work->save();
        return redirect()->back()->with('success','Work Experience Stored Successfully');
    }

    public function update(WorkExperienceRequest $request){

        $request->validated();

        $work = WorkExperience::FindOrFail($request->input('WorkId'));
        $work->company = $request->company;
        $work->employer = $request->employer;
        $work->start_date = $request->start_date;
        $work->end_date = $request->end_date;
        $work->job_title = $request->job_title;
        $work->job_description = $request->job_description;
        $work->user_id = auth()->id();
//        dd($request->all());
        $work->save();
        return redirect()->back()->with('success','Work Experience Updated Successfully');
    }

    public function delete($id){

        $work = WorkExperience::find($id);
        $work->delete();
        return redirect()->back()->with('success','Work Experience Deleted Successfully');
    }
}
