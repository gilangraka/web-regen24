@extends('layouts.dashboard.app')

@section('title')
    Dashboard : Home Panitia
@endsection

@section('dependency')
    {{-- Tidak ada dependency tambahan --}}
@endsection

@section('content_main')
    <nav class="flex my-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Dasshboard
                </a>
            </li>
        </ol>
    </nav>
    <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
        Dasshboard
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
        <!-- card 1 -->
        <div class="w-full bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center py-8">
                <img class="w-24 h-24 md:w-36 md:h-36 mb-3 rounded-full shadow-lg object-cover"
                    src="../../public/foto.jpg" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Luhut
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Nomor Urut 1</span>
                <div class="flex my-4 md:my-6 w-full">
                    <div class="w-full mx-10 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="bg-[#12CC76] text-xs md:text-base font-medium text-blue-100 text-center p-0.5 leading-none rounded-full h-6"
                            style="width: 28%"></div>
                    </div>
                </div>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    74.38% - 90 dari 121
                </h5>
            </div>
        </div>
        <!-- card 2 -->
        <div class="w-full bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center py-8">
                <img class="w-24 h-24 md:w-36 md:h-36 mb-3 rounded-full shadow-lg object-cover"
                    src="../../public/foto2.jpg" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Komeng
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Nomor Urut 2</span>
                <div class="flex my-4 md:my-6 w-full">
                    <div class="w-full mx-10 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="bg-[#12CC76] text-xs md:text-base font-medium text-blue-100 text-center p-0.5 leading-none rounded-full h-6"
                            style="width: 56%"></div>
                    </div>
                </div>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    12.40% - 15 dari 121
                </h5>
            </div>
        </div>
        <!-- card 3 -->
        <div class="w-full bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center py-8">
                <img class="w-24 h-24 md:w-36 md:h-36 mb-3 rounded-full shadow-lg object-cover"
                    src="../../public/foto3.jpg" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Emm..
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Nomor Urut 3</span>
                <div class="flex my-4 md:my-6 w-full">
                    <div class="w-full mx-10 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="bg-[#12CC76] text-xs md:text-base font-medium text-blue-100 text-center p-0.5 leading-none rounded-full h-6"
                            style="width: 16%"></div>
                    </div>
                </div>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    13.22% - 16 dari 121
                </h5>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
        <!-- card 4 -->
        <div class="w-full p-6 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
                <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
            </svg>

            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                    Presentase Vote
                </h5>
            </a>
            <canvas id="myPie" aria-label="Hello ARIA World" role="img"></canvas>
            <canvas id="myDoughnut" aria-label="Hello ARIA World" role="img"></canvas>
        </div>

        <!-- card 5 -->
        <div
            class="w-full md:col-span-2 p-6 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">

            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                    Update Peserta
                </h5>
                <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 dark:text-white">
                    72.46% - 121 dari 167
                </h5>
            </a>
            <div class="relative overflow-x-auto">
                <table id="myTable" class="display nowrap w-full">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">1</span>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">1</span>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">1</span>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">1</span>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Haydar</td>
                            <td>4.33.23.0.19</td>
                            <td>haydar@gmail.com</td>
                            <td>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">2</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Pilihan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script_tambahan')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const pieChart = document.getElementById("myPie");
        const doughnutChart = document.getElementById("myDoughnut");

        new Chart(pieChart, {
            type: "pie",
            data: {
                labels: ["Camin 1", "Camin 2", "Camin 3", "Golput"],
                datasets: [{
                    label: "# of Votes",
                    data: [23, 52, 16, 9],
                    backgroundColor: [
                        "#46A5FF",
                        "#0D2244",
                        "#0146BD",
                        "#D4E9F7",
                    ],
                    borderWidth: 0,
                }, ],
            },
            options: {
                responsive: true,
            },
        });

        new Chart(doughnutChart, {
            type: "doughnut",
            data: {
                labels: ["Camin 1", "Camin 2", "Camin 3", "Golput"],
                datasets: [{
                    label: "# of Votes",
                    data: [23, 52, 16, 9],
                    backgroundColor: [
                        "#46A5FF",
                        "#0D2244",
                        "#0146BD",
                        "#D4E9F7",
                    ],
                    borderWidth: 0,
                }, ],
            },
            options: {
                responsive: true,
            },
        });

        new DataTable("#myTable", {
            responsive: true,
        });
    </script>
@endsection
