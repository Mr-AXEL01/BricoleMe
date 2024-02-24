<nav class="fixed w-full bg-neutral-800 py-3 top-0 left-0 z-[100]">
    <div class="mx-5">
        {{-- ====== LOGO ======--}}
        <div class="flex items-center justify-between">
            <x-application-logo/>
            <div class="text-yellow-400 mr-6 relative ">
                <button id="btn_notification" class="w-8 h-8 block rounded-full transition-all duration-200">
                    <i class="fa-regular fa-bell text-[18px] pointer-events-none"></i>
{{--                    <span class="h-1.5 w-1.5 absolute  top-[-2px] right-[-2px] rounded-full bg-yellow-400 block"></span>--}}
                </button>
                <div class="absolute top-[135%] right-0 z-[200] bg-white rounded-sm shadow w-[400px] h-[500px] opacity-0 invisible transition-all duration-600  translate-y-[40px]" id="wrapper_notify">
                    <div class="bg-neutral-900 p-2">
                        <span class="text-lg">Notifications</span>
                    </div>
                    <div class="text-gray-900 py-4 p-2" id="notify-container">
                        <div class="flex items-start gap-2">
                            <img src="{{ asset('img/157535637.jpg') }}" alt="photoartisan" class="h-12 w-12 rounded-full">
                            <div class="">
                                <p class="text-sm max-w-[90%]">
                                    <strong>Abdelouahed SENANE</strong>
                                    <span>want to change his profession</span>
                                </p>
                                <span class="text-gray-400 text-sm">Yesterday</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</nav>
