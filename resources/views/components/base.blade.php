@props([
  'title' => 'Portfolio',
  'photo' => asset('yo_2.jpg'),
  'about' => "Technical Project Lead con experiencia entregando apps cloud-native en Azure/AWS.
Lidero equipos, defino arquitecturas escalables e integro autenticación segura con Entra ID.
Fuerte base en REST APIs, microservicios, CI/CD y despliegues con contenedores.",
  'skills' => [
    'Leadership & Agile/Scrum',
    'Azure Container Apps, Azure SQL, Blob Storage',
    'Static Web Apps',
    'Control de usuarios y accesos',
    'Testing / QA',
    'Microsoft Power Platform',
    'Atención a usuarios y training',
  ],
  'phone' => '9983187269',
  'email' => 'guillermo.jesus.garcia.canul@gmail.com',
  'location' => 'Cancún, Q. Roo, México',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="icon" href="/portfolio.ico" sizes="any">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
  </head>

  <body class="bg-[#FDFDFC] text-[#1b1b18] min-h-screen font-sans">
    <main class="w-full grid grid-cols-1 md:grid-cols-4 gap-6 p-4 md:p-8">

      <!-- COLUMNA IZQUIERDA -->
      <aside class="md:col-span-1 flex flex-col gap-6 md:sticky md:top-8 self-start">

        <!-- Foto -->
        <section class="mx-auto w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden shadow-[0_0_0_3px_rgba(59,130,246,0.5)] transform transition duration-500 hover:scale-105">
            <img src="{{ $photo }}" alt="Foto" class="w-full h-full object-cover">
        </section>

        <!-- About me -->
        <section class="p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition-all duration-300">
          <h2 class="font-semibold text-lg text-blue-600 mb-2">About me</h2>
          <p class="text-sm leading-snug text-[#706f6c] whitespace-pre-line">
            {{ $about }}
          </p>
        </section>

        <!-- Skills -->
        <section class="p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition-all duration-300">
          <h2 class="font-semibold text-lg text-blue-600 mb-2">Skills</h2>
          <ul class="text-sm grid gap-1 list-disc list-inside text-gray-800">
            @foreach ($skills as $skill)
              <li class="transition duration-200 hover:text-blue-500">{{ $skill }}</li>
            @endforeach
          </ul>
        </section>

        <!-- Contact (componente) -->
        <div class="p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition-all duration-300">
          <x-contact />
        </div>
      </aside>

      <!-- COLUMNA DERECHA -->
      <section class="md:col-span-3 flex flex-col gap-8">
        <!-- Header -->
            <header class="pb-6 border-b animate-fade-in">
            <!-- Nombre y Título -->
            <h1 class="text-3xl md:text-4xl font-bold leading-tight text-blue-600">
                Guillermo García Canul
            </h1>
            <p class="text-lg md:text-xl text-gray-700">
                TECHNICAL PROJECT LEAD | SOFTWARE ENGINEER
            </p>

            <!-- Contacto inline -->
            <div class="flex flex-wrap items-center gap-3 mt-4 text-sm text-gray-600">
                <a href="tel:+52{{ preg_replace('/\D/','',$phone) }}"
                class="hover:text-blue-600 transition">
                {{ $phone }}
                </a>
                <span class="opacity-40 hidden sm:inline">|</span>
                <a href="mailto:{{ $email }}"
                class="hover:text-blue-600 transition">
                {{ $email }}
                </a>
                <span class="opacity-40 hidden sm:inline">|</span>
                <span>{{ $location }}</span>
            </div>

            <!-- Botón dinámico -->
            <div class="mt-5">
                @if(request()->routeIs('home'))
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center px-5 py-2 text-sm font-medium bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transform hover:-translate-y-0.5 transition-all duration-300">
                    Ir a Formulario de Contacto
                </a>
                @elseif(request()->routeIs('contact'))
                <a href="{{ route('home') }}"
                    class="inline-flex items-center px-5 py-2 text-sm font-medium bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600 transform hover:-translate-y-0.5 transition-all duration-300">
                    Regresar al Inicio
                </a>
                @endif
            </div>
            </header>

        <!-- Slot dinámico -->
        <div class="animate-fade-up">
          {{ $slot }}
        </div>
      </section>
    </main>
  </body>
</html>
