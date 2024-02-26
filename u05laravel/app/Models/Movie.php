<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MyList extends Model
{

    // Define the relationship with MyList model
    public function mylist()
    {
        return $this->belongsToMany(MyList::class)
                    ->withPivot('id', 'user_id' ); // Lägg till alla relevanta kolumnnamn från pivot-tabellen här
    }

    // Specify the fillable attributes
    protected $fillable = ['title', 'genre', 'country', 'year', 'director', 'photo'];
}
