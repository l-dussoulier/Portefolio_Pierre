<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Demande de dessins
        </h2>
    </x-slot>

    @if(Session::has('message'))
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store-draw-request') }}" method="post" class="form-group">
                        @csrf
                        <input class="hide" name="id" value="{{ $currentDraw->id }}">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="titre" class="block text-sm font-medium text-gray-700">Titre du dessin</label>
                            <input type="text" name="titre" id="titre" value="{{ $currentDraw->title }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description"  rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="idées de dessins">{{ $currentDraw->description }}</textarea>
                            </div>
                        </div>

                        <div>
                            <select name="statut" id="IdStatut">
                                <option value="0">Non commencé</option>
                                <option value="1">En étude</option>
                                <option value="2">En cours</option>
                                <option value="3">Finalisation</option>
                                <option value="4">Terminé</option>
                            </select>


                        </div>


                                <div class="row">
                        <input type="submit" value="Envoyer" class="">
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>






