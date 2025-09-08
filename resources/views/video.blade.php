<x-base title="Video Reference">

    <section class="flex flex-col gap-4 mt-10">
        <h2 class="text-2xl font-bold text-red-600">Video Reference</h2>

        {{-- Ejemplo de un video embed desde YouTube --}}
        <div class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
                    hover:shadow-lg hover:border-red-400 transition transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Introducing New Changes Into Inventory_TI_APP
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Video introducing new updates about Inventory_TI_APP.
            </p>
            <div class="mt-4 aspect-video">
                <iframe class="w-full h-full rounded-xl"
                    src="https://www.youtube.com/embed/YVadqrQL0xc?si=26JIJ4l11Z18OC72" title="YouTube video player"
                    title="Introduction for updates"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        {{-- Otro ejemplo --}}
        <div class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
                    hover:shadow-lg hover:border-red-400 transition transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Project For Hackatón 2025
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Introducing Project For Hackaton 2025.
            </p>
            <div class="mt-4 aspect-video">
                <iframe class="w-full h-full rounded-xl"
                    src="https://www.youtube.com/embed/Yes6USckvYI?si=Ng8_aiBSmLkASKSX" title="YouTube video player"
                    title="Project For Hackatón 2025"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

    </section>

</x-base>
