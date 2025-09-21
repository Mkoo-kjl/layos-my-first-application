<?php

namespace App\Http\Controllers;

use App\Models\Job;

abstract class Controller
{
    public function index()
    {
    $jobs = Job::with(['employer', 'tags'])->get(); // eager load relationships
    return view('jobs', compact('jobs'));
    }

}
