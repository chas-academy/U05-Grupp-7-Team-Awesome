<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\CommentController;






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


Route::get('/', function () {
    return view('auth.login');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';


Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');















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
    Route::get('/userDelete', [UserDeleteController::class, 'index']);
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
    Route::get('/edit-movie', [EditMovieController::class, 'index']);
    Route::delete('/movies/{id}', [EditMovieController::class, 'destroy'])->name('movies.destroy');
});




// Update Movies route 

// Route::put('/movies/{id}/edit', [EditMovieController::class, 'edit'])->name('movies.edit');
Route::get('/movies/{id}/edit', [EditMovieController::class, 'edit'])->name('movies.edit');


// Route::put('/movies/{id}/edit', [EditMovieController::class, 'update'])->name('movies.update');

Route::put('/movies/{id}', [EditMovieController::class, 'update'])->name('movies.update');
