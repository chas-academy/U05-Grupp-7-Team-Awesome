<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MyList extends Model
{
    public function mylist()
    {
        return $this->belongsToMany(MyList::class)
                    ->withPivot('user_id' ); // Lägg till alla relevanta kolumnnamn från pivot-tabellen här
    }
}
