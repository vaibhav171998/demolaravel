<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumbing Services</title>
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
    <section class="relative bg-cover bg-center h-96" style="background-image: url('https://source.unsplash.com/1600x900/?plumbing,tools');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white p-6">
                <h1 class="text-4xl md:text-6xl font-bold">Professional Plumbing Services</h1>
                <p class="mt-4 text-lg md:text-2xl">Reliable, efficient, and comprehensive plumbing solutions for your home and business.</p>
                <a href="#services" class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg">Explore Our Services</a>
            </div>
        </div>
    </section>

    <!-- About Our Plumbing Services -->
    <section id="about" class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">About Our Plumbing Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">Our team of experienced plumbers offers a wide range of plumbing services designed to meet all your needs. From emergency repairs to routine maintenance, we ensure quality, efficiency, and customer satisfaction in every job we undertake.</p>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Our Plumbing Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">We offer a comprehensive range of plumbing services to address any issues or projects you may have.</p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-3 sm:grid-cols-2">
                <!-- Service 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?pipe,repair" alt="Pipe Repair">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Pipe Repair & Replacement</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Expert pipe repair and replacement services to fix leaks and prevent water damage.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?bathroom,plumbing" alt="Bathroom Plumbing">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Bathroom Plumbing</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Comprehensive bathroom plumbing services, including installation, repair, and maintenance.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?water,heater" alt="Water Heater Installation">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Water Heater Installation</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Professional water heater installation and repair to ensure you have hot water when you need it.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?kitchen,plumbing" alt="Kitchen Plumbing">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Kitchen Plumbing</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Complete kitchen plumbing services, including sink installation, faucet repair, and more.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?drain,cleaning" alt="Drain Cleaning">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Drain Cleaning</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Expert drain cleaning services to keep your pipes flowing smoothly and prevent clogs.</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?emergency,plumbing" alt="Emergency Plumbing">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Emergency Plumbing</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">24/7 emergency plumbing services to handle any urgent issues that arise.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white">Need Reliable Plumbing Services?</h2>
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
