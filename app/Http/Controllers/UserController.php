<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::query()
            ->whereIn('is_staff',['1'])
            ->orderBy('id','DESC')->get();
        return view('backend.user_management.users.create',compact('users'));
    }

    public function store(Request $request){

        $user = new User();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->phone_number=$request->phone_number;
        $user->is_staff='1';
        $user->password=bcrypt('password');
        $user->save();
        return redirect()->back()->with('success','User created successfully');
    }

    public function update(Request $request){

        $user = User::FindOrFail($request->input('UserId'));
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->phone_number=$request->phone_number;
        $user->is_staff='1';
        $user->password=bcrypt('password');
        $user->save();
        return redirect()->back()->with('success','User updated successfully');
    }

    public function destroy($id){

        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','User deleted successfully');
    }
}
