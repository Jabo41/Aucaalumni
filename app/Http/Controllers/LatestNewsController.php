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

        $dir = 'public/latest_news/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

        $new = new LatestNew();
        $new->date=$request->date;
        $new->title=$request->title;
        $new->description=$request->description;
        $new->photo=$photo;
        $new->save();
        return redirect()->back()->with('success','Record created successfully');
    }

    public function update(Request $request){

        $dir = 'public/latest_news/photos';
        $path = $request->file('photo')->store($dir);
        $photo= str_replace($dir,'',$path);

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
