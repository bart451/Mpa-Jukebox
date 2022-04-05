<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;

class songcontroller extends Controller
{
    public function index()
    {
        $Songs = Song::all();
        $genre = Genre::all();
        return view('songs', compact('Songs', 'genre'));
    }

    public function addSong()
    {
        $genres = Genre::all();
        return view('addSong', compact('genres'));
    }

    public function SongAdding(Request $request)
    {
        $song = new Song();
        $song->songname = $request->input('songName');
        $song->genres = $request->input('genre');

        $song->save();
        return view('songs');
    }
}
