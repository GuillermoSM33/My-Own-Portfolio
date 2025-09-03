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

<!-- Contact -->
<section class="transition-all duration-300">
  <h2 class="font-semibold text-lg text-blue-600 mb-2">Contact</h2>

  <div class="text-sm space-y-2 text-gray-700">
    <a href="tel:+52{{ preg_replace('/\D/','',$phone) }}"
       class="block hover:text-blue-600 transition">
      📞 {{ $phone }}
    </a>

    <a href="mailto:{{ $email }}"
       class="block hover:text-blue-600 transition">
      ✉️ {{ $email }}
    </a>

    <p class="block">📍 {{ $location }}</p>
  </div>

  <!-- Botón dinámico -->
  <div class="mt-4">
    @if(request()->routeIs('home'))
      <a href="{{ route('contact') }}"
         class="inline-block px-5 py-2 text-sm font-medium bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transform hover:-translate-y-0.5 transition-all duration-300">
        Ir a Formulario de Contacto
      </a>
    @elseif(request()->routeIs('contact'))
      <a href="{{ route('home') }}"
         class="inline-block px-5 py-2 text-sm font-medium bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600 transform hover:-translate-y-0.5 transition-all duration-300">
        Regresar al Inicio
      </a>
    @endif
  </div>
</section>
