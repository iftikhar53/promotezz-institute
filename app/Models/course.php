<?php

namespace App\Models;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

     // Define the "has many" relationship with the trainers table.
     public function trainers() {
        return $this->hasMany(Trainer::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function branch(){
        return $this->belongsToMany(branch::class);
    }

}