<x-guest-layout>

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

    <div class="max-w-md mx-auto mt-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-gray-200">
                    <form action="{{ route('store-draw-request') }}" method="post" class="form-group">
                        @csrf
                        <div class="col-span-6 sm:col-span-3">
                            <label for="titre" class="block text-sm font-medium text-gray-700">Titre du dessin</label>
                            <input type="text" name="titre" id="titre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mt-1">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="idées de dessins"></textarea>
                            </div>
                        </div>

                            <button type="submit" class="float-right mt-5 mb-5 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Envoyer la demande
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
