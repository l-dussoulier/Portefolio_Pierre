<x-guest-layout>

    <style>
        .gradient {
            background: linear-gradient(90deg, #444444 0%, #171717 100%);
        }
        </style>

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
    <nav id="header" class="fixed w-full z-30 top-0 text-white gradient">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{ route('welcome') }}">
                    <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                        <path
                            class="plane-take-off"
                            d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                        />
                    </svg>
                    PIERRE
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="toggleColour inline-block py-2 px-4 text-white no-underline navItem" href="{{ route('create') }}">Demande</a>
                    </li>
                    <li class="mr-3">
                        <a class="toggleColour inline-block text-white no-underline hover:text-gray-300 hover:text-underline py-2 px-4" href="#">Demande en cours</a>
                    </li>
                    @if(!Auth::check())
                        <li>
                            <a id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-2 lg:mt-0 py-2 px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="/login">Connexion</a>
                        </li>
                    @endif
                    @if(Auth::check())
                        @if(Auth::user()->hasRole("Administrateur"))
                            <li>
                                <a class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-2 lg:mt-0 py-2 px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="/dashboard">Dashboard</a>
                            </li>
                        @endif
                        <li>
                            <form class="toggleColour" method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" class="text-white"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Déconnexion') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    <div class="max-w-md mx-auto mt-24">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-gray-200">
                    <form action="{{ route('store-draw-request') }}" method="post" class="form-group" enctype="multipart/form-data">
                        @csrf
                        <label for="format" class="block text-sm font-medium text-gray-700 mt-2">Format</label>
                        <select class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border-gray-300 rounded-lg appearance-none focus:shadow-outline mb-3" placeholder="Regular input">
                            <option value="A3" {{ $format === "A5" ? 'selected' : '' }}>Format A5</option>
                            <option value="A4" {{ $format === "A4" ? 'selected' : '' }}>Format A4</option>
                            <option value="A0" {{ $format === "A3" ? 'selected' : '' }}>Format A3</option>
                            <option></option>
                        </select>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="titre" class="block text-sm font-medium text-gray-700 mt-2">Titre du dessin</label>
                            <input type="text" name="titre" id="titre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md mb-6">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mt-1">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="20" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="idées pour le dessin"></textarea>
                            </div>
                        </div>

                        <div>
                            <label for="image">Choose a profile picture:</label>

                            <input type="file"
                                   id="image" name="image"
                                   accept="image/png, image/jpeg">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="contact" class="block text-sm font-medium text-gray-700 mt-2">Contact</label>
                            <input type="text" name="contact" id="titre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md mb-6" placeholder="Insta, Mail, tél">
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
