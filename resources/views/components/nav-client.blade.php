  <!-- navbar -->
  <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
      <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
          <i class="ri-menu-line"></i>
      </button>

      <ul class="ml-auto flex items-center">
          <li class="mr-1 dropdown">
              <button type="button"
                  class="dropdown-toggle text-gray-400 mr-4 w-8 h-8 rounded flex items-center justify-center  hover:text-gray-600">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="hover:bg-gray-100 rounded-full"
                      viewBox="0 0 24 24" style="fill: gray;transform: ;msFilter:;">
                      <path
                          d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                      </path>
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
                  <div class="flex items-center px-4 pt-4 border-b border-b-gray-100 notification-tab">
                      <button type="button" data-tab="notification" data-tab-page="notifications"
                          class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1 active">Notifications</button>
                      <button type="button" data-tab="notification" data-tab-page="messages"
                          class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1">Messages</button>
                  </div>
                  <div class="my-2">
                      <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          New order</div>
                                      <div class="text-[11px] text-gray-400">from a user</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          New order</div>
                                      <div class="text-[11px] text-gray-400">from a user</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          New order</div>
                                      <div class="text-[11px] text-gray-400">from a user</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          New order</div>
                                      <div class="text-[11px] text-gray-400">from a user</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          New order</div>
                                      <div class="text-[11px] text-gray-400">from a user</div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                      <ul class="max-h-64 overflow-y-auto hidden" data-tab-for="notification" data-page="messages">
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          John Doe</div>
                                      <div class="text-[11px] text-gray-400">Hello there!</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          John Doe</div>
                                      <div class="text-[11px] text-gray-400">Hello there!</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          John Doe</div>
                                      <div class="text-[11px] text-gray-400">Hello there!</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          John Doe</div>
                                      <div class="text-[11px] text-gray-400">Hello there!</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                  <img src="https://placehold.co/32x32" alt=""
                                      class="w-8 h-8 rounded block object-cover align-middle">
                                  <div class="ml-2">
                                      <div
                                          class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                          John Doe</div>
                                      <div class="text-[11px] text-gray-400">Hello there!</div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                  </div>
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

          <li class="dropdown ml-3">
              <button type="button" class="dropdown-toggle flex items-center">
                  <div class="flex-shrink-0 w-10 h-10 relative">
                      <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                          <img class="w-8 h-8 rounded-full"
                              src="{{asset('storage/userPics/'. Auth::user()->picture )}}" alt="" />
                          <div
                              class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping">
                          </div>
                          <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full">
                          </div>
                      </div>
                  </div>
                  <div class="p-2 md:block text-left">
                      <h2 class="text-sm font-semibold text-gray-800">{{Auth::user()->name}}</h2>
                      <p class="text-xs text-gray-500">Client</p>
                  </div>
              </button>
              <ul
                  class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
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
                        @csrf
                          <button role="menuitem"
                              class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer">
                              Log Out
                        </button>
                    </form>
                  </li>
              </ul>
          </li>
      </ul>
  </div>
  <!-- end navbar -->