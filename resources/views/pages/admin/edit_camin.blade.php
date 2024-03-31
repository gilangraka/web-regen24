@extends('layouts.dashboard.app')

@section('title')
    Dashboard : Edit Camin
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
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Edit Camin</span>
                </div>
            </li>
        </ol>
    </nav>
    <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
        Edit Camin
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
                <hr class="h-1 rounded-lg my-4 bg-gray-200 border-0 dark:bg-gray-700 w-[80%]" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Visi
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 text-center px-10 mb-1">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Commodi libero, earum officiis
                    necessitatibus ad reprehenderit repellendus,
                    deserunt cumque vel reiciendis maxime et nobis,
                    vero pariatur porro praesentium itaque ea vitae.
                </span>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Misi
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 text-center px-10 mb-1">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Commodi libero, earum officiis
                    necessitatibus ad reprehenderit repellendus,
                    deserunt cumque vel reiciendis maxime et nobis,
                    vero pariatur porro praesentium itaque ea vitae.
                </span>
                <button type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 mt-5 w-[80%]"
                    id="updateProductButton" data-modal-target="updateProductModal1"
                    data-modal-toggle="updateProductModal1">
                    Edit
                </button>
            </div>
        </div>
        <!-- modal 1 -->
        <!-- Main modal -->
        <div id="updateProductModal1" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div
                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Form
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="updateProductModal1">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="#">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="name" id="name" value="camin1"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="camin" />
                            </div>
                            <div>
                                <label for="brand"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="file_input" type="file" />
                            </div>
                            <div class="sm:col-span-2">
                                <label for="visi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi</label>
                                <textarea id="visi" rows="5"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Write a description..."></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="misi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Misi</label>
                                <textarea id="misi" rows="5"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Write a description..."></textarea>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="submit"
                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 w-48 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
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
                <hr class="h-1 rounded-lg my-4 bg-gray-200 border-0 dark:bg-gray-700 w-[80%]" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Visi
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 text-center px-10 mb-1">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Commodi libero, earum officiis
                    necessitatibus ad reprehenderit repellendus,
                    deserunt cumque vel reiciendis maxime et nobis,
                    vero pariatur porro praesentium itaque ea vitae.
                </span>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Misi
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 text-center px-10 mb-1">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Commodi libero, earum officiis
                    necessitatibus ad reprehenderit repellendus,
                    deserunt cumque vel reiciendis maxime et nobis,
                    vero pariatur porro praesentium itaque ea vitae.
                </span>
                <button type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 mt-5 w-[80%]"
                    id="updateProductButton" data-modal-target="updateProductModal2"
                    data-modal-toggle="updateProductModal2">
                    Edit
                </button>
            </div>
        </div>
        <!-- modal 2 -->
        <!-- Main modal -->
        <div id="updateProductModal2" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div
                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Form
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="updateProductModal2">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="#">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name" value="camin2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="camin" />
                            </div>
                            <div>
                                <label for="brand"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="file_input" type="file" />
                            </div>
                            <div class="sm:col-span-2">
                                <label for="visi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi</label>
                                <textarea id="visi" rows="5"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Write a description..."></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="misi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Misi</label>
                                <textarea id="misi" rows="5"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Write a description..."></textarea>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="submit"
                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 w-48 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
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
                <hr class="h-1 rounded-lg my-4 bg-gray-200 border-0 dark:bg-gray-700 w-[80%]" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Visi
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 text-center px-10 mb-1">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Commodi libero, earum officiis
                    necessitatibus ad reprehenderit repellendus,
                    deserunt cumque vel reiciendis maxime et nobis,
                    vero pariatur porro praesentium itaque ea vitae.
                </span>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                    Misi
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 text-center px-10 mb-1">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Commodi libero, earum officiis
                    necessitatibus ad reprehenderit repellendus,
                    deserunt cumque vel reiciendis maxime et nobis,
                    vero pariatur porro praesentium itaque ea vitae.
                </span>
                <button type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 mt-5 w-[80%]"
                    id="updateProductButton" data-modal-target="updateProductModal3"
                    data-modal-toggle="updateProductModal3">
                    Edit
                </button>
            </div>
        </div>
        <!-- modal 3 -->
        <!-- Main modal -->
        <div id="updateProductModal3" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div
                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Form
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="updateProductModal3">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="#">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name" value="camin3"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="camin" />
                            </div>
                            <div>
                                <label for="brand"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="file_input" type="file" />
                            </div>
                            <div class="sm:col-span-2">
                                <label for="visi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi</label>
                                <textarea id="visi" rows="5"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Write a description..."></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="misi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Misi</label>
                                <textarea id="misi" rows="5"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Write a description..."></textarea>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="submit"
                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 w-48 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_tambahan')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endsection
