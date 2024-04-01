<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagePlainHtml extends Model
{
    use HasFactory;
    protected $fillable = [
        'adminLesson_id',
        'Title',
        'html_code',
        'Order',
        'page_type',
         // Add this line
        // Add other fields as needed
    ];
    public function pagePlainHtmlLesson()
    {
        return $this->belongsTo(multiplelessons::class, 'adminLesson_id', 'id');

    }
}
