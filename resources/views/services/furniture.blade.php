<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture & POP Interior Services</title>
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
    <section class="relative bg-cover bg-center h-96" style="background-image: url('https://source.unsplash.com/1600x900/?furniture,interior');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white p-6">
                <h1 class="text-4xl md:text-6xl font-bold">Furniture & POP Interior Services</h1>
                <p class="mt-4 text-lg md:text-2xl">Transform your space with our bespoke furniture designs and expert POP interior solutions.</p>
                <a href="#services" class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg">Explore Our Services</a>
            </div>
        </div>
    </section>

    <!-- About Our Furniture & POP Interior Services -->
    <section id="about" class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">About Our Furniture & POP Interior Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">Our team of skilled artisans and designers specialize in creating custom furniture pieces and POP interiors that perfectly align with your aesthetic vision and functional needs. Whether it's for your home or office, we ensure that every detail is meticulously crafted to meet your expectations.</p>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Our Furniture & POP Interior Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">We offer a range of services to help you create the perfect interior space, tailored to your style and needs.</p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-3 sm:grid-cols-2">
                <!-- Service 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?custom,furniture" alt="Custom Furniture Design">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Custom Furniture Design</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">We create custom furniture pieces that are both functional and stylish, designed to fit your unique space.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?pop,ceiling" alt="POP Ceiling Designs">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">POP Ceiling Designs</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Enhance the beauty of your interiors with our innovative POP ceiling designs, tailored to your style preferences.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?modular,kitchen" alt="Modular Kitchen Installation">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Modular Kitchen Installation</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Our modular kitchen solutions are designed to maximize space and enhance the functionality of your cooking area.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?woodwork,interior" alt="Woodwork & Carpentry">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Woodwork & Carpentry</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Expert woodwork and carpentry services to create bespoke furniture, cabinetry, and more.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?interior,design" alt="Interior Design Consultation">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Interior Design Consultation</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Collaborate with our interior design experts to create a space that reflects your style and meets your needs.</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?living,room" alt="Living Room Makeovers">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Living Room Makeovers</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Transform your living room into a stylish and comfortable space with our makeover services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white">Ready to Transform Your Space?</h2>
            <p class="mt-4 text-blue-200">Contact us today to discuss your furniture and POP interior needs, and let us help you bring your vision to life.</p>
            <a href="#contact" class="mt-6 inline-block bg-white hover:bg-gray-100 text-blue-600 font-semibold py-3 px-8 rounded-lg">Get in Touch</a>
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
