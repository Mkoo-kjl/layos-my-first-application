<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Tell Laravel the actual table name
    protected $table = 'job_listings';

    // (Optional) Specify which columns can be mass-assigned
    protected $fillable = ['title', 'salary', 'employer_id'];

    // Define relationship: each job belongs to an employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
