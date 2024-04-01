<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multiplelessons extends Model
{
    use HasFactory;
    protected $fillable = ['adminUnit_id' ,'lessonName', 'lessonTitle', 'description', 'order'];

    public function manyunit()
    {
        return $this->belongsTo(multipleunits::class, 'adminUnit_id', 'id');
    }
    public function pages()
    {
        return $this->hasMany(multiplepages::class, 'adminLesson_id');
    }




    public function plainHtmlPage()
    {
        return $this->hasMany(pagePlainHtml::class, 'adminLesson_id', 'id');
    }
    public function singleTextFieldPage()
    {
        return $this->hasMany(pageSingletextField::class, 'adminLesson_id', 'id');
    }
    public function singleTextareaPage()
    {
        return $this->hasMany(pageSingleTextarea::class, 'adminLesson_id', 'id');
    }

    public function quiz4MatchingPage()
    {
        return $this->hasMany(pageQuiz4Matching::class, 'adminLesson_id', 'id');
    }

    public function quizImageWith4choicesPage()
    {
        return $this->hasMany(pageQuizImageWith4Choices::class, 'adminLesson_id', 'id');
    }

    public function quiz4choicesPage()
    {
        return $this->hasMany(pageQuiz4Choices::class, 'adminLesson_id', 'id');
    }
}
