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
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store-draw-request') }}" method="post" class="form-group">
                        @csrf
                        <input hidden type="text" name="id" value="{{ $currentDraw->id }}">
                            <input type="submit" value="Modifier" class="mb-5 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded ">

                        <!-- Autor -->
                        <div class="col-span-6 sm:col-span-3 mb-5">
                            <label for="titre" class="block text-sm font-medium text-gray-700">Auteur du dessin</label>
                            <input type="text" name="titre" id="titre" value="{{ $user->name }}" disabled autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md disabled:opacity-50">
                        </div>

                        <div class="col-span-6 sm:col-span-3 mb-5">
                            <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                            <input type="text" name="contact" id="contact" value="{{ $currentDraw->contact }}" disabled autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md disabled:opacity-50">
                        </div>

                        <div class="col-span-6 sm:col-span-3 mb-5">
                            <label for="titre" class="block text-sm font-medium text-gray-700">Titre du dessin</label>
                            <input type="text" name="titre" id="titre" value="{{ $currentDraw->title }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="mb-5">
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description"  rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="idées de dessins">{{ $currentDraw->description }}</textarea>
                            </div>
                        </div>

                        <div  class="mt-5">
                            <div class="grid md:grid-cols-2">
                                <div>
                                    <label for="idStatut" class="mb-5">Avancement du dessin</label>
                                    <select name="statut" id="IdStatut" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-5/6 sm:text-sm border-gray-300 rounded-md">
                                        @foreach($statuts as $statut)
                                            <option value="{{ $statut->id }}" @if($currentDraw->id_statut == $statut->id) selected="selected" @endif>{{ $statut->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="">Date demande</label>
                                    <input type="text"  value="{{ $currentDraw->created_at->format('d/m/Y H:i') }}" disabled autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-5/6 shadow-sm sm:text-sm border-gray-300 rounded-md disabled:opacity-50">
                                </div>
                            </div>


                            <div class="mt-10">
                                <img src="{{ Storage::url($currentDraw->linkImage) }}" alt="">
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>






