@extends('layouts.client-layout')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">

        @include('components.nav-client')
        @if (session('success'))
        <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        <div class="flex flex-wrap">

            @foreach ($reservations as $reserv)
                <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
                    <div>
                        <div>
                            <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                                {{-- reclamation button --}}
                                @if ($reserv->status == 'done')                                    
                                    <a href=" {{ route('client.reclamation-forme', ['id' => $reserv->id]) }}"
                                        class="right-0  rounded-l-full absolute text-center font-bold text-xs text-red-600 px-2 py-1 bg-orange-200">
                                        <i class="fa-solid fa-circle-xmark fa-xl" style="color: #ff0000;">
                                        </i>
                                        <p>reclamer</p>
                                        
                                    </a>
                                @endif

                                {{-- devis download --}}
                                <a href="{{ route('client.signature', ['id' => $reserv->id]) }} " class="right-0 mt-4 ">

                                    <button class="download-button">
                                        <div class="docs">
                                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>
                                            Devis
                                        </div>
                                        <div class="download">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>
                                        </div>
                                    </button>


                                </a>
                                {{-- devis-download-end --}}

                                <img src="{{asset('/storage/userPics/'. $reserv->service->picture)}}"
                                    class="h-32 rounded-lg w-full object-cover">
                                <div class="flex justify-center">
                                    <img src="{{asset('/storage/userPics/'. $reserv->service->artisan->user->picture)}}"
                                        class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                                </div>
                                <div class="py-2 px-2">
                                    <div class=" font-bold font-title text-center">
                                        {{ $reserv->service->artisan->user->name }}
                                    </div>





                                    <p class="text-md pt-2"><strong>Service:</strong> {{ $reserv->service->name }}
                                        | {{ $reserv->tarif_total }} DH/heur</p>
                                    <p class="text-md pt-2"><strong>date départ:</strong>{{ $reserv->dateDepart }}</p>
                                    <p class="text-md pt-2"><strong>date final:</strong>{{ $reserv->dateFinal }}</p>
                                    <p class="text-md pt-2"><strong>Status:</strong> {{ $reserv->status }}</p>
                                </div>


                                @if ($reserv->status == 'pending')
                                    <a href="{{ route('client.destroy', ['id' => $reserv->id]) }}"><button id="reserveBtn"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">
                                            Cancel
                                        </button>
                                    </a>
                                @elseif($reserv->status == 'done' && $reserv->reviewed == 0)                                            
                                        <a href="{{ route('client.review', ['id' => $reserv->id]) }}"> <button id="reserveBtn"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">
                                                Review
                                            </button>
                                        </a>
                                @elseif ($reserv->reviewed == 1 && $reserv->status == 'done')
                                    <button id="reserveBtn"
                                            class="bg-blue-600  text-white font-bold py-2 px-4 rounded mt-4 w-full">
                                            Done
                                    </button>
                                @else
                                    <button id="reserveBtn"
                                        class="bg-gray-200  text-black font-bold py-2 px-4 rounded mt-4 w-full">
                                        doing
                                    </button>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach



        </div>

    </main>
@endsection
