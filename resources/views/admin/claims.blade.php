@extends('layouts.admin-layout')

@section('content')
    <section class="bg-gray-100 flex relative  overflow-hidden">
        @include('components.nav-admin')
        <aside>
            @include('components.sidebar')
        </aside>
        <main class="flex-grow min-h-screen w-full mt-20  ml-[260px]">


            
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path fill-rule="evenodd" d="M14.348 5.652a.5.5 0 0 1 .708.708L10.707 10l4.35 4.35a.5.5 0 1 1-.708.708L10 10.707l-4.35 4.35a.5.5 0 1 1-.708-.708L9.293 10 4.643 5.65a.5.5 0 1 1 .708-.708L10 9.293l4.35-4.35z"/>
            </svg>
        </span>
    </div>
@endif

            <div class="bg-white p-5 m-5 rounded-lg">
                <div class="uppercase text-yellow-400 font-bold text-2xl">
                    Claims
                </div>


                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border  md:rounded-lg">
                                <table class="min-w-full divide-y divide-yellow-500">
                                    <thead class="bg-neutral-800 ">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                                <span>id</span>
                                            </th>

                                            <th scope="col"
                                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                                Picture
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                                Name Client
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                                Name Artisan
                                            </th>


                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                                Date Creation claims
                                            </th>


                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-orange-200 " id="users-container">

                                        @foreach ($reclamations as $reclamation)
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                    {{ $reclamation->id }}</td>
                                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                    <div><img
                                                            src="{{ asset('/storage/userPics/' . $reclamation->reservation->service->artisan->user->picture) }}"
                                                            alt="" class="w-8 h-8 rounded-full"></div>
                                                </td>
                                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                    {{ $reclamation->reservation->service->artisan->user->name }}</td>
                                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                    {{ $reclamation->reservation->client->user->name }}</td>

                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    {{ $reclamation->created_at->format('d-m-Y') }}</td>
                                                   
                                                <td class="flex  px-4 py-4 text-sm whitespace-nowrap text-center">
                                               

                                                <form action="{{route('admin.claims-accepted', ['id'=>$reclamation->id])}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="px-2 py-2 bg-green-600  w-fit transition-colors duration-200 rounded-lg block cursor-pointer hover:bg-green-400
                                                confirmation-link"
                                                        >
                                                        <svg class="w-4 h-4 text-white pointer-events-none"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2" fill="none"
                                                                d="M5 13l4 4L19 7"></path>
                                                        </svg>

                                                    </button>
                                                </form>
                                                </td>
                                            
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>


    </section>
@endsection
