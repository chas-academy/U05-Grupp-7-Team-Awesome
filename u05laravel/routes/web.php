<?php

use App\Http\Controllers\EditMovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDeleteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\MyListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/login', function () {
//     return view('welcome');
// });

// Route::get('/logout', function () {
//     return view('/login');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



// Daniel
// comments 
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/movies/{id}', [CommentController::class, 'show'])->name('movies.show');


//Lolo

Route::get('/mylist/{id}', [MyListController::class, 'show']);


// Mohamed Abdi
// Update country movies

Route::get('/country', [CountryController::class, 'index'])->name('country.index');
Route::get('/country/filter', [CountryController::class, 'filter'])->name('country.filter');






// mohamed adbi 
// genre update 



// Define your routes
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/filter', [GenreController::class, 'filter'])->name('genre.filter');
Route::post('/movies/{movie}/comment', [GenreController::class, 'comment'])->name('movies.comment');


























// Mikael Jakobsson

// Delete För Admin

// Denna utkommenterade kod är bara för att visa att kopplingarna fungerar

// // Denna tar fram alla användare och displayar dom på "Delete User" sidan
// Route::get('/userDelete', [userDelete::class, 'index']);
// // Denna tar bort användare om du trycker på delete
// Route::delete('/users/{id}', [userDelete::class, 'destroy'])->name('delete.user');

// Denna är för användare som har roll 1 när de är inloggade och då är admin

// ÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖö

// userDelete 

// Denna sida displayar upp alla users och man kan deleta users om man vill.

// Denna ska fungera om man är inlogga med role 1 altså admin. Hur kan vi kolla att det fungerar?
// lägg in denna när de ät på riktigt 'auth', 'role:1'

Route::middleware([])->group(function () {
    // userDelete route
    Route::get('/userDelete', [UserDeleteController::class, 'index'])->name('delete.site');
    // UserDelete routes
    // Denna tar fram alla användare och displayar dem på "Delete User" sidan
    // Route::get('/userDelete', [userDeleteController::class, 'index']);

    // Denna tar bort användare om du trycker på delete
    Route::delete('/users/{id}', [UserDeleteController::class, 'destroy'])->name('delete.user');
    // Lägg till andra routes efter behov
});


// Edit Movie

// Alla filmer läggs upp på sidan och man kan deleta filmer och trycka på update för att länkas visare till den sidan ocg kunna uppdatera.

// Denna ska vara när man är inloggad
// Lägg in 'auth' i middleware sen när de är på riktigt


Route::middleware([])->group(function () {
    Route::get('/edit-movie', [EditMovieController::class, 'index'])->name('edit-movie');
    Route::delete('/movies/{id}', [EditMovieController::class, 'destroy'])->name('movies.destroy');
});


// Update Movies route 

Route::get('/movies/{id}/edit', [EditMovieController::class, 'edit'])->name('movies.edit');


// Route::put('/movies/{id}/edit', [EditMovieController::class, 'update'])->name('movies.update');

Route::put('/movies/{id}', [EditMovieController::class, 'update'])->name('movies.update');
