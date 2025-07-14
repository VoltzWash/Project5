<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novetchsa - Web & Software Development</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-bg {
            background-color: #f3e8ff; /* Light purple */
        }
        .primary-color {
            color: #8b5cf6; /* Purple */
        }
        .primary-bg {
            background-color: #8b5cf6; /* Purple */
        }
        .secondary-color {
            color: #6d28d9; /* Deeper Purple */
        }
        .secondary-bg {
            background-color: #6d28d9; /* Deeper Purple */
        }
        .gradient-text {
            background: linear-gradient(to right, #8b5cf6, #6d28d9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Header & Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-3xl font-bold gradient-text">Novetchsa</a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-600 hover:text-purple-600">Home</a>
                <a href="#" class="text-gray-600 hover:text-purple-600">About Us</a>
                <a href="#services" class="text-gray-600 hover:text-purple-600">Services</a>
                <a href="#" class="text-gray-600 hover:text-purple-600">Packages</a>
            </div>
            <a href="#" class="hidden md:block bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition duration-300">Contact Us</a>
            <button id="mobile-menu-button" class="md:hidden flex items-center">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#" class="block py-2 px-4 text-sm text-gray-600 hover:bg-purple-100">Home</a>
            <a href="#" class="block py-2 px-4 text-sm text-gray-600 hover:bg-purple-100">About Us</a>
            <a href="#services" class="block py-2 px-4 text-sm text-gray-600 hover:bg-purple-100">Services</a>
            <a href="#" class="block py-2 px-4 text-sm text-gray-600 hover:bg-purple-100">Packages</a>
            <a href="#" class="block py-2 px-4 text-sm text-white bg-purple-600 hover:bg-purple-700">Contact Us</a>
        </div>
    </header>

    <!-- Hero Section -->
    <main>
        <section class="hero-bg">
            <div class="container mx-auto px-6 py-24 md:py-32 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 lg:w-2/5 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-800 leading-tight">
                        Building <span class="gradient-text">Digital Solutions</span> That Drive Growth
                    </h1>
                    <p class="mt-6 text-lg text-gray-600">
                        From custom software to stunning websites and mobile apps, Novetchsa brings your vision to life with cutting-edge technology and creative design.
                    </p>
                    <div class="mt-8">
                        <a href="#services" class="bg-purple-600 text-white px-8 py-4 rounded-full font-semibold hover:bg-purple-700 transition duration-300">Explore Our Services</a>
                    </div>
                </div>
                <div class="md:w-1/2 lg:w-3/5 mt-12 md:mt-0 flex justify-center">
                    <img src="https://placehold.co/600x400/8b5cf6/ffffff?text=Novetchsa+Solutions" alt="Digital Solutions Illustration" class="rounded-lg shadow-2xl">
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800">Our Services</h2>
                    <p class="text-lg text-gray-600 mt-4">We offer a comprehensive suite of services to build your digital presence.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    
                    <!-- Custom Software Development -->
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 mb-6">
                           <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Custom Software Development</h3>
                        <p class="text-gray-600">We build scalable and robust custom software solutions tailored to your specific business needs, improving efficiency and driving innovation.</p>
                    </div>

                    <!-- Web Development -->
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Web Development</h3>
                        <p class="text-gray-600">Our web development team creates responsive, high-performance websites that provide an exceptional user experience and convert visitors into customers.</p>
                    </div>

                    <!-- Mobile Apps -->
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Mobile Apps</h3>
                        <p class="text-gray-600">We design and develop intuitive and engaging mobile applications for both iOS and Android, connecting you with your users on the go.</p>
                    </div>

                    <!-- Graphic Design -->
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 mb-6">
                           <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Graphic Design</h3>
                        <p class="text-gray-600">Our creative team produces stunning visuals, from logos and branding to UI/UX design, ensuring your brand stands out in a crowded market.</p>
                    </div>
                    
                    <!-- Spec and Quote -->
                    <div class="bg-purple-50 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 md:col-span-2 lg:col-span-3">
                         <div class="flex flex-col md:flex-row items-center">
                            <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                                <div class="flex items-center justify-center h-24 w-24 rounded-full bg-purple-200">
                                    <svg class="w-12 h-12 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-purple-800 mb-3">Spec and Quote Your Project</h3>
                                <p class="text-gray-700">Once we understand exactly what you require for your new software project, we will provide you with a software development proposal. This will lay out the different aspects of the software product as well as the costing and timelines. When you are happy with the proposal, we will proceed to the next exciting step!</p>
                                <a href="#" class="inline-block mt-4 bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition duration-300">Get a Free Quote</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Novetchsa</h3>
                    <p class="text-gray-400">Innovative solutions for a digital world.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul>
                        <li class="mb-2"><a href="#" class="hover:text-purple-400">About Us</a></li>
                        <li class="mb-2"><a href="#services" class="hover:text-purple-400">Services</a></li>
                        <li class="mb-2"><a href="#" class="hover:text-purple-400">Packages</a></li>
                        <li class="mb-2"><a href="#" class="hover:text-purple-400">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact Us</h4>
                    <p class="text-gray-400">Midrand, Gauteng, South Africa</p>
                    <p class="text-gray-400">contact@novetchsa.com</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.013-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.08 2.465c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zM12 7a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zm6.406-11.845a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z" clip-rule="evenodd" /></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; <?php echo date("Y"); ?> Novetchsa. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
