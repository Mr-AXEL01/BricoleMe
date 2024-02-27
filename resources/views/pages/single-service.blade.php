<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    @vite('resources/css/app.css')
    <!-- Swiper librairy -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <style>
        .steps__step {
            transition: transform 1.5s ease, opacity 1.5s ease;
            transform: translateY(20px);
            opacity: 0;
        }

        .steps__step.animated {
            transform: translateY(0);
            opacity: 1;
        }

        .about__img {
            transition: transform 1.5s ease;
            transform: translateX(100%);
        }

        .about__text {
            transition: transform 1.5s ease;
            transform: translateX(-100%);
        }

        .about__img.animated {
            transform: translateX(0);
        }

        .about__text.animated {
            transform: translateX(0);
        }
    </style>

</head>

<body class="antialiased min-h-screen">
<!-- Section: Design Block -->
<section class="">
    <!-- Container -->
    <div class="w-full dark:bg-neutral-800 ">
        <nav class="relative container mx-auto flex w-full items-center justify-between py-2 shadow-sm shadow-neutral-700/10 dark:shadow-black/30
    lg:flex-wrap
    lg:justify-start"
             data-te-navbar-ref>
            <!-- Container wrapper -->
            <div class="flex w-full flex-wrap items-center justify-between px-6">
                <div class="flex items-center">
                    <!-- Toggle button -->
                    <button id="toggleButton"
                            class="block border-0 bg-transparent py-2 pr-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                            type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
                            aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="[&>svg]:w-7">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="h-7 w-7">
                                <path fill-rule="evenodd"
                                      d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </button>

                    <!-- Navbar Brand -->
                    <a class="text-primary dark:text-primary-400" href="#!">
                        <span class="[&>svg]:ml-2 [&>svg]:mr-3 [&>svg]:h-6 [&>svg]:w-6 [&>svg]:lg:ml-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Collapsible wrapper -->
                <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto "
                     id="navbarSupportedContentY" data-te-collapse-item>
                    <!-- Left links -->
                    <ul class="mr-auto lg:flex lg:flex-row" data-te-navbar-nav-ref>
                        <li data-te-nav-item-ref>
                            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                               href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light"
                               disabled>Dashboard</a>
                        </li>
                        <li data-te-nav-item-ref>
                            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                               href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Team</a>
                        </li>
                        <li class="mb-2 lg:mb-0" data-te-nav-item-ref>
                            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                               href="#!" data-te-nav-link-ref data-te-ripple-init
                               data-te-ripple-color="light">Projects</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="my-1 flex items-center lg:my-0 lg:ml-auto">
                    @if (Route::has('login'))
                        <div class="  text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else

                                <a href="{{ route('login') }}"
                                   class="mr-2 inline-block rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-yellow-300 transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-primary-400 dark:hover:bg-neutral-700 dark:hover:bg-opacity-60 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                                   data-te-ripple-init data-te-ripple-color="light">
                                    Login
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                       class="inline-block rounded bg-yellow-300 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                       data-te-ripple-init data-te-ripple-color="light">
                                        Sign up
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>

    </div>
    <!-- Navbar -->


</section>


