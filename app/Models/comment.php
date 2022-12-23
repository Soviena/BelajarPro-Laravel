<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public function posts()
    {
        return $this->belongsTo(post::class);
    }
    public function members()
    {
        return $this->belongsTo(member::class);
    }
}
