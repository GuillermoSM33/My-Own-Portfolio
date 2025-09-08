<x-base title="More About Me">

    <!-- Header -->
    <header class="pb-4 border-b">
        <h1 class="text-3xl md:text-4xl font-bold leading-tight text-blue-600">Documentation</h1>
        <p class="text-[#706f6c]">
            Here you can explore my manuals, technical documents, and architecture notes.
        </p>
    </header>

    <!-- User Manuals -->
    <section class="flex flex-col gap-4 mt-6">
        <h2 class="text-2xl font-bold text-green-600">User Manuals</h2>

        <div
            class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
           hover:shadow-lg hover:border-green-400 transition transform hover:-translate-y-1">

            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Inventory TI APP — User Manual
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Detailed step-by-step guide for users of the Inventory TI platform (filters, records,
                assignments, Power BI reports).
            </p>

            <!-- Action Buttons -->
            <div class="flex gap-3 mt-4">
                <a href="{{ asset('docs/Manual De Usuario Inventory TI APP.pdf') }}" target="_blank"
                    class="px-4 py-2 text-sm font-medium bg-blue-500 text-white rounded-md shadow
                hover:bg-blue-600 transition">
                    Preview PDF
                </a>
                <a href="{{ asset('docs/Manual De Usuario Inventory TI APP.pdf') }}" download
                    class="px-4 py-2 text-sm font-medium border border-blue-500 text-blue-500 rounded-md
                hover:bg-blue-50 transition">
                    Download
                </a>
            </div>
        </div>
    </section>

    <!-- Cloud & DevOps -->
    <section class="flex flex-col gap-4 mt-10">
        <h2 class="text-2xl font-bold text-purple-600">Cloud & DevOps</h2>

        <!-- Docker -->
        <div
            class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
              hover:shadow-lg hover:border-purple-400 transition transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Deploying with Docker
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Guide on creating Docker images, configuring domains with Cloudflare/NameCheap,
                and deploying to AWS EC2 with Nginx and HTTPS.
            </p>

            <div class="flex gap-3 mt-4">
                <a href="{{ asset('docs/Cómo desplegar en docker.pdf') }}" target="_blank"
                    class="px-4 py-2 text-sm font-medium bg-blue-500 text-white rounded-md shadow
                hover:bg-blue-600 transition">
                    Preview PDF
                </a>
                <a href="{{ asset('docs/Cómo desplegar en docker.pdf') }}" download
                    class="px-4 py-2 text-sm font-medium border border-blue-500 text-blue-500 rounded-md
                hover:bg-blue-50 transition">
                    Download
                </a>
            </div>
        </div>

        <!-- Environment Deployment -->
        <div
            class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
              hover:shadow-lg hover:border-purple-400 transition transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Environment Deployment
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Full setup of a FastAPI + Vue.js + PostgreSQL environment with docker-compose,
                volumes, health-check endpoints, and orchestration.
            </p>

            <div class="flex gap-3 mt-4">
                <a href="{{ asset('docs/Despliegue De Ambientes.pdf') }}" target="_blank"
                    class="px-4 py-2 text-sm font-medium bg-blue-500 text-white rounded-md shadow
                hover:bg-blue-600 transition">
                    Preview PDF
                </a>
                <a href="{{ asset('docs/Despliegue De Ambientes.pdf') }}" download
                    class="px-4 py-2 text-sm font-medium border border-blue-500 text-blue-500 rounded-md
                hover:bg-blue-50 transition">
                    Download
                </a>
            </div>
        </div>

        <!-- Azure Architecture -->
        <div
            class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
              hover:shadow-lg hover:border-purple-400 transition transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Azure Architecture — Enterprise Migration
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Enterprise-level cloud migration plan with Azure Container Apps, ACR, SQL Database,
                Static Web Apps, Power BI Embedded, VNet, and Entra ID.
            </p>

            <div class="flex gap-3 mt-4">
                <a href="{{ asset('docs/Entorno de Azure.pdf') }}" target="_blank"
                    class="px-4 py-2 text-sm font-medium bg-blue-500 text-white rounded-md shadow
                hover:bg-blue-600 transition">
                    Preview PDF
                </a>
                <a href="{{ asset('docs/Entorno de Azure.pdf') }}" download
                    class="px-4 py-2 text-sm font-medium border border-blue-500 text-blue-500 rounded-md
                hover:bg-blue-50 transition">
                    Download
                </a>
            </div>
        </div>
    </section>

    <!-- Personal Projects -->
    <section class="flex flex-col gap-4 mt-10">
        <h2 class="text-2xl font-bold text-orange-600">Personal Projects</h2>

        <div
            class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
              hover:shadow-lg hover:border-orange-400 transition transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Creating My Portfolio
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                How I built and deployed my portfolio with Laravel, Nginx, DigitalOcean,
                SSL, and GitHub Actions for automated deployment.
            </p>

            <div class="flex gap-3 mt-4">
                <a href="{{ asset('docs/Creando Mi Portafolio.pdf') }}" target="_blank"
                    class="px-4 py-2 text-sm font-medium bg-blue-500 text-white rounded-md shadow
                hover:bg-blue-600 transition">
                    Preview PDF
                </a>
                <a href="{{ asset('docs/Creando Mi Portafolio.pdf') }}" download
                    class="px-4 py-2 text-sm font-medium border border-blue-500 text-blue-500 rounded-md
                hover:bg-blue-50 transition">
                    Download
                </a>
            </div>
        </div>
    </section>

    <!-- Productivity & Communication -->
    <section class="flex flex-col gap-4 mt-10">
        <h2 class="text-2xl font-bold text-gray-700">Productivity & Communication</h2>

        <div
            class="group p-5 rounded-lg border border-gray-200 shadow-sm bg-white
              hover:shadow-lg hover:border-gray-400 transition transform hover:-translate-y-1">
            <h3 class="font-semibold text-lg text-blue-600 group-hover:underline">
                Private Email Configuration
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Setting up NameCheap Private Email with Cloudflare and integrating SMTP with
                applications via NodeMailer.
            </p>

            <div class="flex gap-3 mt-4">
                <a href="{{ asset('docs/PrivateEmail.pdf') }}" target="_blank"
                    class="px-4 py-2 text-sm font-medium bg-blue-500 text-white rounded-md shadow
                hover:bg-blue-600 transition">
                    Preview PDF
                </a>
                <a href="{{ asset('docs/PrivateEmail.pdf') }}" download
                    class="px-4 py-2 text-sm font-medium border border-blue-500 text-blue-500 rounded-md
                hover:bg-blue-50 transition">
                    Download
                </a>
            </div>
        </div>
    </section>


</x-base>
