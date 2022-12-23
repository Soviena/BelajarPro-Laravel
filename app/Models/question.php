<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    public function quizes()
    {
        return $this->belongsTo(quiz::class);
    }
    public function members(){
        return $this->belongsToMany(member::class,'members_questions','question_id','member_id');
    }
}
