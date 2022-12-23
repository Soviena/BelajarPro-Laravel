<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    protected $table = 'quizes';
    public function questions()
    {
        return $this->hasMany(question::class);
    }
    public function members(){
        return $this->belongsToMany(member::class,'members_quizes','quizes_id','member_id');
    }
}
