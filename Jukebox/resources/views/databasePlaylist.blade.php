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
                    <th class="px-4"
                    ">Genre</th>

                </tr>
                @foreach($Playlists as $playlist)
                    <tr>
                        <td class="px-4">{{$playlist->name}}</td>
                        <td class="px-4"><a href="/playlist/{{$playlist->id}}">Go to playlist</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
