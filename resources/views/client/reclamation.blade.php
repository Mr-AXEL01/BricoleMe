@extends('layouts.client-layout')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">

        @include('components.nav-client')

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path fill-rule="evenodd"
                            d="M14.348 5.652a.5.5 0 0 1 .708.708L10.707 10l4.35 4.35a.5.5 0 1 1-.708.708L10 10.707l-4.35 4.35a.5.5 0 1 1-.708-.708L9.293 10 4.643 5.65a.5.5 0 1 1 .708-.708L10 9.293l4.35-4.35z" />
                    </svg>
                </span>
            </div>
        @endif

        @foreach ($reclamations as $reclamation)
            <div class=" mt-5 mr-4 ml-4 w-md mx-auto bg-white rounded-md shadow-md overflow-hidden">
                <div class="p-2">
                    <h2 class="p-2 text-xl font-semibold  flex justify-center bg-red-200">Réclamation</h2>
                    <hr>
                    <!-- Informations sur la réclamation -->
                    <div class="mb-4 mt-4">
                        <p class="text-gray-800"><strong>Message de Réclamation :</strong> {{ $reclamation->message }}</p>
                        <p class="text-gray-800"><strong>Artisan :</strong>
                            {{ $reclamation->reservation->service->artisan->user->name }}</p>
                        <p class="text-gray-800"><strong>date reclamer :</strong> {{ $reclamation->created_at }}</p>
                        <p class="text-gray-800"><strong>Statut :</strong> </p>


                    </div>
                    {{-- _________chaeck status________ --}}
                    @if ($reclamation->status == 'pending')
                        <div class="loader">
                            <span class="loader-text">pending</span>
                            <span class="load"></span>
                        </div>
                    @elseif($reclamation->status == 'done')
                        <label class="container">
                            <input type="checkbox" checked="checked">
                            <div class="checkmark"></div>
                        </label>
                    @endif

                </div>
            </div>
        @endforeach
    </main>
@endsection
