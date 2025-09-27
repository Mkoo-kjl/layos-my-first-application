<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;


// Homepage
Route::get('/', function () {
    return view('home');
});

// All Jobs
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => \App\Models\Job::with('employer')->paginate(3)
    ]);
});

// Single Job - using wildcard
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});

Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

?>