<x-base title="Contact Me">
    <header class="pb-4 border-b">
        <h1 class="text-3xl md:text-4xl font-bold leading-tight text-blue-600">Contact</h1>
        <p class="text-[#706f6c]">Do you have a project in mind? Write to me and I’ll get back to you.</p>
    </header>

    <section class="mt-6">
        <form action="{{ route('contact.send') }}" method="POST"
            class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 rounded-xl border border-gray-200 shadow-sm bg-white transition duration-300 hover:shadow-lg hover:border-blue-400 hover:-translate-y-1 transform"
            novalidate>
            @csrf

            {{-- Success message --}}
            @if (session('success'))
                <div class="md:col-span-2">
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 border border-green-300">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            {{-- Error messages --}}
            @if ($errors->any())
                <div class="md:col-span-2">
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 border border-red-300">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <!-- Name -->
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" required minlength="2" maxlength="50" pattern="^[a-zA-Z\s\-']+$"
                    value="{{ old('name') }}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
                    placeholder="Your name">
            </div>

            <!-- Email -->
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required maxlength="100" value="{{ old('email') }}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none transition"
                    placeholder="youremail@domain.com">
            </div>

            <!-- Message -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea name="message" rows="5" required minlength="10" maxlength="1000"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none transition resize-none"
                    placeholder="Tell me about your project">{{ old('message') }}</textarea>
            </div>

            <!-- Honeypot (spam trap) -->
            <input type="text" name="website" style="display:none">

            <!-- Button -->
            <div class="md:col-span-2 flex justify-end">
                <button type="submit"
                    class="px-5 py-2 font-medium border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-500 hover:text-white transition-all duration-300">
                    Send
                </button>
            </div>
        </form>

    </section>
</x-base>
