<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacherdatas extends Model
{
    use HasFactory;

    public function teacherchildrendata()
    {
        return $this->hasMany(childrendatas::class, 'teacher_id', 'id');
    }
}
