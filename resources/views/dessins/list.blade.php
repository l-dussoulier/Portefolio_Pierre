<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dessins
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-fixed">
                        <thead>
                        <tr>
                            <th>Titre </th>
                            <th>Description</th>
                            <th>Auteur</th>
                            <th>ID</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($dessins as $dessin)
                                <tr>
                                    <td>{{ $dessin->title }}</td>
                                    <td>{{ $dessin->description }}</td>
                                    <td>{{ \App\Models\User::findOrFail($dessin->author_id)->name }}</td>
                                    <td><input type="button" class="btn-primary" value="Valider" name="{{$dessin -> id}}"></td>
                                    <td><a href="{{ route('edit', ['id' => $dessin->id]) }}">Modifier</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
