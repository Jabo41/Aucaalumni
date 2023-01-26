<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateSlider;
use App\Http\Requests\ValidateSlidrsUpdate;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::query()->orderBy('id','DESC')->get();
        return view('backend.slider.index',compact('sliders'));
    }

    public function store(ValidateSlider $request){

        $request->validated();
        $dir = 'public/sliders/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);


        $slider = new Slider();
        $slider->description=$request->description;
        $slider->photo=$photo;
//        return $slider;
        $slider->save();
        return redirect()->back()->with('success','Slider Created Successfully');
    }

    public function update(ValidateSlider $request){

        $request->validated();
        $dir = 'public/sliders/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $slider = Slider::findOrFail($request->input('SliderId'));
        $slider->description=$request->description;
        $slider->photo=$photo;
        $slider->save();
        return redirect()->back()->with('success','Slider Updated Successfully');
    }

    public function delete($id){

        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('success','Slider Deleted Successfully');
    }
}
