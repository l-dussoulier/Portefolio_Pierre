<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Page d'accueil") }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">

        <div class="max-w-2xl float sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <H3>Date de la dernière commande</H3>
                    <span style="font-size: 26px">Mardi 06 Sep</span>
                </div>
            </div>
        </div>
        <div class="max-w-2xl float sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <H3>Commande en attentes</H3>
                    <span style="font-size: 26px; text-align: center;">{{ \App\Models\Dessin::all()->where('id_statut',1)->count() }}</span>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
