<!DOCTYPE html>
<html lang="en">
<head>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
    AOS.init({
        duration:900,
        once:true,
    });
    </script>
    <link
    href="https://unpkg.com/aos@2.3.4/dist/aos.css"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dzikri Portfolio</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-950 text-white font-[Poppins]">
        <!-- Modal -->
        <div
            id="alertModal"
            class="fixed inset-0 z-[999] hidden items-center justify-center bg-black/60 backdrop-blur-sm">

            <div
                class="w-[400px] rounded-2xl bg-gray-900 border border-gray-700 p-6 shadow-2xl">

                <h2 class="text-xl font-bold text-white mb-3">
                    ⚠️ Peringatan
                </h2>

                <p id="alertMessage" class="text-gray-300">
                    Pesan
                </p>

                <div class="mt-6 flex justify-end">

                    <button
                        onclick="closeAlert()"
                        class="rounded-lg bg-amber-500 px-5 py-2 text-white hover:bg-amber-600">

                        OK

                    </button>

                </div>

            </div>

        </div>
            <script>

            function sendWhatsApp() {

                let nama = document.getElementById("name").value;
                let email = document.getElementById("email").value;
                let pesan = document.getElementById("message").value;

                if (nama === "" || email === "" || pesan === "") {
                    showalert("Silakan isi semua data terlebih dahulu.");
                    return;
                }

                let nomor = "6285353874645"; // Ganti dengan nomor WhatsApp kamu

                let text =
            `Halo Dzikrillahi,

            Saya menghubungi Anda melalui website portfolio.

            Nama : ${nama}
            Email : ${email}

            Pesan :
            ${pesan}

            Terima kasih.`;

                let url = `https://wa.me/${nomor}?text=${encodeURIComponent(text)}`;

                window.open(url, "_blank");
            }

            </script>
        @vite(['resources/css/app.css','resources/js/app.js'])

    <script>
        function openGameModal() {
            document.getElementById('gameModal').classList.remove('hidden');
            document.getElementById('gameModal').classList.add('flex');
        }

        function closeGameModal() {
            document.getElementById('gameModal').classList.add('hidden');
            document.getElementById('gameModal').classList.remove('flex');
        }
    </script>

</body>

    @yield('content')

</body>
</html>