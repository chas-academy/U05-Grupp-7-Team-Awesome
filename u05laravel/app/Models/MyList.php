<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class MyList extends Model
{
    protected $fillable = ['list_name', 'user_id'];


    public function movies()
    {
        return $this->belongsToMany(Movie::class)
            ->withPivot('movie_id', 'my_list_id'); // Använd relevanta kolumnnamn från pivot-tabellen här
    }
}
