<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>
    <section class="flex flex-col md:flex-row h-screen items-center ">

        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="images/partie-ouvrier-masculin.jpg" alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
      flex items-center justify-center">

            <div class="w-full h-100">


                <h1 class="text-xl md:text-4xl font-extrabold leading-tight ml-[36%]">Register</h1>

               

                    <!-- ___________image___________ -->

                    <div class="flex items-center justify-center space-x-6 my-5  rounded-md">
                        <label class="block">
                            <span class="sr-only">Choose profile photo</span>
                            <input name="picture" type="file" onchange="loadFile(event)" class="block w-full text-sm text-slate-500 
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-violet-700
                                hover:file:bg-violet-100
                                hidden
                            " />
                            <img id='preview_img' class="h-20 w-20 object-cover rounded-full shadow-lg cursor-pointer"
                                src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg&ga=GA1.1.1700460183.1708560000&semt=ais"
                                alt="Current profile photo" />
                        </label>
                    </div>

                    <!-- ________check role________ -->
                    <div class="flex justify-center items-center mt-10 mb-5">
                    <input type="radio" id="artisan" name="role" value="artisan" class="hidden"
                        onclick="toggleForm('artisan')">
                    <label for="artisan"
                        class="bg-white border-2 border-blue-500 text-blue-500 hover:bg-gray-300 rounded-md py-2 cursor-pointer transition-colors duration-300 ease-in-out px-20 mr-6">Artisan</label>

                    <input type="radio" id="client" name="role" value="client" class="hidden"
                        onclick="toggleForm('client')">
                    <label for="client"
                        class="bg-white border-2 border-blue-500 text-blue-500 hover:bg-gray-300 rounded-md py-2 cursor-pointer transition-colors duration-300 ease-in-out px-20">Client</label>
                </div>

                <form id="artisan-form" method="POST" action="/ArtisanRegister">
                    @csrf

                    <!-- ______name________ -->
                    <div>

                        <label class="block text-gray-700" for="name">fullName</label>
                        <input type="text" id="name" name="name" :value="old('name')" required autofocus
                            autocomplete="name"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!--________email_________  -->
                    <div class="mt-4">
                        <label class="block text-gray-700" for="email">Email</label>
                        <input type="email" id="email" name="email" :value="old('email')" required
                            autocomplete="username"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex justify-between">
                        <!-- _____________password__________ -->
                        <div class="mt-4">
                            <label class="block text-gray-700" for="password">Password</label>
                            <input type="password" id="password" name="password" required autocomplete="new-password"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                          focus:bg-white focus:outline-none">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- ______confirm password_________ -->
                        <div class="mt-4">
                            <label class="block text-gray-700" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                autocomplete="new-password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                            focus:bg-white focus:outline-none">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                    </div>

                    <div class="flex justify-between">
                        <!--________number_phone_________  -->
                        <div class="mt-4">
                            <label class="block text-gray-700" for="phone">phone number</label>
                            <input type="text" id="phone" name="phone" :value="old('phone')" required
                                autocomplete="phone"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                        </div>
                        <!--________ville_________  -->
                        <div class="mt-4">
                            <label class="block text-gray-700" for="ville">Ville</label>
                            <input type="text" id="ville" name="ville" :value="old('ville')" required
                                autocomplete="ville"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex items-center justify-center ">
                        <div class="mt-4 mr-3 ">

                            <a href="{{ url('auth/google') }}" type="button"
                                class="gradient-border w-full block bg-white hover:border-2 hover:border-red-500 hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        class="w-6 h-6 " viewBox="0 0 48 48">
                                        <defs>
                                            <path id="a"
                                                d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                        </defs>
                                        <clipPath id="b">
                                            <use xlink:href="#a" overflow="visible" />
                                        </clipPath>
                                        <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                                        <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                                        <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                                        <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                                    </svg>

                                </div>
                            </a>

                        </div>
                        <hr class="mt-3">

                        <div class="mt-4">

                            <button type="button"
                                class="hover:border-2 hover:border-blue-500 w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                        <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                                        <path fill="#fff"
                                            d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                                        </path>
                                    </svg>



                                </div>
                            </button>

                        </div>

                    </div>





                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
                <form id="client-form" method="POST" action="/ClientRegister" style="display: none;">
                @csrf

<!-- ______name________ -->
<div>

    <label class="block text-gray-700" for="name">FullName</label>
    <input type="text" id="name" name="name" :value="old('name')" required autofocus
        autocomplete="name"
        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!--________email_________  -->
<div class="mt-4">
    <label class="block text-gray-700" for="email">Email</label>
    <input type="email" id="email" name="email" :value="old('email')" required
        autocomplete="username"
        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<div class="flex justify-between">
    <!-- _____________password__________ -->
    <div class="mt-4">
        <label class="block text-gray-700" for="password">Password</label>
        <input type="password" id="password" name="password" required autocomplete="new-password"
            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
      focus:bg-white focus:outline-none">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- ______confirm password_________ -->
    <div class="mt-4">
        <label class="block text-gray-700" for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required
            autocomplete="new-password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
        focus:bg-white focus:outline-none">
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

</div>

<div class="flex justify-between">
    <!--________number_phone_________  -->
    <div class="mt-4">
        <label class="block text-gray-700" for="phone">phone number</label>
        <input type="text" id="phone" name="phone" :value="old('phone')" required
            autocomplete="phone"
            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
        <x-input-error :messages="$errors->get('ville')" class="mt-2" />
    </div>
    <!--________ville_________  -->
    <div class="mt-4">
        <label class="block text-gray-700" for="ville">Ville</label>
        <input type="text" id="ville" name="ville" :value="old('ville')" required
            autocomplete="ville"
            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
        <x-input-error :messages="$errors->get('ville')" class="mt-2" />
    </div>
</div>

<div class="flex items-center justify-center ">
    <div class="mt-4 mr-3 ">

        <a href="{{ url('auth/google') }}" type="button"
            class="gradient-border w-full block bg-white hover:border-2 hover:border-red-500 hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    class="w-6 h-6 " viewBox="0 0 48 48">
                    <defs>
                        <path id="a"
                            d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                    </defs>
                    <clipPath id="b">
                        <use xlink:href="#a" overflow="visible" />
                    </clipPath>
                    <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                    <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                    <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                    <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                </svg>

            </div>
        </a>

    </div>
    <hr class="mt-3">

    <div class="mt-4">

        <button type="button"
            class="hover:border-2 hover:border-blue-500 w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                    <path fill="#fff"
                        d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                    </path>
                </svg>



            </div>
        </button>

    </div>

</div>





<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ms-4">
        {{ __('Register') }}
    </x-primary-button>
</div>
                </form>



            </div>
        </div>

    </section>

    <script>
          function toggleForm(role) {
            document.getElementById('artisan-form').style.display = role === 'artisan' ? 'block' : 'none';
            document.getElementById('client-form').style.display = role === 'client' ? 'block' : 'none';
        }
    

  
    </script>
</body>

</html>