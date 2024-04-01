<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pairmatching extends Model
{
    use HasFactory;
    protected $fillable = ['left_item1', 'right_item1','left_item2', 'right_item2','left_item3', 'right_item3','left_item4', 'right_item4','title','description','order','page_type'];
    public function matchingpair()
    {
        return $this->belongsTo(multiplepages::class, 'adminPage_id', 'id');
    }
}
