@extends('layouts.client-layout')

@section('content')
<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">

    @include('components.nav-client')




    <div class=" mt-5 mr-4 ml-4 w-md mx-auto bg-white rounded-md shadow-md overflow-hidden">
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Réclamation</h2>
            <!-- Informations sur la réclamation -->
            <div class="mb-4">
                <p class="text-gray-800"><strong>Message de Réclamation :</strong> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nullam euismod dolor sit amet nisi pretium, sit amet laoreet ipsum
                    ultricies.</p>
                <p class="text-gray-800"><strong>Artisan :</strong> Nom de l'artisan</p>
                <p class="text-gray-800"><strong>Statut :</strong> En attente</p>
            </div>
            <!-- Boutons d'action -->
            <div class="flex justify-end">
                <button
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 mr-2">Modifier</button>
                <button
                    class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Supprimer</button>
            </div>
        </div>
    </div>


</main>

@endsection