@extends('layouts.app')

@section('title')
    Login - Regen PCC 2024
@endsection

@section('dependency')
    {{-- Tidak memiliki dependency tambahan --}}
@endsection

@section('content')

    <body class="font-[poppins] h-dvh w-dvw"
        style="
            background: rgb(212, 233, 247);
            background: linear-gradient(
                180deg,
                rgba(212, 233, 247, 1) 0%,
                rgba(80, 141, 183, 1) 100%
            );
        ">
        <div class="flex flex-wrap items-center justify-between mx-auto p-4 fixed w-full">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/static/polines.png') }}" class="h-10 md:h-12" alt="polines" />
                <img src="{{ asset('assets/img/static/pcc.png') }}" class="h-10 md:h-12" alt="pcc" />
            </a>
        </div>

        <section class="dark:bg-gray-900 flex flex-col items-center justify-center h-dvh">
            <div class="px-6 py-8 lg:py-0">
                <a
                    class="flex items-center justify-center text-2xl font-semibold text-[#0D2244] dark:text-white w-full text-center">
                    Pemilihan Calon Administrator
                </a>
                <a
                    class="flex items-center justify-center mb-6 text-2xl font-semibold text-[#0D2244] dark:text-white w-full text-center">
                    UKM PCC 2023/2024
                </a>
                @if ($message = Session::get('error'))
                    <div id="alert-2"
                        class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>

                        <div class="ms-3 text-sm font-medium">
                            Error!
                            <span class="font-semibold">{{ $message }}</span>
                        </div>

                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                <div
                    class="bg-[#f9f9f9] rounded-3xl shadow-xl dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700 mb-5 md:min-w-[32rem]">
                    <div class="p-6 space-y-4 md:space-y-4 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-[#203D6F] md:text-4xl dark:text-white">
                            Login
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ url('/loginAction') }}" method="POST">
                            @csrf
                            <div>
                                <label for="login_id"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="login_id" id="login_id" value="{{ old('login_id') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Username" required />
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" value="{{ old('password') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="●●●●●●●●" required />
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 rounded-xl text-sm px-5 py-2.5 text-center font-semibold dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Log in
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <p class="tracking-normal dark:text-white text-[#0D2244] font-semibold md:text-base">
                Panitia Regen PCC @ 2023.
            </p>
            <div class="fixed bottom-0 w-full p-5">
                <p class="italic tracking-normal dark:text-white text-[#0D2244] font-bold md:text-base">
                    #ShareYourKnowledge.
                </p>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
@endsection
