<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;

class songcontroller extends Controller
{
    public function index()
    {
        $Songs= Song::all();
        $genre= Genre::all();
        return view('songs', compact('Songs', 'genre'));
    }
}
