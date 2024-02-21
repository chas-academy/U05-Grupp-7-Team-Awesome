<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userDelete;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDeleteController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/userDelete', function () {
    return view('userDelete');
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

Route::prefix('admin')->middleware(['auth', 'role:1'])->group(function () {
    // userDelete route
    Route::get('/userDelete', [userDeleteController::class, 'userDelete']);

    // UserDelete routes
    // Denna tar fram alla användare och displayar dem på "Delete User" sidan
    Route::get('/userDelete', [userDeleteController::class, 'index']);

    // Denna tar bort användare om du trycker på delete
    Route::delete('/users/{id}', [userDeleteController::class, 'destroy'])->name('delete.user');

    // Lägg till andra routes efter behov
});
