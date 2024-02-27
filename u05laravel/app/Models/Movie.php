<?php  

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsToMany;  

class Movie extends Model 

{     
    use HasFactory;  
       // Specify the fillable attributes     
       protected $table = 'movies';
       protected $fillable = ['title', 'genre', 'country', 'year', 'director', 'photo'];    
    // Define the relationship with MyList model     
    public function mylists(): BelongsToMany     
    {         
        return $this->belongsToMany(MyList::class);    
     }      
     






    // 




    // Denna funktion möjliggör att jag kan komma åt comment table och dess columner eller värden tack vare
    // att pk från Movie är kopplat med foregin key in till Comment. Detta möjliggör att man kan komma åt specifika användare och dess kommentarer eller rating
    // och alla ratings eller kommentarer.

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
