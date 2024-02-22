@extends('layouts.admin-layout')

@section('content')

    <section class="bg-gray-100 flex  overflow-hidden">
        <aside>
            @include('components.sidebar')
        </aside>
        <main class="flex-grow min-h-screen w-full  ml-[260px]">
            <div class="bg-white p-5 m-5 rounded-lg">
                <div class="uppercase text-yellow-400 font-bold text-2xl">
                    Users
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
                                            <span>ID_user</span>
                                        </th>

                                        <th scope="col"
                                            class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                            Picture
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                            Name
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                            Email
                                        </th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">Role
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-yellow-400">
                                            Joined at
                                        </th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left
                                        rtl:text-right text-yellow-400">Updated at
                                        </th>

                                        <th scope="col" class="relative py-3.5 px-4">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-orange-200 " id="users-container">
                                    <tr>
                                        <td>id</td>
                                        <td>photo</td>
                                        <td>admin</td>
                                        <td>test@test.com</td>
                                        <td>role</td>
                                        <td>24/12/2024</td>
                                        <td>24/12/2024</td>
                                        <td>delete</td>
                                    </tr>
{{--                                    @foreach($users as $user)--}}
{{--                                        <tr>--}}
{{--                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{ $user->id }}</td>--}}
{{--                                            <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">--}}
{{--                                                <div><img src="{{ asset('/assets/uploads/' . $user->picture) }}" alt="" class="w-8 h-8 rounded-full"></div>--}}
{{--                                            </td>--}}
{{--                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{ $user->name }}</td>--}}
{{--                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{ $user->email }}</td>--}}
{{--                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">--}}
{{--                                                @if($user->admin)--}}
{{--                                                    <div class="text-sm text-rose-500 bg-rose-500/20 w-fit px-4 py-1 rounded-2xl">admin</div>--}}
{{--                                                @elseif($user->passenger)--}}
{{--                                                    <div class="text-sm text-green-500 bg-green-400/20 w-fit px-4 py-1 rounded-2xl">Passenger</div>--}}
{{--                                                @else--}}
{{--                                                    <div class="text-sm text-blue-500 bg-blue-400/20 w-fit px-4 py-1 rounded-2xl">Driver</div>--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
{{--                                            <td class="px-4 py-4 text-sm whitespace-nowrap">{{ $user->created_at->format('d-m-Y') }}</td>--}}
{{--                                            <td class="px-4 py-4 text-sm whitespace-nowrap">{{ $user->updated_at->format('d-m-Y') }}</td>--}}
{{--                                            <td class="px-4 py-4 text-sm whitespace-nowrap text-center">--}}
{{--                                                <a class="px-2 py-2 bg-rose-600  w-fit transition-colors duration-200 rounded-lg block cursor-pointer hover:bg-red-500--}}
{{--                                                confirmation-link" href="{{ url--}}
{{--                                                ('/admin/user/delete', $user->id ) }}"--}}
{{--                                                >--}}
{{--                                                    <svg class="w-4 h-4 text-white pointer-events-none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                                                         viewBox="0 0 18 20">--}}
{{--                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                                              d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>--}}
{{--                                                    </svg>--}}

{{--                                                </a>--}}

{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
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
