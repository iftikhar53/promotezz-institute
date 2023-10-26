<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function trainers() {
        return $this->hasMany(Trainer::class);
    }

    public function batches() {
        return $this->hasMany(Batch::class);
    }

    public function students() {
        return $this->hasMany(Student::class);
    }

    public function batchStudent() {
        return $this->hasMany(batch_student::class);
    }
}
