<section id="skills" class="py-24 bg-slate-950" data-aos="fade-up">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <p class="text-cyan-400 uppercase tracking-widest">
                My Skills
            </p>

            <h2 class="text-4xl font-bold mt-3">

                Skill & Teknologi

            </h2>

        </div>

        <div class="grid md:grid-cols-2 gap-8">

            @php

            $skills = [

                ['Laravel',90],
                ['PHP',85],
                ['Tailwind CSS',90],
                ['MySQL',80],
                ['JavaScript',70],
                ['HTML & CSS',95]

            ];

            @endphp

            @foreach($skills as $skill)

            <div class="bg-slate-900 rounded-2xl p-6 border border-slate-800">

                <div class="flex justify-between mb-3">

                    <span class="font-semibold">

                        {{ $skill[0] }}

                    </span>

                    <span class="text-cyan-400">

                        {{ $skill[1] }}%

                    </span>

                </div>

                <div class="w-full h-3 bg-slate-700 rounded-full overflow-hidden">

                    <div
                        class="h-full bg-cyan-500 rounded-full"
                        style="width: {{ $skill[1] }}%">

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>