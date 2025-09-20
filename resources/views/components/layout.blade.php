<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'My Site' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="animated-gradient min-h-screen flex flex-col font-sans text-gray-800">


    <!-- Navbar -->
    <header class="bg-gradient-to-r from-indigo-600 to-purple-600 shadow-md sticky top-0 z-50 transition duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- Logo / Brand -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-extrabold text-white tracking-tight hover:text-yellow-300 transition duration-300 ease-in-out transform hover:scale-105">
                        ✨ My Website
                    </a>
                </div>

                <!-- Navigation Links -->
                <nav class="hidden md:flex space-x-6">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" class="text-white hover:text-yellow-300 focus:outline-none transition duration-300" id="menu-toggle">
                        <!-- Heroicon: Menu -->
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav class="md:hidden hidden px-4 pb-4 space-y-2 bg-indigo-700 text-white rounded-b-lg shadow-lg" id="mobile-menu">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 shadow-xl rounded-lg transition duration-500 hover:shadow-2xl">
                <h1 class="text-3xl font-extrabold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="inline-block w-2 h-8 bg-gradient-to-b from-indigo-600 to-purple-600 rounded"></span>
                    {{ $heading }}
                </h1>
                <div class="text-gray-700 leading-relaxed animate-fadeIn">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-100 to-gray-200 py-6 mt-8 border-t shadow-inner">
        <div class="max-w-7xl mx-auto text-center text-sm text-gray-600">
            © {{ date('Y') }} My Site. All rights reserved. | Built with ❤️ using Laravel & TailwindCSS
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const btn = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('animate-slideDown');
        });
    </script>

    <!-- Extra Animations -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.6s ease-in-out;
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slideDown {
            animation: slideDown 0.3s ease-in-out;
        }
    
        .animated-gradient {
        background: linear-gradient(-45deg, #6366f1, #8b5cf6, #ec4899, #facc15);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
     }
    

    </style>

</body>
</html>
