<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyListMovie extends Model
{
  use HasFactory;

  // Definiera fält som är fyllbara
  protected $fillable = ['title', 'genre', 'country', 'year', 'director', 'photo', 'user_id'];

  // Definiera relationen till MyList-modellen
  public function myList()
  {
    return $this->belongsTo(MyList::class, 'my_list_id');
  }

  // Definiera relationen till Movie-modellen
  public function movie()
  {
    return $this->belongsTo(Movie::class, 'movie_id');
  }
}
