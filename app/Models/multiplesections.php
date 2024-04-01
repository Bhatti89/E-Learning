<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multiplesections extends Model
{
    use HasFactory;
    protected $fillable = [
        'Coursepage_id',
        'sectionName',
        'sectionTitle',
        'description',
        'order',
         // Add this line
        // Add other fields as needed
    ];
    public function course()
{
    return $this->belongsTo(multiplecourses::class);
}
public function units()
    {
        return $this->hasMany(multipleunits::class, "adminSection_id", "id");

    }
}
