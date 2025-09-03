<x-base title="Portfolio Guillermo">

  <!-- Experience -->
  <section class="flex flex-col gap-5">
    <h2 class="text-2xl font-bold text-blue-600">Experience</h2>

    <article
      class="group grid grid-cols-1 sm:grid-cols-6 gap-4 p-5 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition duration-300 hover:border-blue-400 bg-white hover:-translate-y-1 transform">
      <!-- Foto -->
      <div class="sm:col-span-2 rounded-md overflow-hidden aspect-[4/3]">
        <img src="{{ asset('exp1.jpg') }}" alt="Proyecto / Empresa"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-in-out">
      </div>

      <!-- Descripción -->
      <div class="sm:col-span-3 flex flex-col justify-center">
        <div class="font-semibold text-lg">
          Team Leader — Leader Developer
          <span class="text-xs text-gray-500"> · Jul 2025 – Hoy</span>
        </div>
        <ul class="list-disc list-inside text-sm leading-snug mt-2 space-y-1 text-gray-700">
          <li>
            Lideré el desarrollo de un sistema de control escolar (arquitectura, guía técnica, estrategia de implementación).
          </li>
        </ul>
      </div>

      <!-- Enlace -->
      <div class="sm:col-span-1 flex items-center justify-center">
        <a href="#"
           class="px-4 py-2 text-sm font-medium border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-500 hover:text-white transition-all duration-300">
            Visitar
        </a>
      </div>
    </article>

  </section>

  <!-- Educación -->
  <section class="flex flex-col gap-3 mt-8">
    <h2 class="text-2xl font-bold text-green-600">Education</h2>

    <div
      class="p-4 rounded-lg border border-gray-200 shadow-sm hover:shadow-md hover:border-green-400 transition duration-300 bg-white hover:-translate-y-1">
      <div class="font-medium">Information Technology Engineer — Multiplatform Software Development</div>
      <div class="text-sm text-gray-600">Universidad Tecnológica · 2024 – En curso</div>
    </div>

    <div
      class="p-4 rounded-lg border border-gray-200 shadow-sm hover:shadow-md hover:border-green-400 transition duration-300 bg-white hover:-translate-y-1">
      <div class="font-medium">Bachelor of Information Technology — MSD</div>
      <div class="text-sm text-gray-600">Universidad Tecnológica · 2022 – 2024</div>
    </div>
  </section>

</x-base>
