<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-t from-[#508DB7] min-h-screen">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="flex items-center gap-2 m-4">
            <img src="{{ asset('assets/img/static/polines.png') }}" class="h-10 md:h-12" alt="polines" />
            <img src="{{ asset('assets/img/static/pcc.png') }}" class="h-10 md:h-12" alt="pcc" />
        </div>

        <div>
            <h1 class="text-[#0D2244] text-center font-bold text-lg md:text-xl lg:text-2xl my-8">
                Pemilihan Calon Administrator UKM PCC 2023/2024
            </h1>

            <div class="md:w-8/12 bg-[#203D6F] text-white text-center rounded-2xl p-12 mx-auto">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-6xl my-4 tracking-tight md:tracking-wide">
                    TERIMA KASIH
                </h1>
                <p class="my-4 tracking-tight md:tracking-wide md:text-lg">
                    Anda akan segera dialihkan ke halaman login
                </p>
            </div>
            <h3 class="text-white text-center font-semibold my-4">
                Panitia Regen PCC &copy; 2024
            </h3>
        </div>
        <form id="logout-form" action="{{ url('/logoutAction') }}" method="POST">
            @csrf
            <input type="submit" class="hidden">
        </form>

        <footer class="mt-6">
            <h3 class="text-white font-semibold">#ShareYourKnowLedge</h3>
        </footer>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('logout-form').submit();
        }, 2000);
    </script>
</body>

</html>
