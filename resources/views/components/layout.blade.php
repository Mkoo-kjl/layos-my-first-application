<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'My Site' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col font-sans text-gray-800">

    <!-- Navbar -->
    <header class="bg-gradient-to-r from-indigo-600 to-purple-600 shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- Logo / Brand -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-extrabold text-white tracking-tight hover:text-gray-200">
                        ✨My Website
                    </a>
                </div>

                <!-- Navigation Links -->
                <nav>
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                </nav>


                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-600 hover:text-indigo-600 focus:outline-none" id="menu-toggle">
                        <!-- Heroicon: Menu -->
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav class="md:hidden hidden px-4 pb-4 space-y-2" id="mobile-menu">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 shadow-xl rounded-lg">
                <h1 class="text-3xl font-extrabold text-gray-900 mb-4">
                    {{ $heading }}
                </h1>
                <div class="text-gray-700 leading-relaxed">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 py-6 mt-8 border-t">
        <div class="max-w-7xl mx-auto text-center text-sm text-gray-500">
            © {{ date('Y') }} My Site. All rights reserved.
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const btn = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
