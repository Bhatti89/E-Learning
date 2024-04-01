<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    use HasFactory;
    protected $fillable = ['left_item', 'right_item','title','description','adminPage_id'];
    public function quiz4matching()
    {
        return $this->belongsTo(multiplepages::class, 'adminPage_id', 'id');
    }

}
