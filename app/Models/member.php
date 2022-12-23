<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $table = 'members';
    public function posts()
    {
        return $this->hasMany(post::class);
    }
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
    public function courses(){
        return $this->belongsToMany(course::class,'members_courses','member_id','course_id');
    }
    public function quizes(){
        return $this->belongsToMany(quiz::class,'members_quizes','member_id','quizes_id');
    }
    public function questions(){
        return $this->belongsToMany(question::class,'members_questions','member_id','question_id');
    }
}
