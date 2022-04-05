<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    public function index()
    {
        $Songs= Song::all();
        $genre= Genre::all();
        return view('songsession', compact('Songs', 'genre'));
    }
}
