<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizwithchoices extends Model
{
    use HasFactory;
    protected $fillable = ['Title','Answer', 'html_code','order','page_type','text1','text2','text3','text4','url1','url2','url3','url4'];

    public function quizchoices()
    {
        return $this->belongsTo(multiplepages::class, 'adminPage_id', 'id');
    }
}
