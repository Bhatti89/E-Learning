<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pageQuizImageWith4Choices extends Model
{
    use HasFactory;
    protected $fillable = ['Title','Answer', 'html_code','order','page_type','text1','text2','text3','text4','url1','url2','url3','url4','adminLesson_id'];
    public function pageQuizImageWith4Choices()
    {
        return $this->belongsTo(multiplelessons::class, 'adminLesson_id', 'id');
    }
}
