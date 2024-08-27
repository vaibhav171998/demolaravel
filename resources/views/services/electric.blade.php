<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical Services</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">

    <!-- Navbar -->
    <header class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{url('/')}}" class="text-2xl font-bold text-red-500">Home Services</a>
                </div>
                <div class="hidden sm:flex sm:items-center">
                    <a href="{{url('/')}}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Home</a>
                    <a href="services" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Services</a>
                    <a href="about" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">About</a>
                    <a href="contact" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Contact</a>
                </div>
                <div class="hidden sm:flex sm:items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-96" style="background-image: url('https://source.unsplash.com/1600x900/?electrical,tools');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white p-6">
                <h1 class="text-4xl md:text-6xl font-bold">Professional Electrical Services</h1>
                <p class="mt-4 text-lg md:text-2xl">Safe, reliable, and efficient electrical solutions for your home and business.</p>
                <a href="#services" class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg">Explore Our Services</a>
            </div>
        </div>
    </section>

    <!-- About Our Electrical Services -->
    <section id="about" class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">About Our Electrical Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">With years of experience and a team of certified electricians, we offer a wide range of electrical services designed to meet all your needs. From simple repairs to complex installations, we ensure safety, quality, and efficiency in every job.</p>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Our Electrical Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">We offer a comprehensive range of electrical services to meet your every need.</p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-3 sm:grid-cols-2">
                <!-- Service 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?wiring" alt="Electrical Wiring">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Electrical Wiring</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Expert wiring solutions for new installations and renovations.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?lighting" alt="Lighting Installation">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Lighting Installation</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Professional installation of indoor and outdoor lighting systems.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?circuit,breaker" alt="Circuit Breaker Upgrades">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Circuit Breaker Upgrades</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Upgrade your electrical panel for enhanced safety and performance.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?generator" alt="Generator Installation">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Generator Installation</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Reliable generator installation for continuous power supply.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?maintenance" alt="Electrical Maintenance">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Electrical Maintenance</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Routine maintenance to keep your electrical systems running smoothly.</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?security,system" alt="Security System Installation">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Security System Installation</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Comprehensive security system installation for peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white">Need Reliable Electrical Services?</h2>
            <p class="mt-4 text-blue-200">Contact us today to schedule an appointment or to learn more about our services.</p>
            <a href="#contact" class="mt-6 inline-block bg-white hover:bg-gray-100 text-blue-600 font-semibold py-3 px-8 rounded-lg">Contact Us</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 Home Services. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
