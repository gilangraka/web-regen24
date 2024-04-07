@extends('layouts.app')

@section('title')
    Web Regen 2024 : Vote Camin
@endsection

@section('dependency')
    <style>
        .swal-button--cancle:hover {
            background-color: rgb(220 38 38) !important;
        }

        .swal-button--confirm {
            background-color: rgb(34 197 94);
        }

        .swal-button--confirm:hover {
            background-color: rgb(22 163 74) !important;
        }
    </style>
@endsection

@section('content')

    <body class="bg-gradient-to-t from-[#508DB7] min-h-screen">
        <div class="max-w-screen-xl mx-auto py-4">
            <div class="flex items-center m-4 justify-between">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('assets/img/static/polines.png') }}" class="h-10 md:h-12" alt="polines" />
                    <img src="{{ asset('assets/img/static/pcc.png') }}" class="h-10 md:h-12" alt="pcc" />
                </div>
                <div class="flex items-center gap-2">
                    <form action="{{ url('/logoutAction') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-800 rounded-lg p-2 text-white">
                            <svg class="flex-shrink-0 w-6 h-6 transition duration-75" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="px-8">
                <h1 class="text-[#0D2244] text-center font-bold text-lg md:text-xl lg:text-2xl my-8">
                    Pemilihan Calon Administrator UKM PCC 2023/2024
                </h1>
                <div id="camin" class="grid md:flex gap-4">
                    @foreach ($camin as $item)
                        <form action="{{ url('/vote_camin') }}" method="POST">
                            @csrf
                            <div class="w-full">
                                <input type="hidden" id="id_camin" name="id_camin" value="{{ $item->id }}">
                                <div
                                    class="bg-gradient-to-b from-[#D4E9F7] to-white rounded-2xl shadow-lg shadow-[#4A6695]">
                                    <div class="p-4">
                                        <img src="{{ asset('storage/') }}/{{ $item->foto }}"
                                            class="mx-auto rounded-full w-[100px] h-[100px] object-cover" />
                                        <div class="w-full">
                                            <div class="w-8/12 mx-auto rounded-full border-2 border-[#4A6695] my-2 p-1">
                                                <p class="text-center text-[#0D2244] font-bold text-lg">
                                                    {{ $item->nama }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <h3 class="font-bold text-center text-lg">Visi</h3>
                                            <p class="my-2 font-semibold text-sm">
                                                {{ $item->visi }}
                                            </p>
                                            <h3 class="font-bold text-center text-lg">Misi</h3>
                                            <p class="my-2 font-semibold text-sm">
                                                {{ $item->misi }}
                                            </p>
                                            <div class="w-full mx-auto mt-4">
                                                <button type="button" data-modal-target="camin{{ $item->id }}"
                                                    data-modal-toggle="camin{{ $item->id }}"
                                                    class="text-lg text-white bg-[#46A5FF] hover:bg-[#3c9ffc] font-semibold p-2 px-20 rounded-full mx-auto block">
                                                    VOTE
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="camin{{ $item->id }}" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="camin{{ $item->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah
                                                anda yakin dengan pilihan anda?</h3>
                                            <button type="submit" data-modal-hide="camin{{ $item->id }}"
                                                type="button"
                                                class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Yakin
                                            </button>
                                            <button data-modal-hide="camin{{ $item->id }}" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batalkan
                                                Pilihan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endforeach

                </div>
                <h3 class="text-white text-center font-semibold my-4">
                    Panitia Regen PCC &copy; 2024
                </h3>
            </div>

            <footer class="my-4">
                <h3 class="text-white font-semibold">#ShareYourKnowLedge</h3>
            </footer>
        </div>
        <script script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            camin1.addEventListener("click", () => {
                showConfirmationDialog("camin1");
            });
            camin2.addEventListener("click", () => {
                showConfirmationDialog("camin2");
            });
            camin3.addEventListener("click", () => {
                showConfirmationDialog("camin3");
            });

            function getVote() {
                $.ajax({
                    url: "{{ url('api/get_vote') }}",
                    method: "GET",
                    success: function(data) {
                        let getStatus = data[0]["status"];
                        if (getStatus == "0") {
                            location.reload();
                        }
                    }
                })
            }

            function showConfirmationDialog(elementId) {
                swal({
                    title: "PERINGATAN!",
                    text: "Apakah anda yakin dengan pilihan anda?",
                    icon: "warning",
                    buttons: {
                        cancle: {
                            text: "Batal",
                            value: null,
                            visible: true,
                            className: "bg-red-500 hover:bg-red-500 !important",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Konfirmasi",
                            className: "bg-green-500",
                        },
                    },
                    dangerMode: false,
                }).then((willVote) => {
                    if (willVote) {
                        form.submit();
                    } else {
                        swal("Pilihan telah dibatalkan!");
                    }
                });
            }

            $(document).ready(function() {
                getCamin();
                setInterval(() => {
                    getVote();
                }, 7500);
            })
        </script>
    </body>
@endsection
