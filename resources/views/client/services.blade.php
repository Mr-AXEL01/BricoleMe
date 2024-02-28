@extends('layouts.client-layout')

@section('content')
<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">

    @include('components.nav-client')

    <div class="flex flex-wrap">


        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a href="#">
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <div
                            class="right-0 mt-4 rounded-l-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-orange-500">
                            0 stras
                        </div>
                        <img src="https://www.samsic-emploi.fr/sites/samsic-emploi/files/styles/image_contenu/public/paragraph/image/2021-03/image%20m%C3%A9tier%20plombier%20-%20samsic%20emploi.jpg?itok=skyMmgY_"
                            class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Kucing Malas</div>



                            <p class="text-md pt-2"><strong>Service:</strong> Plomberie | 100 DH/h</p>
                            <p class="text-md pt-2"><strong>description:</strong> Lorem ipsum dolor sit amet
                                consectetur.</p>
                            <p class="text-md pt-2"><strong>Téléphone:</strong> 123-456-7890</p>
                        </div>


                        <!-- Bouton Réserver -->
                        <button id="reserveBtn"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">
                            Réserver
                        </button>

                    </div>
                </a>

            </div>
        </div>




        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a href="#">
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <div
                            class="right-0 mt-4 rounded-l-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-orange-500">
                            0 stras
                        </div>
                        <img src="https://pbs.twimg.com/media/C3vrRsjVMAANit9.jpg"
                            class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="https://images.unsplash.com/photo-1590086782792-42dd2350140d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Kucing Malas</div>



                            <p class="text-md pt-2"><strong>Service:</strong> Plomberie | 100 DH/h</p>
                            <p class="text-md pt-2"><strong>description:</strong> Lorem ipsum dolor sit amet
                                consectetur.</p>
                            <p class="text-md pt-2"><strong>Téléphone:</strong> 123-456-7890</p>
                        </div>


                        <!-- Bouton Réserver -->
                        <button id="reserveBtn"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">
                            Réserver
                        </button>

                    </div>
                </a>

            </div>
        </div>







        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a href="#">
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <div
                            class="right-0 mt-4 rounded-l-full absolute text-center font-bold text-xs text-white px-2 py-1 bg-orange-500">
                            0 stras
                        </div>
                        <img src="https://www.iris-st.org/medias/1/image_2023-01-30_092600455.jpg"
                            class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Kucing Malas</div>



                            <p class="text-md pt-2"><strong>Service:</strong> Plomberie | 100 DH/h</p>
                            <p class="text-md pt-2"><strong>description:</strong> Lorem ipsum dolor sit amet
                                consectetur.</p>
                            <p class="text-md pt-2"><strong>Téléphone:</strong> 123-456-7890</p>
                        </div>


                        <!-- Bouton Réserver -->
                        <button id="reserveBtn"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 w-full">
                            Réserver
                        </button>

                    </div>
                </a>

            </div>
        </div>

    </div>

</main>



@endsection