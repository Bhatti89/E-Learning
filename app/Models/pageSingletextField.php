<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pageSingletextField extends Model
{
    use HasFactory;
    
    protected $fillable = ['Title', 'html_code','textFieldTitle','order','page_type','adminLesson_id'];
    
    public function pageSingleTextFieldLesson()
    {
        return $this->belongsTo(multiplelessons::class, 'adminLesson_id', 'id');
    }
}
