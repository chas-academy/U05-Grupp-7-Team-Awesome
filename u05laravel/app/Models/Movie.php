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
     
}






