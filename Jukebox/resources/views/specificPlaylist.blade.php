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
                            <th class="bg-blue-700 text-black px-2">SongID</th>
                            <th class="bg-blue-700 text-black px-2">Datumtoegevoegd</th>
                        </tr>
                        @foreach($Songs as $song)
                            <tr>
                                <td class="px-4">{{$song->songName()->songname}}</td>
                                <td class="px-4">{{$song->song_id}}</td>
                                <td class="px-4">{{$song->created_at}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
</x-app-layout>
