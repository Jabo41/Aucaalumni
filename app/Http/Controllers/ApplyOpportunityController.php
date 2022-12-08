<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyOpportunityRequest;
use App\Http\Requests\EditApplyOpportunityRequest;
use App\Models\Certification;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplyOpportunityController extends Controller
{
    public function index(){

        $opportunities = Opportunity::query()->where('user_id','=',auth()->id())->get();
        return view('opportunities.index',compact('opportunities'));
    }

    public function store(ApplyOpportunityRequest $request){

        $request->validated();
        $dir = 'public/opportunities/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $applyOpportunity = new Opportunity();
        $applyOpportunity->title=$request->title;
        $applyOpportunity->date=$request->date;
        $applyOpportunity->description=$request->description;
        $applyOpportunity->photo=$photo;
        $applyOpportunity ->user_id = auth()->id();
//        dd($request->all());
        $applyOpportunity->save();
        return redirect()->back()->with('success','Opportunity Stored Successfully');
    }

    public function update(EditApplyOpportunityRequest $request)
    {

        $opportunity = Opportunity::FindOrFail($request->input('OpportunityId'));
        $opportunity->title = $request->title;
        $opportunity->date = $request->date;
        $opportunity->description = $request->description;
        $opportunity ->user_id = auth()->id();

        if ($request->hasFile('photo')) {
            $destination = 'public/opportunities/photos' . $opportunity->photo;
            if (Storage::exists($destination)) {
                Storage::delete($destination);
            }
            $dir = 'public/opportunities/photos';
            $path = $request->file('image')->store($dir);
            $photo = str_replace($dir, '', $path);
            $opportunity->image = $photo;
            $opportunity->save();
            return redirect()->back()->with('success', 'Opportunity updated successfully');
        }
    }

    public function delete($id){

        $opportunity = Opportunity::find($id);
        $opportunity->delete();
        return redirect()->back()->with('success', 'Opportunity deleted successfully');
    }
}
