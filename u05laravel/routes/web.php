<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\EditMovieController;




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

















// Mikael Jakobsson

// Delete För Admin

// Denna utkommenterade kod är bara för att visa att kopplingarna fungerar

// // Denna tar fram alla användare och displayar dom på "Delete User" sidan
// Route::get('/userDelete', [userDelete::class, 'index']);
// // Denna tar bort användare om du trycker på delete
// Route::delete('/users/{id}', [userDelete::class, 'destroy'])->name('delete.user');

// Denna är för användare som har roll 1 när de är inloggade och då är admin

// ÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖö

// Denna ska fungera om man är inlogga med role 1 altså admin. Hur kan vi kolla att det fungerar?

Route::prefix('admin')->middleware(['auth', 'role:1'])->group(function () {
    // userDelete route
    Route::get('/userDelete', [UserDeleteController::class, 'index']);
    // UserDelete routes
    // Denna tar fram alla användare och displayar dem på "Delete User" sidan
    // Route::get('/userDelete', [userDeleteController::class, 'index']);

    // Denna tar bort användare om du trycker på delete
    Route::delete('/users/{id}', [UserDeleteController::class, 'destroy'])->name('delete.user');
    // Lägg till andra routes efter behov
});

Route::middleware(['auth'])->group(function () {
    Route::resource('movies', EditMovieController::class);
});
