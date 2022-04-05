<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class genrecontroller extends Controller
{
    public function index($genre)
    {
        $Songs= Song::where('genres', '=', $genre)->get();
        return view('songs', compact('Songs'));
    }

    public function genre()
    {
        $Songs= Song::all();
        $Genres= Genre::all();

        return view('genres', compact( 'Genres'));
    }

    public function genreAdd()
    {
        return view('addGenre');
    }

    public function genreAdding(Request $request)
    {
        $genre = new Genre();
        $genre->name = $request->input('genreName');
        $genre->save();
        return view('genres');
    }
}
