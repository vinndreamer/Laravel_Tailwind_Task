<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jetstream Demo Application</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900">Jetstream Demo</h1>
            <nav class="space-x-4">
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-700 hover:text-gray-900">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-gray-900">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm font-semibold text-gray-700 hover:text-gray-900">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl text-center">
            <h2 class="text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                Welcome to the Jetstream Demo Application
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-xl mx-auto">
                Explore the power of Laravel Jetstream with this modern demo app showcasing authentication, Livewire components, and Tailwind CSS styling.
            </p>
            <div class="space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-8 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                            Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-8 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-8 py-3 bg-gray-200 text-gray-900 font-semibold rounded-lg shadow hover:bg-gray-300 transition">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </main>

    <footer class="bg-white shadow mt-12">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-500 text-sm">
            &copy; 2025 Jetstream Demo Application. All rights reserved.
        </div>
    </footer>

</body>
</html>
