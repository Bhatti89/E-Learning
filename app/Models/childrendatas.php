<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class childrendatas extends Model
{
    use HasFactory;


    public function parentdata()
    {
        return $this->belongsTo(parentdatas::class, 'parent_id', 'id');
    }
    public function teacherdata()
    {
        return $this->belongsTo(teacherdatas::class, 'teacher_id', 'id');
    }
    public function childcoursesdata()
    {
    return $this->belongsToMany(coursedatas::class, 'childcourse', 'child_id', 'course_id');
    }
}
