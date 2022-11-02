<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunitiesController extends Controller
{
    public function index(){
        $opportunities = Opportunity::query()->orderBy('id','DESC')->get();
        return view('backend.opportunities.create',compact('opportunities'));
    }

    public function store(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/opportunities/'), $photo);

        $opportunity = new Opportunity();
        $opportunity->title=$request->title;
        $opportunity->date=$request->date;
        $opportunity->description=$request->description;
        $opportunity->photo=$photo;
        $opportunity->save();
        return redirect()->back()->with('success','Opportunity created successfully');
    }

    public function update(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/opportunities/'), $photo);

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
