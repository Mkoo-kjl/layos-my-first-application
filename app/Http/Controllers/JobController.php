<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
}