<!-- Services-start -->
<section>
    <div class="container mx-auto">
        <div class="text-gray-600 my-10">
            <i class="fa-solid fa-house"></i>
            <span> / page / single-service</span>
        </div>
        <div class="inline-flex items-start flex-wrap w-full ">
            <div class="flex-1 min-w-[480px] lg:mx-[120px] p-4">
                <header>
                    <h2 class="text-4xl font-bold mb-3">title for service</h2>
                    <div class="flex items-center gap-1">
                        <span>Rating : </span>
                        <div class="text-yellow-400">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </header>
                <div class="my-4 flex items-center gap-5">
                    <img src="{{ asset('img/unnamed.png') }}" alt="" class="w-[100px] h-[100px] border-4 border-yellow-400 rounded-full">
                    <div>
                        <h5 class="text-2xl font-semibold">name of artisan </h5>
                        <div class="flex items-center my-3 text-gray-400"
                        >
                        <div class="mr-2">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="text-gray-900">Location</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-message"></i>
                            <span class="text-gray-900">J'ai parle francais , anglaise</span>
                        </div>
                    </div>
                    <button class="block border border-gray-300 py-1.5 px-6">
                        Message-me
                    </button>
                </div>
            </div>
            <!--- slider image -->
            <div class="swiper  relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="{{ asset('img/cleaning.jpg') }}" alt="" class="w-full">
                    </div><div class="swiper-slide"><img src="{{ asset('img/cleaning.jpg') }}" alt="" class="w-full">
                    </div><div class="swiper-slide"><img src="{{ asset('img/cleaning.jpg') }}" alt="" class="w-full">
                    </div><div class="swiper-slide"><img src="{{ asset('img/cleaning.jpg') }}" alt="" class="w-full">
                    </div>

                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <button class="next bg-white h-8 w-8 shadow absolute top-[50%] right-0 translate-y-[-50%] rounded-full z-50">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
                <button class="prev bg-white h-8 w-8 shadow absolute top-[50%] left-0 translate-y-[-50%] rounded-full z-50">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>




                <!-- If we need scrollbar -->
            </div>

            <div>
                <h4 class="text-xl my-2 font-semibold">a propos de service</h4>
                <p class="text-gray-600 max-h-[350px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ducimus fuga natus vitae voluptates. Consequatur
                    excepturi
                    modi
                    nesciunt praesentium
                    quod
                    sapiente tempora voluptates.</p>
            </div>
        </div>
        <div class="bg-[#f1f5f6] w-full  xl:max-w-[30%] p-4">
            <h1 class="text-2xl font-semibold mb-6">Cart</h1>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-yellow-400">
                    <tr>
                        <th scope="col" class="px-3 py-3 ">
                            Service name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Artisan name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white text-gray-900">

                        <td class="px-6 py-4">
                            Plumbing
                        </td><td class="px-6 py-4">
                            Abdelhak
                        </td>
                        <td class="px-6 py-4  ">
                            650 dh
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="my-6 inline-flex justify-end gap-2 w-full">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="id_service" value="id_service">
                    <input type="hidden" name="id_artisan" value="id_service">
                    <input type="hidden" name="id_client" value="id_service">
                    <button type="submit" class="bg-neutral-800 text-yellow-400 px-8 py-2 ">Reserve</button>
                </form>
            </div>
        </div>
    </div>
    </div>

</section>
<!-- Services-end -->


<!-- footer-start -->


<footer class="mt-10 flex flex-col items-center bg-neutral-900 text-center text-white">
    <div class="container px-6 pt-6">
        <div class="mb-6 flex justify-center">
            <a href="#!" type="button"
               class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
               data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                </svg>
            </a>

            <a href="#!" type="button"
               class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
               data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                </svg>
            </a>

            <a href="#!" type="button"
               class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
               data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path
                        d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                        fill-rule="evenodd" clip-rule="evenodd"/>
                </svg>
            </a>

            <a href="#!" type="button"
               class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
               data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>

            <a href="#!" type="button"
               class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
               data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path
                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                </svg>
            </a>

            <a href="#!" type="button"
               class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
               data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path
                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
        </div>
    </div>

    <!--Copyright section-->
    <div class="w-full p-4 text-center" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright:
        <a class="text-whitehite" href="https://tw-elements.com/">TW elements</a>
    </div>
</footer>
<!-- footer-end -->
{{--Swiper js --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },
    });

    // =================burger menu==================
    document.addEventListener("DOMContentLoaded", function () {
        const toggleButton = document.getElementById('toggleButton');
        const menu = document.getElementById('navbarSupportedContentY');

        toggleButton.addEventListener('click', function () {
            menu.classList.toggle('hidden');
            menu.classList.toggle('!visible');
        });
    });


</script>
</body>

</html>
