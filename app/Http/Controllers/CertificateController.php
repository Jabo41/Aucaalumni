<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificateRequest;
use App\Http\Requests\WorkExperienceRequest;
use App\Models\Certification;

class CertificateController extends Controller
{
    public function store(CertificateRequest $request)
    {
        $request->validated();

        $certificate = new Certification();
        $certificate->image = $request->image;
        $certificate->certificate_name = $request->certificate_name;
        $certificate->year = $request->year;
        $certificate->type = $request->type;
        $certificate->description = $request->description;
        $certificate ->user_id = auth()->id();
//        dd($request->all());
        $certificate->save();
        return redirect()->back()->with('success','Work Certificate Stored Successfully');
    }

    public function update(CertificateRequest $request){

        $request->validated();

        $certificate = Certification::FindOrFail($request->input('WorkId'));
        $certificate->image = $request->image;
        $certificate->certificate_name = $request->certificate_name;
        $certificate->year = $request->year;
        $certificate->type = $request->type;
        $certificate->description = $request->description;
        $certificate ->user_id = auth()->id();
        dd($request->all());
        $certificate->save();
        return redirect()->back()->with('success','Work Certificate Updated Successfully');
    }

    public function delete($id){

        $certificate = Certification::find($id);
        $certificate->delete();
        return redirect()->back()->with('success','Work Certificate Deleted Successfully');
    }
}
