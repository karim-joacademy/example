<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home',[
        'greeting' =>  "Hello"
    ]);
});


Route::get('/jobs', function (){
    $jobs = Job::with('employer')->simplePaginate(5);

    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function() {
    return view('jobs/create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::with('employer')->find($id);

    if(!$job) {
        abort(404);
    }

    return view('jobs/show', ['job'=> $job]);
});


Route::get('/about', function (){
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});
