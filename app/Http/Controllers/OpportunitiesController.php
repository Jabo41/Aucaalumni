<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateOpportunities;
use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunitiesController extends Controller
{
    public function index(){
        $opportunities = Opportunity::query()->orderBy('id','DESC')->get();
        return view('backend.opportunities.create',compact('opportunities'));
    }

    public function store(ValidateOpportunities $request){

        $request->validated();
        $dir = 'public/opportunities/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $opportunity = new Opportunity();
        $opportunity->title=$request->title;
        $opportunity->date=$request->date;
        $opportunity->description=$request->description;
        $opportunity->status='Approved';
        $opportunity->photo=$photo;
        $opportunity->save();
        return redirect()->back()->with('success','Opportunity created successfully');
    }

    public function update(ValidateOpportunities $request){

        $request->validated();
        $dir = 'public/opportunities/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $opportunity = Opportunity::FindOrFail($request->input('OpportunityId'));
        $opportunity->title=$request->title;
        $opportunity->date=$request->date;
        $opportunity->description=$request->description;
        $opportunity->photo=$photo;
        $opportunity->save();
        return redirect()->back()->with('success','Opportunity updated successfully');
    }

    public function destroy($id){

        $opportunity = Opportunity::find($id);
        $opportunity->delete();
        return redirect()->back()->with('success','Opportunity deleted successfully');
    }
}
