<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
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
</head>

<body class="bg-gradient-to-t from-[#508DB7] min-h-screen">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="flex items-center gap-2 m-4">
            <img src="../../public/logo-polines 2.png" alt="" class="w-[50px]" />
            <img src="../../public/polines 1.png" alt="" class="w-[150px]" />
            <img src="../../public/pcc 1.png" alt="" class="w-[40px]" />
        </div>

        <div class="px-8">
            <h1 class="text-[#0D2244] text-center font-bold text-lg md:text-xl lg:text-2xl my-8">
                Pemilihan Calon Administrator UKM PCC 2023/2024
            </h1>
            <div class="grid md:flex gap-4">
                <div class="w-full">
                    <div class="bg-gradient-to-b from-[#D4E9F7] to-white rounded-2xl shadow-lg shadow-[#4A6695]">
                        <div class="p-4">
                            <img src="https://th.bing.com/th/id/OIP.tjUOUBGnthmW762mbRAFdQHaE8?rs=1&pid=ImgDetMain"
                                alt="" class="mx-auto rounded-full w-[100px] h-[100px] object-cover" />
                            <div class="w-full">
                                <div class="w-8/12 mx-auto rounded-full border-2 border-[#4A6695] my-2 p-1">
                                    <p class="text-center text-[#0D2244] font-bold text-lg">
                                        Camin1
                                    </p>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-center text-lg">Visi</h3>
                                <p class="my-2 font-semibold text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit nobis consectetur omnis repellendus magni eveniet a
                                    est iure sunt esse!
                                </p>
                                <h3 class="font-bold text-center text-lg">Misi</h3>
                                <p class="my-2 font-semibold text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Magni reprehenderit, molestias corrupti tenetur reiciendis
                                    voluptas veniam possimus nobis amet dignissimos.
                                </p>
                                <div class="w-full mx-auto mt-4">
                                    <button id="camin1"
                                        class="text-lg text-white bg-[#46A5FF] hover:bg-[#3c9ffc] font-semibold p-2 px-20 rounded-full mx-auto block">
                                        VOTE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="bg-gradient-to-b from-[#D4E9F7] to-white rounded-2xl shadow-lg shadow-[#4A6695]">
                        <div class="p-4">
                            <img src="https://th.bing.com/th/id/OIP.tjUOUBGnthmW762mbRAFdQHaE8?rs=1&pid=ImgDetMain"
                                alt="" class="mx-auto rounded-full w-[100px] h-[100px] object-cover" />
                            <div class="w-full">
                                <div class="w-8/12 mx-auto rounded-full border-2 border-[#4A6695] my-2 p-1">
                                    <p class="text-center text-[#0D2244] font-bold text-lg">
                                        Camin2
                                    </p>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-center text-lg">Visi</h3>
                                <p class="my-2 font-semibold text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit nobis consectetur omnis repellendus magni eveniet a
                                    est iure sunt esse!
                                </p>
                                <h3 class="font-bold text-center text-lg">Misi</h3>
                                <p class="my-2 font-semibold text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Magni reprehenderit, molestias corrupti tenetur reiciendis
                                    voluptas veniam possimus nobis amet dignissimos.
                                </p>
                                <div class="w-full mx-auto mt-4">
                                    <button id="camin2"
                                        class="text-lg text-white bg-[#46A5FF] hover:bg-[#3c9ffc] font-semibold p-2 px-20 rounded-full mx-auto block">
                                        VOTE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="bg-gradient-to-b from-[#D4E9F7] to-white rounded-2xl shadow-lg shadow-[#4A6695]">
                        <div class="p-4">
                            <img src="https://th.bing.com/th/id/OIP.tjUOUBGnthmW762mbRAFdQHaE8?rs=1&pid=ImgDetMain"
                                alt="" class="mx-auto rounded-full w-[100px] h-[100px] object-cover" />
                            <div class="w-full">
                                <div class="w-8/12 mx-auto rounded-full border-2 border-[#4A6695] my-2 p-1">
                                    <p class="text-center text-[#0D2244] font-bold text-lg">
                                        Camin3
                                    </p>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-center text-lg">Visi</h3>
                                <p class="my-2 font-semibold text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Suscipit nobis consectetur omnis repellendus magni eveniet a
                                    est iure sunt esse!
                                </p>
                                <h3 class="font-bold text-center text-lg">Misi</h3>
                                <p class="my-2 font-semibold text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Magni reprehenderit, molestias corrupti tenetur reiciendis
                                    voluptas veniam possimus nobis amet dignissimos.
                                </p>
                                <div class="w-full mx-auto mt-4">
                                    <button id="camin3"
                                        class="text-lg text-white bg-[#46A5FF] hover:bg-[#3c9ffc] font-semibold p-2 px-20 rounded-full mx-auto block">
                                        VOTE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-white text-center font-semibold my-4">
                Panitia Regen PCC &copy; 2024
            </h3>
        </div>

        <footer class="my-4">
            <h3 class="text-white font-semibold">#ShareYourKnowLedge</h3>
        </footer>
    </div>

    <script>
        const camin1 = document.getElementById("camin1");
        camin1.addEventListener("click", () => {
            showConfirmationDialog("camin1");
        });

        const camin2 = document.getElementById("camin2");
        camin2.addEventListener("click", () => {
            showConfirmationDialog("camin2");
        });

        const camin3 = document.getElementById("camin3");
        camin3.addEventListener("click", () => {
            showConfirmationDialog("camin3");
        });

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
                    swal("Berhasil memilih!", {
                        icon: "success",
                    });
                } else {
                    swal("Pilihan telah dibatalkan!");
                }
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
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
        getVote();
        setInterval(() => {
            getVote();
        }, 7500);
    </script>
</body>

</html>
