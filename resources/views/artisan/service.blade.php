<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--======= Moment JS ==========--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/artisan.css">
</head>

<div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

        <h2 class="font-bold text-2xl">Bricole<span class="bg-[#FFD700] text-white px-2 rounded-md">Me</span></h2>
    </a>
    <ul class="mt-4">

        <div id="menu" class="flex flex-col space-y-2 ">
            <a
                href="/artisan/dashboard"
                class="text-sm font-medium text-gray-700 py-3 px-2 hover:bg-teal-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out mt-4"
            >
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                    ></path>
                </svg>
                <span class="">Dashboard</span>
            </a>
            <a
                href="/artisan/service"
                class="text-sm font-medium text-gray-700 py-3 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"
                    ></path>
                </svg>
                <span class="">services</span>
            </a>
            <a
                href=""
                class="text-sm font-medium text-gray-700 py-3 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path
                        fill-rule="evenodd"
                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <span class="">damandes</span>
            </a>
            <a
                href=""
                class="text-sm font-medium text-gray-700 py-4 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"
                    ></path>
                    <path
                        d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"
                    ></path>
                </svg>
                <span class="">Messages</span>
            </a>
            <a
                href=""
                class="text-sm font-medium text-gray-700 py-3 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <span class="">reservation</span>
            </a>


    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end sidenav -->

