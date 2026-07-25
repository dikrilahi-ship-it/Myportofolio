<section id="hobbies" class="py-24 bg-slate-900" data-aos="fade-up">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-16">

            <span class="inline-block px-5 py-2 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-sm font-semibold uppercase tracking-widest">
                My Hobbies
            </span>

            <h2 class="text-5xl font-bold mt-6 text-white">
                Hobi Saya
            </h2>

            <p class="text-gray-400 mt-5 max-w-2xl mx-auto leading-8">
                Selain belajar pemrograman, saya memiliki beberapa hobi yang
                membantu saya tetap kreatif, fokus, dan terus berkembang.
            </p>

        </div>

        <!-- Card -->

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Gaming -->
            <div
                onclick="openGameModal()"
                class="cursor-pointer bg-slate-800 rounded-2xl p-8 border border-slate-700 hover:border-cyan-500 hover:-translate-y-2 duration-500">

                <div class="text-5xl mb-6 text-center">
                    🎮
                </div>

                <h3 class="text-2xl font-bold text-center mb-4">
                    Gaming
                </h3>

                <p class="text-gray-400 text-center leading-7">
                    Klik untuk melihat game favorit saya.
                </p>

            </div>

            <!-- Musik -->
            <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 hover:border-cyan-500 hover:-translate-y-2 duration-500">

                <div class="text-5xl mb-6 text-center">
                    🎧
                </div>

                <h3 class="text-2xl font-bold text-center mb-4">
                    Mendengar Musik
                </h3>

                <p class="text-gray-400 text-center leading-7">
                    Mendengarkan musik saat belajar atau coding agar lebih fokus
                    dan suasana menjadi lebih nyaman.
                </p>

            </div>

            <!-- Design -->
            <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 hover:border-cyan-500 hover:-translate-y-2 duration-500">

                <div class="text-5xl mb-6 text-center">
                    🎨
                </div>

                <h3 class="text-2xl font-bold text-center mb-4">
                    Design
                </h3>

                <p class="text-gray-400 text-center leading-7">
                    Membuat desain poster, konten media sosial, dan antarmuka
                    website menggunakan Canva dan Figma.
                </p>

            </div>

            <!-- Belajar -->
            <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 hover:border-cyan-500 hover:-translate-y-2 duration-500">

                <div class="text-5xl mb-6 text-center">
                    📚
                </div>

                <h3 class="text-2xl font-bold text-center mb-4">
                    Belajar
                </h3>

                <p class="text-gray-400 text-center leading-7">
                    Selalu mempelajari teknologi baru terutama Laravel,
                    Tailwind CSS, PHP, JavaScript, dan pengembangan website.
                </p>

            </div>

        </div>

    </div>

</section>
<!-- Modal Game -->
<div id="gameModal"
    class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden items-center justify-center z-50">

    <div class="bg-slate-900 w-11/12 max-w-5xl rounded-3xl border border-cyan-500 shadow-2xl p-8 relative">

        <!-- Tombol Tutup -->
        <button
            onclick="closeGameModal()"
            class="absolute top-5 right-6 text-3xl hover:text-red-500 transition">

            &times;

        </button>

        <h2 class="text-4xl font-bold text-center mb-3">

            🎮 Game Favorit Saya

        </h2>

        <p class="text-center text-gray-400 mb-10">

            Berikut beberapa game yang sering saya mainkan.

        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Game 1 -->
            <div class="bg-slate-800 rounded-2xl overflow-hidden hover:-translate-y-2 duration-300">

                <img src="{{ asset('images/mlbb.png') }}"
                    class="w-full h-48 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-xl">

                        Mobile Legends

                    </h3>

                    <p class="text-gray-400 text-sm mt-2">

                        MOBA favorit untuk bermain bersama teman.

                    </p>

                </div>

            </div>

            <!-- Game 2 -->
            <div class="bg-slate-800 rounded-2xl overflow-hidden hover:-translate-y-2 duration-300">

                <img src="{{ asset('images/FF.png') }}"
                    class="w-full h-48 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-xl">

                        Free Fire

                    </h3>

                    <p class="text-gray-400 text-sm mt-2">

                        Game strategi dan multiplayer favorit saya.

                    </p>

                </div>

            </div>

            <!-- Game 3 -->
            <div class="bg-slate-800 rounded-2xl overflow-hidden hover:-translate-y-2 duration-300">

                <img src="{{ asset('images/WC4.jpg') }}"
                    class="w-full h-48 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-xl">

                        World Conqueror 4

                    </h3>

                    <p class="text-gray-400 text-sm mt-2">

                        Game perang dengan strategi yang menarik.

                    </p>

                </div>

            </div>

            <!-- Game 4 -->
            <div class="bg-slate-800 rounded-2xl overflow-hidden hover:-translate-y-2 duration-300">

                <img src="{{ asset('images/Minecraft.jpg') }}"
                    class="w-full h-48 object-cover">

                <div class="p-5">

                    <h3 class="font-bold text-xl">

                        Minecraft

                    </h3>

                    <p class="text-gray-400 text-sm mt-2">

                        Game sandbox untuk membangun dan berkreasi.

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>