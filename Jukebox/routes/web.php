<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//song
Route::get('/Songs', [\App\Http\Controllers\SongController::class, 'index'])->name('song');
Route::get('/addSong', [\App\Http\Controllers\SongController::class, 'addSong'])->name('addSong');
Route::post('/addSong', [\App\Http\Controllers\SongController::class, 'SongAdding'])->name('addSong');

//genre
Route::get('/genres/{genre}', [App\Http\Controllers\genreController::class, 'index'])->name('genre.index');
Route::get('/genre', [App\Http\Controllers\genreController::class, 'genre'])->name('genre');
Route::get('/addGenre', [\App\Http\Controllers\genreController::class, 'genreAdd'])->name('addGenre');
Route::post('/addGenre', [\App\Http\Controllers\genreController::class, 'genreAdding'])->name('addGenre');

//playlist
Route::get('/playlist', [App\Http\Controllers\playlistcontroller::class, 'index'])->name('playlist');
Route::get('/playlist/addPlaylist', [App\Http\Controllers\playlistcontroller::class, 'CreatePlaylistInDatabase'])->name('addPlaylist');
Route::post('/playlist/addPlaylist', [App\Http\Controllers\playlistcontroller::class, 'CreatingPlaylistInDatabase'])->name('addingPlaylist');
Route::get('/playlist/add/{id}', [App\Http\Controllers\playlistcontroller::class, 'add'])->name('session.add');
Route::get('/playlist/databasePlaylist', [App\Http\Controllers\playlistcontroller::class, 'databasePlaylist'])->name('databasePlaylist');
Route::get('/playlist/{playlist}', [App\Http\Controllers\playlistcontroller::class, 'specificPlaylist'])->name('specificPlaylist');


require __DIR__ . '/auth.php';