<main class="w-full overflow-hidden md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen relative transition-all main">
    <!-- navbar -->
    <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
        <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
            <i class="ri-menu-line"></i>
        </button>

        <ul class="ml-auto flex items-center">
            <li class="mr-1 dropdown">
                <button type="button"
                        class="dropdown-toggle text-gray-400 mr-4 w-8 h-8 rounded flex items-center justify-center  hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24"
                         style="fill: gray;transform: ;msFilter:;">
                        <path
                            d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path>
                    </svg>
                </button>
                <div
                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                    <form action="" class="p-4 border-b border-b-gray-100">
                        <div class="relative w-full">
                            <input type="text"
                                   class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                                   placeholder="Search...">
                            <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-900"></i>
                        </div>
                    </form>
                </div>
            </li>
            <li class="dropdown">

                <div
                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">

                </div>
            </li>
            <script>
                const fullscreenButton = document.getElementById('fullscreen-button');

                fullscreenButton.addEventListener('click', toggleFullscreen);

                function toggleFullscreen() {
                    if (document.fullscreenElement) {
                        document.exitFullscreen();
                    } else {

                        document.documentElement.requestFullscreen();
                    }
                }
            </script>
            <li>
                {{--==== Notifications ====--}}
                <div class="text-yellow-400 mr-6 relative ">

                    <button id="btn_notification" class="w-8 h-8 block rounded-full transition-all duration-200">
                        <i class="fa-regular fa-bell text-[25px] pointer-events-none"></i>
                        <span class="h-5 w-5 border-4 border-white absolute  top-[-4px] right-[-2px] rounded-full bg-yellow-400 text-black text-xs  hidden" id="count_notify">

                        </span>
                    </button>
                    <div
                        class="absolute top-[135%] right-0 z-[200] bg-white rounded-sm shadow w-[400px]  h-[500px] opacity-0 invisible transition-all duration-600 overflow-y-auto  translate-y-[40px]"
                        id="wrapper_notify">
                        <div class="bg-neutral-900 p-2">
                            <span class="text-lg">Notifications</span>
                        </div>
                        <div class="text-gray-900 py-4 p-2" id="notify-container">

                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdown ml-3">
                <button type="button" class="dropdown-toggle flex items-center" id="user-menu-button"
                        data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <div class="flex-shrink-0 w-10 h-10 relative">
                        <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                            <img class="w-8 h-8 rounded-full"
                                 src="{{asset('storage/userPics/' . Auth::user()->picture)}}" alt="78"/>
                            <div
                                class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping"></div>
                            <div
                                class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full"></div>
                        </div>
                    </div>

                    <div class="p-2 md:block text-left">
                        <h2 class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</h2>
                        <p class="text-xs text-gray-500">Artisan</p>
                    </div>
                </button>
                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]"
                    id="user-dropdown">
                    <li>
                        <a href="#"
                           class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Profile</a>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Settings</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            <a role="menuitem"
                               class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer"
                               onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                                <form>
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                    this.closest('form').submit();">

                                    </x-dropdown-link>
                                </form>
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end navbar -->


    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="block text-white bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-5"
            type="button">
        create service
    </button>
    <div class="flex flex-wrap">

        @if ($services->isEmpty())
            <div class="ml-5 col-span-full">
                <div class="bg-white shadow-md rounded-lg p-4">
                    <p class="text-gray-600">No services found.</p>
                </div>
            </div>
        @else
            @foreach ($services as $service)

                <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
                    <div>
                        <div>
                            <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                                <img src="{{asset('storage/userPics/' . $service->picture)}}"
                                     class="h-32 rounded-lg w-full object-cover">

                                <div class="py-2 px-2">
                                    <p class="text-md pt-2"><strong>Service:</strong> {{ $service->name }}</p>
                                    <p class="text-md pt-2"><strong>Price:</strong>{{ $service->tarif }}DH
                                        per {{ $service->hour }}</p>
                                    {{-- <p class="text-md pt-2"><strong>date final:</strong>{{ $service->hour }}</p> --}}
                                    <p class="text-md pt-2"><strong>Status:</strong> {{ $service->description }}</p>
                                </div>


                                {{-- @if ($reserv->status == 'pending') --}}
                                {{-- <a href=""> <button id="reserveBtn"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">
                                        Review
                                    </button>
                                </a> --}}
                                {{-- @else --}}
                                <button type="button" id="reserveBtn"
                                        class="bg-green-400 text-black font-bold py-2 px-4 rounded mt-4 w-full">
                                    Reserved
                                </button>
                                {{-- @endif --}}

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif

    </div>

    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">

            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Sign in to our platform
                    </h3>
                    <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('services.store') }}" method="POST"
                          enctype="multipart/form-data">@csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Name</label>
                            <input type="text" name="name" id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                   placeholder="Name of Service" required/>
                        </div>
                        <div>
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
                            <input type="text" name="description" id="description"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                   placeholder="Description" required/>
                        </div>
                        <div>
                            <label for="tarif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tarif</label>
                            <input type="text" name="tarif" id="tarif"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                   placeholder="Tarif" required/>
                        </div>
                        <div>
                            <label for="hour"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">hour</label>
                            <input type="number" name="hour" id="hour"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                   placeholder="Time of tarif" required/>
                        </div>
                        <div>
                            <input type="file" required name="picture">
                        </div>
                        <button type="submit"
                                class="w-full text-white bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add Serivce
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="popup_notify" class="absolute bottom-[6%]  right-[3%] transition-all duration-500  bg-white rounded-md min-w-[300px] p-5">

        <div class="inline-flex items-center gap-4">
            <i class="fa-solid fa-bell text-[40px] text-green-400"></i>
            <div>
                <span>new notification</span>
                <p>You have a new reservation for your service</p>
            </div>
            <i class="fa-solid fa-circle-xmark text-right hover:text-rose-500 cursor-pointer text-[25px]" onclick="closePopupNotify()"></i>
        </div>
    </div>

</main>

