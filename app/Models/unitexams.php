<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitexams extends Model
{
    use HasFactory;
    protected $fillable = ['adminUnit_id','title', 'text_field', 'description'];

    public function unit()
    {
        return $this->hasMany(multipleunits::class, "adminUnit_id", "id");

    }
}
