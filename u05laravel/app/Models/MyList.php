<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movies extends Model
{
    public function movies()
    {
        return $this->belongsToMany(Movie::class)
                    ->withPivot('my_list_id', 'movie_id' ); // Lägg till alla relevanta kolumnnamn från pivot-tabellen här
    }
}

