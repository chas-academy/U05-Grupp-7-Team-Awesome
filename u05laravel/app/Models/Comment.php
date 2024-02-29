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

// Mike

// Dessa rellationer behövs för att visa relationen mellan tabellerna för att
// Eloquent ORM ska kunna fungera. Vi fick tex problem med att deleta användare om de hade gjort en kommentar.
// Dessa relationer gör tex att om man tar bort en användare förstår då tack vare denna relation Eloquent ORM att
// den också ska ta bort användarens kommentarer detta kallas cascading deletes.