<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name') }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="/playlist/addPlaylist">@csrf
                    <x-label for="name" :value="__('Playlist Name')"/>
                    <x-input id="name" class="block mt-1 w-full" type="text" name="playlistName"
                             :value="old('name')" required autofocus/>
            </div>
        </div>
    </div>
    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="bg-white text-gray-900 border-collapse w-full shadow-md genre">
                <tr>
                    <th class="bg-blue-700 text-black px-2">Nummers die je wilt toevoegen aan de playlist</th>
                </tr>
                @foreach($sp->getPlaylist() as $song)
                    <tr>
                        <td class="px-4">{{$song->songname}}</td>
                    </tr>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
