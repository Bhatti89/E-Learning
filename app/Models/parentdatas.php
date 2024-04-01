<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parentdatas extends Model
{
    use HasFactory;


    public function childrendata()
    {
        return $this->hasMany(childrendatas::class, 'parent_id', 'id');
    }

}
