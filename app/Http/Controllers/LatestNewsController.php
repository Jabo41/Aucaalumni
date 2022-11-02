<?php

namespace App\Http\Controllers;

use App\Models\LatestNew;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function index(){
        $news = LatestNew::query()->orderBy('id','DESC')->get();
        return view('backend.latest_news.create',compact('news'));
    }

    public function store(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/latest_news/'), $photo);

        $new = new LatestNew();
        $new->date=$request->date;
        $new->title=$request->title;
        $new->description=$request->description;
        $new->photo=$photo;
        $new->save();
        return redirect()->back()->with('success','Record created successfully');
    }

    public function update(Request $request){

        $photo = time() . '.' . $request->file('photo')->extension();

        $request->photo->move(public_path('backend/assets/img/latest_news/'), $photo);

        $new = LatestNew::FindOrFail($request->input('NewsId'));
        $new->date=$request->date;
        $new->title=$request->title;
        $new->description=$request->description;
        $new->photo=$photo;
        $new->save();
        return redirect()->back()->with('success','Record updated successfully');
    }

    public function destroy($id){

        $new = LatestNew::find($id);
        $new->delete();
        return redirect()->back()->with('success','Record deleted successfully');
    }
}
