<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/addSong"> @csrf
                        <x-label for="name" :value="__('Naam van het nummer:')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="songName" :value="old('name')" /><br>
                        <x-label for="Genre" :value="__('Genre:')" />
                        <select id="genre" name="genre">
                            @foreach($genres as $genre)
                                <option value={{$genre->id}}>{{$genre->name}}</option>
                            @endforeach
                        </select><br>
                        <div class="py-4">
                            <x-button class="ml-4"> {{ __('Opslaan') }} </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
