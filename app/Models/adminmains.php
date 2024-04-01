<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminmains extends Model
{
    use HasFactory;

    public function adminMultipleCourses()
    {
        return $this->hasMany(multiplecourses::class, "admincourse_id", "id");
        
    }
}
