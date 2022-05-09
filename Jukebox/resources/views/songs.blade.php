<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name') }}
        </h2>
    </x-slot>
    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="bg-white text-gray-900 border-collapse w-full shadow-md genre">
                <tr>
                    <th class="bg-blue-700 text-black px-2">Song</th>
                    <th class="bg-blue-700 text-black px-2">Datum toegevoegd</th>
                    <th class="bg-blue-700 text-black px-2">Playlist</th>
                    <th class="bg-blue-700 text-black px-2">Genre</th>
                </tr>
                @foreach($Songs as $song)
                    <tr>
                        <td class="px-4">{{$song->songname}}</td>
                        <td class="px-4">{{$song->created_at}}</td>
                        <td class="px-4"><a href="/playlist/add/{{$song->id}}">Add to playlist</a></td>
                        <td class="px-4">{{$song->genreName()->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <a href="{{ route('addSong') }}">Add Song</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
