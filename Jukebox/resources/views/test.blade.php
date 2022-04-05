<table class="bg-white text-gray-900 table-fixed border-collapse w-full shadow-md genre">
    <thead>
    <tr>
        <th class="bg-blue-700 text-black p-2">Song</th>
        <th class="bg-blue-700 text-black p-2">Datum toegevoegd</th>
        <th class="bg-blue-700 text-black p-2">Genre</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Songs as $song)
        <tr class="bg-blue-100 text-blue-900">
            <td class="p-3">...</td>
            <td class="p-3">...</td>
            <td class="p-3">...</td>
        </tr>
        <tr class="bg-blue-200 text-blue-900">
            <td class="p-3">...</td>
            <td class="p-3">...</td>
            <td class="p-3">...</td>
        </tr>
        <tr class="bg-blue-100 text-blue-900">
            <td class="p-3">...</td>
            <td class="p-3">...</td>
            <td class="p-3">...</td>
        </tr>
    </tbody>
    @endforeach
</table>
