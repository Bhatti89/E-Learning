<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coursedatas extends Model
{
    use HasFactory;
    public function childrencoursedata()
    {
        return $this->belongsToMany(childrendatas::class, 'childcourse', 'course_id', 'child_id');
    }
}
