<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificateRequest;
use App\Http\Requests\WorkExperienceRequest;
use App\Models\Certification;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function store(CertificateRequest $request)
    {
        $request->validated();
        $dir = 'public/certificate/photos';
        $path = $request->file('image')->store($dir);
        $photo= str_replace($dir,'',$path);

        $certificate = new Certification();
        $certificate->certificate_name = $request->certificate_name;
        $certificate->year = $request->year;
        $certificate->type = $request->type;
        $certificate->description = $request->description;
        $certificate ->user_id = auth()->id();
        $certificate->image=$photo;
//        dd($request->all());
        $certificate->save();
        return redirect()->back()->with('success','Work Certificate Stored Successfully');
    }

    public function update(CertificateRequest $request){

        $certificate = Certification::FindOrFail($request->input('WorkId'));
        $certificate->certificate_name = $request->certificate_name;
        $certificate->year = $request->year;
        $certificate->type = $request->type;
        $certificate->description = $request->description;
        $certificate ->user_id = auth()->id();

        if ($request->hasFile('image'))
        {
            $destination = 'public/certificate/photos/'.$certificate->photo;
            if(Storage::exists($destination)){
                Storage::delete($destination);
            }
            $dir = 'public/certificate/photos';
            $path = $request->file('image')->store($dir);
            $photo= str_replace($dir,'',$path);
            $certificate->image=$photo;
        }
//        dd($request->all());
        $certificate->save();
        return redirect()->back()->with('success','Work Certificate Updated Successfully');
    }

    public function delete($id){

        $certificate = Certification::find($id);
        $certificate->delete();
        return redirect()->back()->with('success','Work Certificate Deleted Successfully');
    }
}
