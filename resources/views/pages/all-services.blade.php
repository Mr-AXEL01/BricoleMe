<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--- JQuery --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
    <div class="container w-[65%] mx-auto">
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
            <!-- Field Filter -->
            <div class="bg-gray-100 p-5">
                <div>
                    <h4 class="text-3xl font-semibold my-3">Filter By</h4>
                </div>
                <div class="w-full  inline-flex">

                    <div class="w-[30%] mx-4">
                        <form class="">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select Jobs</label>
                            <select id="jobs" name="job"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Choose a Job</option>
                                <option value="plumbing">Plumbing</option>
                            </select>
                        </form>
                    </div>
                    <div class="w-[30%] mx-4">
                        <form class="">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select Competence</label>
                            <select id="countries" name="competence"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Choose a Competence</option>
                                <option value="US">competence</option>
                            </select>
                        </form>
                    </div>
                    <div class="w-[30%] mx-4">
                        <form class="">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select Price</label>
                            <select id="countries" name="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Choose a Price</option>
                                <option value="100">0 - 100</option>
                            </select>
                        </form>
                    </div>


                </div>
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
                            <option value="">Recommandded</option>
                            <option value="best">Best seller</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid gap-5 grid-cols-1 lg:grid-cols-4" id="container_services">
                <!--- Card Service --->
                {{--                @foreach($services as $service)--}}


                {{--                @endforeach--}}

            </div>
        </div>
    </div>
</div>
</body>

<script>

    $(document).ready(function () {
        // ======= Search by Jobs ====

        $('#jobs').on('change' , function() {
            let searchVal = $('#jobs').val();
            $.ajax({
                url: 'services/data',
                method: 'get',
                data : {
                    'searchVal' : searchVal
                },
                success: function (response) {
                    let services = response.services;
                    $('#container_services').innerHTML = ''
                    services.forEach((service, index) => {
                        $('#container_services').append(`
                    <div class="w-full  id='${index}}' shadow overflow-hidden">
                        <a href="/single-service/">
                            <div class="max-h-[200px] overflow-hidden rounded-lg">
                                <img src="{{ asset('img/plumber.jpg') }}" class="h-full max-h-64">
                            </div>
                            <div class="px-2 py-2 flex items-center gap-2">
                                <img src="{{ asset('img/plumber.jpg') }}" class="w-8 h-8 rounded-full">
                                <h4 class="font-bold">artisan name</h4>
                            </div>
                            <div class="px-2">
                            <span>${service.name}</span>
                                <p> ${service.description}
                                </p>
                            </div>
                            <div class="my-5 p-2">
                                <span class="font-bold">A Partir de  $US</span>
                            </div>
                        </a>
                    </div>
                    `)
                    })
                }
            })
        })
        $.ajax({
            url: 'services/data',
            method: 'get',
            success: function (response) {
                let services = response.services;
                $('#container_services').innerHTML = ''
                services.forEach((service, index) => {
                    $('#container_services').append(`
                    <div class="w-full  id='${index}}' shadow overflow-hidden">
                        <a href="/single-service/">
                            <div class="max-h-[200px] overflow-hidden rounded-lg">
                                <img src="{{ asset('img/plumber.jpg') }}" class="h-full max-h-64">
                            </div>
                            <div class="px-2 py-2 flex items-center gap-2">
                                <img src="{{ asset('img/plumber.jpg') }}" class="w-8 h-8 rounded-full">
                                <h4 class="font-bold">artisan name</h4>
                            </div>
                            <div class="px-2">
                            <span>${service.name}</span>
                                <p> ${service.description}
                                </p>
                            </div>
                            <div class="my-5 p-2">
                                <span class="font-bold">A Partir de  $US</span>
                            </div>
                        </a>
                    </div>
                    `)
                })
            }
        })
    })


</script>
