<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AllAlumniController extends Controller
{
    public function index(){

        $loggedUser = auth()->user();

        $information = User::with('personalInformation')
        ->whereHas('personalInformation', function (Builder $builder) use ($loggedUser){
            $builder->where('faculty', optional($loggedUser->personalInformation)->faculty);
        })


            ->where('type', '=','alumni')->get();
//        return $information;
        return view('all_alumni_members.index',compact('information'));
    }
}
