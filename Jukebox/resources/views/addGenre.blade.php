<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/genreAdd">
                        <x-label for="name" :value="__('Genre Name')"/>

                        <x-input id="name" type="text" name="genreName" :value="old('name')"/>

                        <x-button class="ml-4">
                            {{ __('Opslaan') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
