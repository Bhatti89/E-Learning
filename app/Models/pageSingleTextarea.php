<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pageSingleTextarea extends Model
{
    use HasFactory;
    protected $fillable = ['Title', 'html_code','textAreaTitle','order','page_type', 'adminLesson_ids'];

    public function pageSingleTextareaLesson()
    {
        return $this->belongsTo(multiplelessons::class, 'adminLesson_id', 'id');
    }
}
