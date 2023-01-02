<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
    public function members()
    {
        return $this->belongsTo(member::class, 'author_id');
    }
}
