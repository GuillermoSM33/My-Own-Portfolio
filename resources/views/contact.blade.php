<x-base title="Contáctame">
  <header class="pb-4 border-b">
    <h1 class="text-3xl md:text-4xl font-bold leading-tight text-blue-600">Contacto</h1>
    <p class="text-[#706f6c]">¿Tienes un proyecto? Escríbeme y te respondo.</p>
  </header>

  <section class="mt-6">
    <form action="#" method="post"
          class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 rounded-xl border border-gray-200 shadow-sm bg-white transition duration-300 hover:shadow-lg hover:border-blue-400 hover:-translate-y-1 transform">
      @csrf

      <!-- Nombre -->
      <div class="md:col-span-1">
        <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
        <input type="text" name="name"
               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
               placeholder="Tu nombre">
      </div>

      <!-- Email -->
      <div class="md:col-span-1">
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" name="email"
               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
               placeholder="tucorreo@dominio.com">
      </div>

      <!-- Mensaje -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
        <textarea name="message" rows="5"
                  class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none transition resize-none"
                  placeholder="Cuéntame sobre tu proyecto"></textarea>
      </div>

      <!-- Botón -->
      <div class="md:col-span-2 flex justify-end">
        <button type="submit"
                class="px-5 py-2 font-medium border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-500 hover:text-white transition-all duration-300">
          Enviar
        </button>
      </div>
    </form>
  </section>
</x-base>
