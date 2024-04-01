<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizmultiplechoices extends Model
{
    use HasFactory;
    protected $fillable = ['adminPage_id', 'html_code','Title','order','page_type','Answer','choice1','choice2','choice3','choice4',];

    public function quizmultiplechoices()
    {
        return $this->belongsTo(multiplepages::class, 'adminPage_id', 'id');
    }
}
