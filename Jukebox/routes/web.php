<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/Songs', [\App\Http\Controllers\SongController::class, 'index'])->name('song');

Route::get('/genres/{genre}', [App\Http\Controllers\genreController::class, 'index'])->name('genre.index');
Route::get('/genre', [App\Http\Controllers\genreController::class, 'genre'])->name('genre');

Route::get('/songsession', [App\Http\Controllers\sessioncontroller::class, 'index'])->name('songsession');

Route::get('/addGenre', [\App\Http\Controllers\genreController::class, 'genreAdd'])->name('addGenre');
Route::post('/addGenre', [\App\Http\Controllers\genreController::class, 'genreAdding'])->name('addGenre');

require __DIR__ . '/auth.php';
