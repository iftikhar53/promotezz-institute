<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // public function batch()
    // {
    //     return $this->belongsTo(Batch::class, 'batch_id');
    // }

    public function batches()
    {
        return $this->belongsToMany(Batch::class);
    }

    public function branch(){
        return $this->belongsTo(branch::class);
    }

}
