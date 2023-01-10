<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }
}
