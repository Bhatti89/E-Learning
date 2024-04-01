<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multipleunits extends Model
{
    use HasFactory;
    protected $fillable = [
        'adminSection_id',
        'unitName',
        'unitTitle',
        'description',
        'order',
         // Add this line
        // Add other fields as needed
    ];

    public function section()
    {
        return $this->belongsTo(multiplesections::class, 'adminSection_id', 'id');
    }
    public function unitexam()
    {
        return $this->belongsTo(unitexams::class);

    }
    public function lessons()
    {
        return $this->hasMany(multiplelessons::class, 'adminUnit_id', 'id');
    }
}
