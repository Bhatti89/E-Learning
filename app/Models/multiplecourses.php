<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multiplecourses extends Model
{
    use HasFactory;

    protected $fillable = [
        'adminCourse_id',
        'courseTitle',
        'description',
        'order',
         // Add this line
        // Add other fields as needed
    ];
    public function adminMainPage()
    {
        return $this->belongsTo(adminmains::class);
    }
    public function sections()
{
    return $this->hasMany(multiplesections::class, "Coursepage_id", "id");
}
}
