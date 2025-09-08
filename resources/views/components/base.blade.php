@props([
    'title' => 'Portfolio',
    'photo' => asset('yo_2.jpg'),
    'about' => "Technical Project Lead with experience delivering cloud-native apps on Azure/AWS.
I lead teams, define scalable architectures, and integrate secure authentication with Entra ID.
Strong foundation in REST APIs, microservices, CI/CD, and container deployments.",
    'skills' => [
        'Leadership & Agile/Scrum',
        'Azure Container Apps, Azure SQL, Blob Storage',
        'Static Web Apps',
        'User and Access Management',
        'Testing / QA',
        'Microsoft Power Platform',
        'User Support and Training',
    ],
    'phone' => '9983187269',
    'email' => 'guillermo.jesus.garcia.canul@gmail.com',
    'location' => 'Cancún, Q. Roo, Mexico',
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

        <!-- RIGHT COLUMN (Name + Content) -->
        <section class="md:col-span-3 flex flex-col gap-8 order-1 md:order-2">
            <!-- Header -->
            <header class="pb-6 border-b animate-fade-in flex justify-between items-center">
                <div>
                    <!-- Name and Title -->
                    <h1 class="text-3xl md:text-4xl font-bold leading-tight text-blue-600">
                        Guillermo García Canul
                    </h1>
                    <p class="text-lg md:text-xl text-gray-700">
                        TECHNICAL PROJECT LEAD | SOFTWARE ENGINEER
                    </p>

                    <!-- Inline Contact -->
                    <div class="flex flex-wrap items-center gap-3 mt-4 text-sm text-gray-600">
                        <a href="tel:+52{{ preg_replace('/\D/', '', $phone) }}" class="hover:text-blue-600 transition">
                            {{ $phone }}
                        </a>
                        <span class="opacity-40 hidden sm:inline">|</span>
                        <a href="mailto:{{ $email }}" class="hover:text-blue-600 transition">
                            {{ $email }}
                        </a>
                        <span class="opacity-40 hidden sm:inline">|</span>
                        <span>{{ $location }}</span>
                    </div>
                </div>

                <!-- Hamburger Menu (Mobile) -->
                <button id="menu-btn"
                    class="md:hidden p-2 rounded-md text-blue-600 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </header>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex gap-6 text-gray-700 font-medium">
                <a href="/" class="hover:text-blue-600">Projects</a>
                <a href="/more" class="hover:text-blue-600">Documentation</a>
                <a href="/video" class="hover:text-blue-600">Videos</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </nav>

            <!-- Mobile Menu -->
            <nav id="mobile-menu" class="hidden flex-col gap-3 mt-3 bg-white border rounded-lg shadow-md p-4 md:hidden">
                <a href="/"
                    class="block w-full px-4 py-2 text-center rounded-md hover:bg-gray-100 hover:text-blue-600 transition">
                    Projects
                </a>
                <a href="/more"
                    class="block w-full px-4 py-2 text-center rounded-md hover:bg-gray-100 hover:text-blue-600 transition">
                    Documentation
                </a>
                <a href="/video"
                    class="block w-full px-4 py-2 text-center rounded-md hover:bg-gray-100 hover:text-blue-600 transition">
                    Videos
                </a>
                <a href="/contact"
                    class="block w-full px-4 py-2 text-center rounded-md hover:bg-gray-100 hover:text-blue-600 transition">
                    Contact
                </a>
            </nav>

            <!-- Slot -->
            <div class="animate-fade-up">
                {{ $slot }}
            </div>
        </section>

        <!-- LEFT COLUMN (Aside) -->
        <aside class="md:col-span-1 flex flex-col gap-6 order-2 md:order-1 md:sticky md:top-8 self-start">

            <!-- Photo -->
            <section
                class="mx-auto w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden shadow-[0_0_0_3px_rgba(59,130,246,0.5)] transform transition duration-500 hover:scale-105">
                <img src="{{ $photo }}" alt="Profile Photo" class="w-full h-full object-cover">
            </section>

            <!-- About me -->
            <section class="p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition-all duration-300">
                <h2 class="font-semibold text-lg text-blue-600 mb-2">About Me</h2>
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

            <!-- Contact (component) -->
            <div class="p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition-all duration-300">
                <x-contact />
            </div>
        </aside>
    </main>


    <script>
        document.getElementById('menu-btn').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>
