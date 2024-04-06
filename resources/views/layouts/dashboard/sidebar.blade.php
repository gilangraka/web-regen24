<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-[#111823] md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-[#0D2244] dark:bg-gray-800">
        <ul class="space-y-2">
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="{{ url('/dashboard') }}"
                    class="{{ request()->is('dashboard') ? 'flex items-center p-2 text-base font-medium text-white rounded-lg bg-[#203D6F] dark:hover:bg-gray-700 group' : 'flex items-center p-2 text-base font-medium text-gray-300 hover:text-white rounded-lg dark:text-white hover:bg-[#203D6F] dark:hover:bg-gray-700 group' }}">
                    <svg class="w-6 h-6 text-gray-300 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/dashboard/view_camin') }}"
                    class="{{ request()->is('dashboard/view_camin') ? 'flex items-center p-2 text-base font-medium text-white rounded-lg bg-[#203D6F] dark:hover:bg-gray-700 group' : 'flex items-center p-2 text-base font-medium text-gray-300 hover:text-white rounded-lg dark:text-white hover:bg-[#203D6F] dark:hover:bg-gray-700 group' }}">
                    <svg class="w-6 h-6 text-gray-50 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">Edit Camin</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/dashboard/view_user') }}"
                    class="{{ request()->is('dashboard/view_user') ? 'flex items-center p-2 text-base font-medium text-white rounded-lg bg-[#203D6F] dark:hover:bg-gray-700 group' : 'flex items-center p-2 text-base font-medium text-gray-300 hover:text-white rounded-lg dark:text-white hover:bg-[#203D6F] dark:hover:bg-gray-700 group' }}">
                    <svg class="w-6 h-6 text-gray-50 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">Import & View User</span>
                </a>
            </li>

        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li class="text-white"><span>Status Vote :</span> <span id="statusVote"></span></li>
            <li>
                <button id="setVote" onclick="setStatusVote()"
                    class="flex items-center p-2 text-white font-medium w-full bg-[#203D6F] justify-center rounded-lg transition hover:text-black hover:bg-white">SET
                    STATUS
                    VOTE</button>
            </li>
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <form action="{{ url('/logoutAction') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center p-2 text-base font-medium text-red-500 hover:text-red-400 rounded-lg transition duration-75 hover:bg-[#203D6F] dark:hover:bg-gray-700 dark:text-white group">
                        <svg class="flex-shrink-0 w-6 h-6 text-red-500 transition duration-75 dark:text-red-400 group-hover:text-red-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                        </svg>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
    const statusVote = document.getElementById("statusVote");
    const setVote = document.getElementById("setVote");

    function getStatusVote() {
        $.ajax({
            url: "{{ url('api/get_vote') }}",
            type: "GET",
            success: function(data) {
                if (data[0]["status"] == 1) {
                    statusVote.innerHTML = "AKTIF";
                    statusVote.classList.remove("text-red-500");
                    statusVote.classList.add("text-green-300");
                } else {
                    statusVote.innerHTML = "NONAKTIF";
                    statusVote.classList.remove("text-green-300");
                    statusVote.classList.add("text-red-500");
                }
            },
        });
    }

    function setStatusVote() {
        $.ajax({
            url: "{{ url('api/set_vote') }}",
            type: "GET",
            success: function() {
                setVote.classList.add("invisible");
                setTimeout(() => {
                    getStatusVote()
                    setVote.classList.remove("invisible");
                }, 500);
            },
        });
    }
    getStatusVote();
</script>
