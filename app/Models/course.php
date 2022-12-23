<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public function articles()
    {
        return $this->hasMany(article::class);
    }
    public function members(){
        return $this->belongsToMany(member::class,'members_courses','course_id','member_id');
    }
}