<script>

    const btnNotification = document.getElementById('btn_notification');
    const wrapper_notify = document.getElementById('wrapper_notify');
    btnNotification.addEventListener('click', () => {
        if (!btnNotification.classList.contains('active')) {
            btnNotification.classList.add('active')
            wrapper_notify.classList.remove('opacity-0', 'invisible', 'translate-y-[40px]')
        } else {
            btnNotification.classList.remove('active')
            wrapper_notify.classList.add('opacity-0', 'invisible', 'translate-y-[40px]')
        }

    })
    $(document).ready(function () {
        function fetchNotification(data) {
            data.map((notification, index) => {
                let imageUrl = "{{ asset('storage/userPics') }}" + '/' + notification.data.picture;
                console.log(imageUrl)
                $('#wrapper_notify').append(`
                  <div class="flex items-start p-5 gap-2 relative" key="${index}">
                     <img src="${imageUrl}" alt="photoclient" class="h-12 w-12 rounded-full">
                    <div class="">
                        <p class="text-sm max-w-[90%] text-gray-900">
                            <strong>${notification.data.name}</strong>
                            <span>want you to do service</span>
                        </p>
                        <span class="text-gray-400 text-sm">${notification.created_at}</span>
                        <div class="text-right absolute bottom-0 right-5">
                            <form>
                            @csrf
                                <input type="hidden" value="${notification.id}" id="id_notify">
                             <button type="submit" class="hover:bg-yellow-400 hover:text-black   border border-yellow-400 transition-all duration-400 text-xs px-2 py-1 text-yellow-400 rounded">Read</button>
                            </form>
                        </div>
                    </div>
                </div>
            `);
            })
        }
        function checkNotification() {
            const endpoint = '/artisan/notification';
            $.ajax({
                method: 'GET',
                url: endpoint,
                success: function (response) {
                    $('#wrapper_notify').html('');
                    let notifications = response.notifications
                    for ( i = 0 ; i < notifications.length ; i++) {
                        notifications[i].data = JSON.parse(notifications[i].data)
                        var timestamps = new Date(notifications[i].created_at)
                        var miliSeconds = Date.now() - timestamps.getTime()
                        var secondsAgo = Math.floor(miliSeconds/1000)
                        var readableTime;
                        if (secondsAgo < 60) {
                            readableTime = secondsAgo + ' seconds ago'
                        }else if(secondsAgo <  3600) {
                            var minuteAgo = Math.floor(secondsAgo / 60)
                            readableTime = minuteAgo + ' minutes ago'
                        } else if (secondsAgo < 86400) {
                            var hoursAgo = Math.floor(secondsAgo / 3600);
                            readableTime = hoursAgo + ' hours ago';
                        } else {
                            var daysAgo = Math.floor(secondsAgo / 86400);
                            readableTime = daysAgo + ' days ago';
                        }
                        notifications[i].created_at = readableTime;
                    }
                    fetchNotification(notifications);
                    $('#count_notify').html('');
                    if (response.countNotification > 0) {
                        $('#count_notify').removeClass('hidden')
                        $('#count_notify').append(`
                        <strong>${response.countNotification}</strong>
                    `)
                        setTimeout(closePopupNotify(), 4000);
                    }else{
                        $('#count_notify').addClass('hidden')

                    }

                },
                error: function (xhr, status, error) {
                    console.error(error);
                    // Handle errors here
                }
            });
        }
        // Artisan Send request to read notification
        $('#wrapper_notify').on('submit' , 'form' , function(e) {
            e.preventDefault();
            notificationId = $(this).find('#id_notify').val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            const endpoint = '/notify/read';
            $.ajax({
                method : 'post',
                url : endpoint,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data : {id : notificationId},
                success : function (response) {
                    let notifications = response.notifications
                    fetchNotification(notifications);
                    $('#count_notify').html('');
                    if (response.countNotification > 0) {
                        $('#count_notify').removeClass('hidden')
                        $('#count_notify').append(`
                        <strong>${response.countNotification}</strong>
                    `)
                    }else{
                        $('#count_notify').addClass('hidden')
                    }
                },
                error : function(error , status){
                    console.log(error , status)
                }
            })
        })
        checkNotification();
        setInterval(checkNotification, 3000 );
        setTimeout(closePopupNotify, 1500);

    });
    // =========== Hidden Notification container when outside wrapper ====== !
    window.addEventListener('click', (e) => {
        if (!wrapper_notify.contains(e.target) && !btnNotification.contains(e.target)) {
            btnNotification.classList.remove('active')
            wrapper_notify.classList.add('opacity-0', 'invisible', 'translate-y-[40px]')
        }
    })
    function closePopupNotify() {
        const popup_notify = document.getElementById('popup_notify');
        if(popup_notify.classList.contains('bottom-[6%]')) {
            popup_notify.classList.add('opacity-0' , 'invisible');
            popup_notify.classList.remove('bottom-[6%]');
            popup_notify.classList.add('bottom-[-300%]');
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/artisan.js"></script>
</body>
</html>
