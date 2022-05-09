<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Playlist;
use App\Models\PlaylistSong;
use App\Models\Song;
use App\Models\PlaylistSession;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class playlistcontroller extends Controller
{
    public function index()
    {
        $sp = new PlaylistSession();

        return view('playlist', compact('sp'));
    }

    public function databasePlaylist()
    {
        $Songs = Song::all();
        $Playlists = Playlist::all();

        return view('databasePlaylist', compact('Songs', 'Playlists'));
    }

    public function add($id)
    {
        $sp = new PlaylistSession();
        $sp->addSongToPlaylist($id);

        return view('dashboard', compact('sp'));
    }

    public function specificPlaylist($playlist)
    {
        $songNames = Song::all();
        $genre = Genre::all();


        $Songs = PlaylistSong::where('playlist_id', '=', $playlist)->get();
        return view('specificPlaylist', compact('Songs', 'songNames', 'genre'));
    }

    public function CreatePlaylistInDatabase()
    {
        $songs = Song::all();
        $sp = new PlaylistSession();

        return view('addPlaylist', compact('songs', 'sp'));
    }

    public function CreatingPlaylistInDatabase(Request $request)
    {
        $sessionSongs = new PlaylistSession();
        $playlist = new Playlist();
        $playlist->name = $request->input('playlistName');
        $playlist->save();
        $playlistId = $playlist->id;

        foreach ($sessionSongs->getPlaylist() as $song) {

            $playlistSong = new PlaylistSong();
            $playlistSong->playlist_id = $playlistId;
            $playlistSong->song_id = $song->id;
            $playlistSong->save();
        }

        $request->session()->forget('song');
        $sessionSongs->deleteSession();

        return view('dashboard');
    }
}
