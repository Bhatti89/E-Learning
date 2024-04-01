<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pageQuiz4Choices extends Model
{
    use HasFactory;
    protected $fillable = ['adminLesson_id', 'html_code','Title','order','page_type','Answer','choice1','choice2','choice3','choice4',];

    public function page4ChoicesLesson()
    {
        return $this->belongsTo(multiplelessons::class, 'adminLesson_id', 'id');
    }
}
