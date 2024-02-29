<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Relation till User-modellen
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation till Movie-modellen
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
