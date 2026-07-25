<section id="home" class="relative min-h-screen flex items-center bg-slate-950 overflow-hidden" data-aos="fade-up">

    <!-- Background -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-cyan-500/10 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-600/10 blur-[120px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-6 py-28 w-full">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Kiri -->
            <div>

                <span class="px-4 py-2 rounded-full bg-cyan-500/20 text-cyan-400 text-sm">
                    👋 Selamat Datang di Portofolio Saya
                </span>

                <h1 class="text-5xl lg:text-6xl font-extrabold mt-8 leading-tight">

                    Halo, Saya <br>

                    <span class="text-cyan-400">
                        Dzikrillahi
                    </span>

                    <br>

                    Nurul Azmi

                </h1>

                <h2 class="text-2xl text-gray-300 mt-5">
                    Full Stack Web Developer
                </h2>

                <p class="mt-6 text-gray-400 leading-8 max-w-xl">

                    Saya adalah mahasiswa Teknik Informatika yang memiliki
                    minat pada pengembangan website menggunakan Laravel,
                    Tailwind CSS, PHP, JavaScript dan MySQL.

                </p>

                <div class="flex flex-wrap gap-4 mt-10">

                    <a href="#projects"
                        class="px-8 py-4 rounded-xl bg-cyan-500 hover:bg-cyan-600 transition">

                        Lihat Project

                    </a>

                    <a href="#contact"
                        class="px-8 py-4 rounded-xl border border-cyan-500 hover:bg-cyan-500 transition">

                        Hubungi Saya

                    </a>

                </div>

            </div>

            <!-- Foto -->
            <div class="flex justify-center">

                <div class="relative">

                    <div class="absolute inset-0 bg-cyan-500 rounded-full blur-3xl opacity-20"></div>

                    <img
                        src="{{ asset('images/foto.jpg') }}"
                        alt="Foto"
                        class="relative w-72 h-72 lg:w-[370px] lg:h-[370px] rounded-full object-cover border-4 border-slate-800 shadow-2xl hover:scale-105 duration-500">

                </div>

            </div>

        </div>

    </div>

</section>