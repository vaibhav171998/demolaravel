<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Services</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Loader CSS */
        .dots-loader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
        }

        .dots-loader .dot {
            width: 25px;
            height: 25px;
            margin: 0 5px;
            background: linear-gradient(45deg, #ff0000, #00ff0d, #1b02ff);
            border-radius: 50%;
            animation: bounce 0.9s infinite alternate;
        }

        .dots-loader .dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .dots-loader .dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes bounce {
            to {
                opacity: 0.3;
                transform: translateY(-15px);
            }
        }

        /* Hide the loader when content is loaded */
        .content {
            display: none;
        }
    </style>

</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">

    <!-- Loader -->
    <div id="loader" class="dots-loader">
        <div class="dot text-center">L</div>
        <div class="dot text-center">O</div>
        <div class="dot text-center">A</div>
        <div class="dot text-center">D</div>
    </div>

    <!-- Navbar -->
    <header class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{url('/')}}" class="text-2xl font-bold text-red-500">Home Services</a>
                </div>
                <div class="hidden sm:flex sm:items-center">
                    <a href="{{url('/')}}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Home</a>
                    <a href="#services" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Services</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">About</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white px-4">Contact</a>
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
    <section class="relative bg-cover bg-center h-96" style="background-image: url('https://source.unsplash.com/1600x900/?home-services');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center">
            <div class="text-white">
                <h1 class="text-5xl font-bold">Reliable Home Services</h1>
                <p class="mt-4 text-lg">Get professional help for your home needs, from cleaning to repairs.</p>
                <a href="#services" class="mt-6 inline-block bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300">Explore Services</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Our Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">We offer a wide range of home services to meet your needs.</p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-3 sm:grid-cols-2">
                <!-- Service 1 -->
                <a href="/electric" class="block bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?cleaning" alt="Cleaning Service">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Electric Services</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Professional cleaning services to keep your home spotless.</p>
                    </div>
                </a>

                <!-- Service 2 -->
                <a href="/plumbing" class="block bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?repair" alt="Repair Service">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Plumbing Services</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Expert repair services to fix any issues in your home.</p>
                    </div>
                </a>

                <!-- Service 3 -->
                <a href="/furniture" class="block bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="https://source.unsplash.com/400x300/?plumbing" alt="Plumbing Service">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Furniture and PoP Interier</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Reliable plumbing services to solve any water-related issues.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="lg:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">About Us</h2>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">
                            At Home Services, we believe in delivering top-notch home solutions to make your life easier. 
                            With years of experience in the industry, our team of skilled professionals is dedicated to 
                            providing reliable and high-quality services, from cleaning to repairs. Our mission is to 
                            ensure customer satisfaction through excellence and trust.
                        </p>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">
                            We take pride in being your go-to provider for all your home service needs. Our commitment to 
                            quality and our passion for service make us the preferred choice for homeowners across the region. 
                            Experience the best with Home Services!
                        </p>
                        <a href="#contact" class="mt-6 inline-block bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300">
                            Contact Us
                        </a>
                    </div>
                    <div class="lg:w-1/2 mt-10 lg:mt-0">
                        <img class="w-full rounded-lg shadow-lg" src="https://source.unsplash.com/600x400/?home-service,team" alt="About Us Image">
                    </div>
                </div>
            </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">What Our Clients Say</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">Here’s what some of our happy customers have to say.</p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-3 sm:grid-cols-1">
                <!-- Testimonial 1 -->
                <div class="bg-gray-100 dark:bg-gray-900 p-8 rounded-lg shadow-lg">
                    <p class="text-gray-600 dark:text-gray-400">"The electric service was excellent! My home looks pretty with lights."</p>
                    <p class="mt-4 text-gray-800 dark:text-white font-semibold">- Jane Doe</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-100 dark:bg-gray-900 p-8 rounded-lg shadow-lg">
                    <p class="text-gray-600 dark:text-gray-400">"Amazing plumbing services. No more leaks and everything works perfectly."</p>
                    <p class="mt-4 text-gray-800 dark:text-white font-semibold">- John Smith</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-100 dark:bg-gray-900 p-8 rounded-lg shadow-lg">
                    <p class="text-gray-600 dark:text-gray-400">"Quick and reliable home repair service. They fixed everything in no time!"</p>
                    <p class="mt-4 text-gray-800 dark:text-white font-semibold">- Sarah Johnson</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-red-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h2 class="text-3xl font-bold">Ready to Experience the Best Home Services?</h2>
            <p class="mt-4">Contact us today to book your appointment and make your home shine!</p>
            <a href="#" class="mt-6 inline-block bg-white text-red-500 font-semibold py-3 px-8 rounded-full transition duration-300 hover:bg-gray-100">Get Started</a>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Contact Us</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">
                    Have any questions? We'd love to hear from you. Reach out to us using the form below, or give us a call.
                </p>
            </div>

            <div class="mt-12 lg:flex lg:justify-between">
                <!-- Contact Form -->
                <div class="lg:w-1/2 lg:pr-8">
                    <form class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Your Name">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Your Email">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="lg:w-1/2 lg:pl-8 mt-12 lg:mt-0">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Get in Touch</h3>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">
                            We're available Monday through Friday, 9 AM to 6 PM. Feel free to reach out to us via phone, email, or visit our office.
                        </p>
                        <div class="mt-6">
                            <p class="text-lg text-gray-800 dark:text-white"><i class="fas fa-phone-alt mr-2"></i> +1 (234) 567-890</p>
                            <p class="mt-2 text-lg text-gray-800 dark:text-white"><i class="fas fa-envelope mr-2"></i> contact@homeservices.com</p>
                            <p class="mt-2 text-lg text-gray-800 dark:text-white"><i class="fas fa-map-marker-alt mr-2"></i> 1234 Main St, Anytown, USA</p>
                        </div>
                        <div class="mt-6">
                            <iframe class="w-full rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.683962981131!2d-122.41941548432722!3d37.774929779759275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808d7d3e4b7b%3A0x8b7eb567c7d0c6b2!2s1234+Main+St%2C+San+Francisco%2C+CA+94105%2C+USA!5e0!3m2!1sen!2sin!4v1551234567890" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join as a Service Provider Section -->
    <section class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Join as a Service Provider</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">
                    Are you a skilled professional looking to offer your services? Join our network of trusted service providers and connect with customers in need of your expertise.
                </p>
            </div>

            <div class="mt-12 flex justify-center">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg max-w-2xl w-full">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white text-center mb-6">Get Started</h3>
                    <form>
                        <div class="mb-6">
                            <label for="provider-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" id="provider-name" name="provider-name" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Your Name">
                        </div>
                        <div class="mb-6">
                            <label for="provider-email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" id="provider-email" name="provider-email" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Your Email">
                        </div>
                        <div class="mb-6">
                            <label for="provider-service" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Service Type</label>
                            <input type="text" id="provider-service" name="provider-service" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="E.g., Plumbing, Cleaning">
                        </div>
                        <div class="mb-6">
                            <label for="provider-location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Location</label>
                            <input type="text" id="provider-location" name="provider-location" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Your City">
                        </div>
                        <div class="mb-6">
                            <label for="provider-experience" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Experience</label>
                            <textarea id="provider-experience" name="provider-experience" rows="4" class="mt-1 block w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-300 focus:ring-red-500 focus:border-red-500" placeholder="Briefly describe your experience"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                            Join Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 Home Services. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // JavaScript to hide the loader once the page is fully loaded
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('content').style.display = 'block';
        });
    </script>

</body>
</html>
