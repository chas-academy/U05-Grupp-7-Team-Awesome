<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// routes/web.php
Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
Route::put('/movies/{movie}', 'MovieController@update')->name('movies.update');
// routes/web.php
Route::get('/horror', 'HorrorController@index')->name('horror.index');
Route::get('/horror/{id}', 'HorrorController@show')->name('horror.show');
Route::get('/scifi', 'ScifiController@index')->name('scifi.index');
Route::get('/scifi/{id}', 'ScifiController@show')->name('scifi.show');

Route::get('/japan', 'JapanController@index')->name('japan.index');
Route::get('/japan/{id}', 'JapanController@show')->name('japan.show');
Route::get('/usa', 'UsaController@index')->name('usa.index');
Route::get('/uas/{id}', 'UsaController@show')->name('usa.show');



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/horror', function () {
    return view('horror');
});
Route::get('/scifi', function () {
    return view('scifi');
});
Route::get('/japan', function () {
    return view('japan');
});
Route::get('/usa', function () {
    return view('usa');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/horror', function () {
        return view('auth.horror');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/scifi', function () {
        return view('auth.scifi');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/japan', function () {
        return view('auth.japan');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/usa', function () {
        return view('auth.usa');
    });
});

require __DIR__ . '/auth.php';
