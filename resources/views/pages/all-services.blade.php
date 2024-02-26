<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen">
<!--- nav bar === -->
<div>
    @include('components.nav-bar')
</div>
<div class="">
    <div class="container w-[80%] mx-auto">
        <div class="my-10">
            <div class="mb-10">
                <div class=" text-gray-900 my-4">
                    <i class="fa-solid fa-house text-gray-500"></i>
                    <span class="mx-2 ">home / all-services</span>
                </div>
                <h2 class="text-3xl uppercase text-neutral-800 font-semibold">All Services page</h2>
                <p class="text-lg text-gray-400 my-2">
                    Find a freelance expert in plumbing/electrical services for your project needs
                </p>
            </div>
            <div class="w-full bg-red-500 h-[100px]">
                section filter
            </div>
            <div class="my-5">
                <div class="flex items-center justify-between">
                    <div>
                        8400+ services disponibles
                    </div>
                    <div>
                        <label class="mx-2">Trier par: </label>
                        <select class="w-[200px] border-none outline-none rounded-md bg-gray-100">
                            <option value="last">Latest services</option>
                            <option value="recommand">Recommandded</option>
                            <option value="best">Best seller</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid gap-5 grid-cols-1 lg:grid-cols-4">
                <div class="w-full   shadow overflow-hidden">
                        <div class="max-h-[200px] overflow-hidden rounded-lg">
                            <img src="{{ asset('img/plumber.jpg') }}" class="h-full max-h-64">
                        </div>
                    <div class="px-2 py-2 flex items-center gap-2">
                        <img src="{{ asset('img/plumber.jpg') }}" class="w-8 h-8 rounded-full">
                        <h4 class="font-bold">Username</h4>
                    </div>
                    <div class="px-2">
                        <p>I will create a modern and responsive wordpress website design
                        </p>
                    </div>
                    <div class="my-5 p-2">
                        <span class="font-bold">A Partir de 90 $US</span>
                    </div>
                </div>
                <div class="w-full   shadow overflow-hidden">
                    <div class="max-h-[200px] overflow-hidden rounded-lg">
                        <img src="{{ asset('img/plumber.jpg') }}" class="h-full max-h-64">
                    </div>
                    <div class="px-2 py-2 flex items-center gap-2">
                        <img src="{{ asset('img/plumber.jpg') }}" class="w-8 h-8 rounded-full">
                        <h4 class="font-bold">Username</h4>
                    </div>
                    <div class="px-2">
                        <p>I will create a modern and responsive wordpress website design
                        </p>
                    </div>
                    <div class="my-5 p-2">
                        <span class="font-bold">A Partir de 90 $US</span>
                    </div>
                </div>
                <div class="w-full   shadow overflow-hidden">
                    <div class="max-h-[200px] overflow-hidden rounded-lg">
                        <img src="{{ asset('img/plumber.jpg') }}" class="h-full max-h-64">
                    </div>
                    <div class="px-2 py-2 flex items-center gap-2">
                        <img src="{{ asset('img/plumber.jpg') }}" class="w-8 h-8 rounded-full">
                        <h4 class="font-bold">Username</h4>
                    </div>
                    <div class="px-2">
                        <p>I will create a modern and responsive wordpress website design
                        </p>
                    </div>
                    <div class="my-5 p-2">
                        <span class="font-bold">A Partir de 90 $US</span>
                    </div>
                </div>
                <div class="w-full   shadow overflow-hidden">
                    <div class="max-h-[200px] overflow-hidden rounded-lg">
                        <img src="{{ asset('img/plumber.jpg') }}" class="h-full max-h-64">
                    </div>
                    <div class="px-2 py-2 flex items-center gap-2">
                        <img src="{{ asset('img/plumber.jpg') }}" class="w-8 h-8 rounded-full">
                        <h4 class="font-bold">Username</h4>
                    </div>
                    <div class="px-2">
                        <p>I will create a modern and responsive wordpress website design
                        </p>
                    </div>
                    <div class="my-5 p-2">
                        <span class="font-bold">A Partir de 90 $US</span>
                    </div>
                </div>
                <div class="w-full   shadow overflow-hidden">
                    <div class="max-h-[200px] overflow-hidden rounded-lg">
                        <img src="{{ asset('img/plumber.jpg') }}" class="h-full max-h-64">
                    </div>
                    <div class="px-2 py-2 flex items-center gap-2">
                        <img src="{{ asset('img/plumber.jpg') }}" class="w-8 h-8 rounded-full">
                        <h4 class="font-bold">Username</h4>
                    </div>
                    <div class="px-2">
                        <p>I will create a modern and responsive wordpress website design
                        </p>
                    </div>
                    <div class="my-5 p-2">
                        <span class="font-bold">A Partir de 90 $US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


