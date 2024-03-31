<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.dataTables.css  "
        />
        <style>
            * {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            *::-webkit-scrollbar {
                display: none;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.dataTables.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-[poppins] h-dvh w-dvw">
        <div class="antialiased bg-gray-50 dark:bg-gray-900">
            <nav
                class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50"
            >
                <div class="flex flex-wrap justify-between items-center">
                    <div class="flex justify-start items-center">
                        <button
                            data-drawer-target="drawer-navigation"
                            data-drawer-toggle="drawer-navigation"
                            aria-controls="drawer-navigation"
                            class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <svg
                                aria-hidden="true"
                                class="hidden w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="sr-only">Toggle sidebar</span>
                        </button>
                        <a
                            href="https://flowbite.com"
                            class="flex items-center justify-between mr-4"
                        >
                            <div
                                class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600"
                            >
                                <span
                                    class="font-medium text-gray-600 dark:text-gray-300"
                                    >AD</span
                                >
                            </div>
                            <span
                                class="self-center font-medium whitespace-nowrap dark:text-white ps-4"
                                >Atmin</span
                            >
                        </a>
                        <form
                            action="#"
                            method="GET"
                            class="hidden md:block md:pl-2"
                        >
                            <label for="topbar-search" class="sr-only"
                                >Search</label
                            >
                            <div class="relative md:w-96">
                                <div
                                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                                >
                                    <svg
                                        class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        ></path>
                                    </svg>
                                </div>
                                <input
                                    type="text"
                                    name="email"
                                    id="topbar-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Cari"
                                />
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center lg:order-2">
                        <button
                            type="button"
                            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button"
                            aria-expanded="false"
                            data-dropdown-toggle="dropdown"
                        >
                            <span class="sr-only">Open user menu</span>
                            <div
                                class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 text-gray-500 cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
                            >
                                <svg
                                    aria-hidden="true"
                                    class="w-6 h-6"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                            id="dropdown"
                        >
                            <div class="py-3 px-4">
                                <span
                                    class="block text-sm font-semibold text-gray-900 dark:text-white"
                                    >Panitia</span
                                >
                                <span
                                    class="block text-sm text-gray-900 truncate dark:text-white"
                                    >panitia@gmail.com</span
                                >
                            </div>
                            <ul
                                class="py-1 text-gray-700 dark:text-gray-300"
                                aria-labelledby="dropdown"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="block py-2 px-4 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Sign out</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Sidebar -->

            <aside
                class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-[#111823] md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
                aria-label="Sidenav"
                id="drawer-navigation"
            >
                <div
                    class="overflow-y-auto py-5 px-3 h-full bg-[#0D2244] dark:bg-gray-800"
                >
                    <form action="#" method="GET" class="md:hidden mb-2">
                        <label for="sidebar-search" class="sr-only"
                            >Search</label
                        >
                        <div class="relative">
                            <div
                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                            >
                                <svg
                                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    ></path>
                                </svg>
                            </div>
                            <input
                                type="text"
                                name="search"
                                id="sidebar-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search"
                            />
                        </div>
                    </form>
                    <ul class="space-y-2">
                        <li>
                            <a
                                href="dashboard.blade.php"
                                class="flex items-center p-2 text-base font-medium text-gray-300 hover:text-white rounded-lg dark:text-white hover:bg-[#203D6F] dark:hover:bg-gray-700 group"
                            >
                                <svg
                                    class="w-6 h-6 text-gray-300 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a
                                href="edit_camin.blade.php"
                                class="flex items-center p-2 text-base font-medium text-gray-300 hover:text-white rounded-lg dark:text-white hover:bg-[#203D6F] dark:hover:bg-gray-700 group"
                            >
                                <svg
                                    class="w-6 h-6 text-gray-50 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span class="ml-3">Edit Camin</span>
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                class="flex items-center p-2 text-base font-medium text-white rounded-lg bg-[#203D6F] dark:hover:bg-gray-700 group"
                            >
                                <svg
                                    class="w-6 h-6 text-gray-50 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-5h7.586l-.293.293a1 1 0 0 0 1.414 1.414l2-2a1 1 0 0 0 0-1.414l-2-2a1 1 0 0 0-1.414 1.414l.293.293H4V9h5a2 2 0 0 0 2-2Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span class="ml-3">Import User</span>
                            </a>
                        </li>

                        <li>
                            <a
                                href="view_user.blade.php"
                                class="flex items-center p-2 text-base font-medium text-gray-300 hover:text-white rounded-lg dark:text-white hover:bg-[#203D6F] dark:hover:bg-gray-700 group"
                            >
                                <svg
                                    class="w-6 h-6 text-gray-50 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span class="ml-3">View User</span>
                            </a>
                        </li>

                        <li>
                            <a
                                href="jadwal_vote.blade.php"
                                class="flex items-center p-2 text-base font-medium text-gray-300 hover:text-white rounded-lg dark:text-white hover:bg-[#203D6F] dark:hover:bg-gray-700 group"
                            >
                                <svg
                                    class="w-6 h-6 text-gray-50 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>

                                <span class="ml-3">Jadwal Vote</span>
                            </a>
                        </li>
                    </ul>
                    <ul
                        class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700"
                    >
                        <li>
                            <a
                                href="#"
                                class="flex items-center p-2 text-base font-medium text-red-500 hover:text-red-400 rounded-lg transition duration-75 hover:bg-[#203D6F] dark:hover:bg-gray-700 dark:text-white group"
                            >
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-red-500 transition duration-75 dark:text-red-400 group-hover:text-red-400 dark:group-hover:text-white"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"
                                    />
                                </svg>
                                <span class="ml-3">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <main
                class="p-4 md:ml-64 h-screen pt-20 relative"
                style="
                    background: rgb(212, 233, 247);
                    background: linear-gradient(
                        180deg,
                        rgba(212, 233, 247, 1) 0%,
                        rgba(80, 141, 183, 1) 100%
                    );
                "
            >
                <nav class="flex my-3" aria-label="Breadcrumb">
                    <ol
                        class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse"
                    >
                        <li class="inline-flex items-center">
                            <a
                                href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                            >
                                <svg
                                    class="w-3 h-3 me-2.5"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                                    />
                                </svg>
                                Dasshboard
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg
                                    class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 6 10"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m1 9 4-4-4-4"
                                    />
                                </svg>
                                <span
                                    class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                                    >Import User</span
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h2
                    class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white"
                >
                    Import User
                </h2>
                <div class="flex flex-col justify-between h-[85%]">
                    <div
                        class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4 mb-4"
                    >
                        <div
                            class="w-full p-6 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700"
                        >
                            <svg
                                class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-5h7.586l-.293.293a1 1 0 0 0 1.414 1.414l2-2a1 1 0 0 0 0-1.414l-2-2a1 1 0 0 0-1.414 1.414l.293.293H4V9h5a2 2 0 0 0 2-2Z"
                                    clip-rule="evenodd"
                                />
                            </svg>

                            <a href="#">
                                <h5
                                    class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"
                                >
                                    Import Data User
                                </h5>
                            </a>
                            <label
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white"
                                for="default_size"
                                >File Excel</label
                            >
                            <input
                                class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="default_size"
                                type="file"
                            />
                            <button
                                type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 float-right"
                            >
                                Import Excel
                            </button>
                        </div>
                    </div>
                    <footer
                        class="bg-white rounded-lg shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 dark:bg-gray-800 antialiased mb-2"
                    >
                        <p
                            class="mb-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0"
                        >
                            &copy; 2023
                            <a
                                href="https://flowbite.com/"
                                class="hover:underline"
                                target="_blank"
                                >Sie Web Regen</a
                            >. All rights reserved.
                        </p>
                    </footer>
                </div>
            </main>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
