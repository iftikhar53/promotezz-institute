<?php

namespace App\Models;

use App\Models\course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;


    // Define the "belongs to" relationship with the users table.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the "belongs to" relationship with the courses table.
    public function course()
    {
        return $this->belongsTo(course::class);
    }

}