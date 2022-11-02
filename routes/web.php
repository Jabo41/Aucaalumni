<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');

Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/work_exp',[App\Http\Controllers\HomeController::class, 'work'])->name('work_exp');
Route::get('/certification',[App\Http\Controllers\HomeController::class, 'certificate'])->name('certification');
Route::get('student-list',[App\Http\Controllers\Auth\RegisterController::class,'filter'])->name('student.list.filter');

Route::group(['middleware'=>'isNotStaff'],function (){

});



Route::group(['prefix'=>'staff','middleware'=>['isStaff']],function (){

    Route::get('auca/backend/index', [App\Http\Controllers\BackendController::class, 'index'])->name('master');
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name("dashboard");


//Upcoming Events
    Route::get('/up_coming_events',[App\Http\Controllers\UpComingEventController::class,'index'])->name("up.coming.events");
    Route::post('/up_coming_event/store',[App\Http\Controllers\UpComingEventController::class,'store'])->name("up.coming.event.store");
    Route::post('/up_coming_event/update',[App\Http\Controllers\UpComingEventController::class,'update'])->name("up.coming.event.update");
    Route::get('/up_coming_event/{id}',[App\Http\Controllers\UpComingEventController::class,'destroy'])->name("up.coming.event.delete");

//Latest News
    Route::get('/latest_news',[App\Http\Controllers\LatestNewsController::class,'index'])->name("latest.news");
    Route::post('/latest_new/store',[App\Http\Controllers\LatestNewsController::class,'store'])->name("latest.news.store");
    Route::post('/latest_new/update',[App\Http\Controllers\LatestNewsController::class,'update'])->name("latest.news.update");
    Route::get('/latest_new/{id}',[App\Http\Controllers\LatestNewsController::class,'destroy'])->name("latest.news.delete");

//Program
    Route::get('/programs',[App\Http\Controllers\ProgramsController::class,'index'])->name("programs");
    Route::post('/program/store',[App\Http\Controllers\ProgramsController::class,'store'])->name("programs.store");
    Route::post('/program/update',[App\Http\Controllers\ProgramsController::class,'update'])->name("programs.update");
    Route::get('/program/{id}',[App\Http\Controllers\ProgramsController::class,'destroy'])->name("program.delete");

//Social Activities
    Route::get('/social_activities',[App\Http\Controllers\SocialActivitiesController::class,'index'])->name("social.activities");
    Route::post('/social_activity/store',[App\Http\Controllers\SocialActivitiesController::class,'store'])->name("social.activity.store");
    Route::post('/social_activity/update',[App\Http\Controllers\SocialActivitiesController::class,'update'])->name("social.activity.update");
    Route::get('/social_activity/{id}',[App\Http\Controllers\SocialActivitiesController::class,'destroy'])->name("social.activity.delete");

//Opportunities
    Route::get('/opportunities',[App\Http\Controllers\OpportunitiesController::class,'index'])->name("opportunities");
    Route::post('/opportunity/store',[App\Http\Controllers\OpportunitiesController::class,'store'])->name("opportunity.store");
    Route::post('/opportunity/update',[App\Http\Controllers\OpportunitiesController::class,'update'])->name("opportunity.update");
    Route::get('/opportunity/{id}',[App\Http\Controllers\OpportunitiesController::class,'destroy'])->name("opportunity.delete");

    //User
    Route::get('/users',[App\Http\Controllers\UserController::class,'index'])->name("users");
    Route::post('/user/store',[App\Http\Controllers\UserController::class,'store'])->name("user.store");
    Route::post('/user/update',[App\Http\Controllers\UserController::class,'update'])->name("user.update");
    Route::get('/user/{id}',[App\Http\Controllers\UserController::class,'destroy'])->name("user.delete");
});

