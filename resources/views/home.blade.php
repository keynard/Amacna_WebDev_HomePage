<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CubeTech Innovations</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .nav-shadow {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .hero-card {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        
        .city-image {
            border-bottom-right-radius: 80px;
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1;
        }
        
        .team-card {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
        }
        
        .testimonial-card {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }
        
        .footer-pattern {
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.05) 10px, rgba(255,255,255,0.05) 20px);
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        
        .dropdown-menu {
            display: none;
        }
    </style>

</head>
<body class="bg-gray-50">

    <!-- Navigation Bar -->
    <nav class="bg-white nav-shadow fixed w-full top-0 z-50">
        <div class="px-6 py-3 text-gray-400 text-sm">
          
        </div>
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-400 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">C</span>
                    </div>
                    <span class="text-gray-800 font-semibold text-lg">CubeTech Innovations</span>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <div class="dropdown relative">
                        <a href="#" class="text-gray-700 hover:text-blue-500 flex items-center space-x-1">
                            <span>Products</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute top-full mt-2 bg-white rounded-lg shadow-lg py-2 min-w-[200px]">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">SnapServe</a>
                        </div>
                    </div>
                    <div class="dropdown relative">
                        <a href="#" class="text-gray-700 hover:text-blue-500 flex items-center space-x-1">
                            <span>Services</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute top-full mt-2 bg-white rounded-lg shadow-lg py-2 min-w-[200px]">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Barcode Generator</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">QR Code Generator</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Job Search</a>
                        </div>
                    </div>
                    <a href="#about" class="text-gray-700 hover:text-blue-500">About Us</a>
                    <a href="#blog" class="text-gray-700 hover:text-blue-500">Blog</a>
                    <a href="/guide" class="text-gray-700 hover:text-blue-500 font-semibold">Explanation</a>
                    <a href="#contact" class="bg-blue-400 text-white px-6 py-2 rounded-lg hover:bg-blue-500 transition">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 relative overflow-hidden">
        <div class="flex">
            <!-- Left Side - Light Gray Background -->
            <div class="w-full md:w-2/5 bg-gray-100 flex items-center justify-center min-h-screen">
                <div class="max-w-lg mx-auto px-8 py-12">
                    <div class="bg-white hero-card p-10 rounded-t-3xl">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">CubeTech Innovations</h1>
                        <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mb-6">Shaping Tomorrow's Digital Solutions Today</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            CubeTech Innovations is a technology company focused on creating cutting-edge solutions that drive progress and transform ideas into reality. We provide scalable, efficient solutions to help businesses stay ahead in a rapidly evolving digital landscape.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="bg-blue-400 text-white px-8 py-3 rounded-lg font-semibold uppercase hover:bg-blue-500 transition">CONTACT US</button>
                            <button class="bg-white border-2 border-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold uppercase hover:border-gray-400 transition">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - City Image -->
            <div class="hidden md:block w-3/5 relative">
                <img src="{{ asset('images/architecture.jpg') }}" alt="City Street" class="w-full h-screen object-cover city-image">
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="stat-number text-blue-500 mb-3">100+</div>
                    <p class="text-gray-600">Skilled software experts ready to Innovate</p>
                </div>
                <div>
                    <div class="stat-number text-blue-500 mb-3">100+</div>
                    <p class="text-gray-600">Successful projects delivered across multiple industries</p>
                </div>
                <div>
                    <div class="stat-number text-blue-500 mb-3">100+</div>
                    <p class="text-gray-600">Trusted clients gaining value from proven expertise</p>
                </div>
                <div>
                    <div class="stat-number text-blue-500 mb-3">under 5%</div>
                    <p class="text-gray-600">Developer turnover rate consistently upheld</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SnapServe Product Section 1 -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-gray-500 text-sm mb-2">Discovering "SnapServe"</p>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Taking Your Restaurant Online in Minutes</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Eliminate the hassle of reprinting menus, reduce order errors, and speed up kitchen operations. With SnapServe QR code menu, easily integrate a seamless online ordering system into your restaurant, offering a faster and more enjoyable dining experience for your customers.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Streamline dining with SnapServe – reduce waste, improve accuracy, and grow your business.
                    </p>
                    <button class="bg-blue-400 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-500 transition">Request a Demo</button>
                </div>
                <div>
                    <img src="{{ asset('images/restaurant.jpg') }}" alt="SnapServe App" class="rounded-2xl shadow-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- SnapServe Subscription Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="{{ asset('images/qr.jpg') }}" alt="QR Code Scanning" class="rounded-2xl shadow-xl w-full">
                </div>
                <div>
                    <p class="text-gray-600 mb-4 leading-relaxed font-semibold">
                        SnapServe offers a powerful subscription service with a range of options tailored to meet your needs!
                    </p>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Our basic subscription includes one menu and ordering service, allowing you to access essential features at an affordable price. You can utilize the basic plan without any obligation to upgrade, and your QR code will remain active at all times.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        With our service, you can receive unlimited dine-in, delivery, and takeaway orders under this plan.
                    </p>
                    <a href="#" class="text-blue-500 font-semibold inline-flex items-center space-x-2 hover:text-blue-600">
                        <span>More about our products</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About CubeTech Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-blue-500 text-center mb-16">We're CubeTech</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-2 border-2 border-gray-200 rounded-lg">
                        <img src="{{ asset('images/meet1.jpg') }}" alt="Team" class="w-full h-auto rounded">
                    </div>
                    <div class="bg-white p-2 border-2 border-gray-200 rounded-lg">
                        <img src="{{ asset('images/meet2.jpeg') }}" alt="Team" class="w-full h-auto rounded">
                    </div>
                    <div class="bg-white p-2 border-2 border-gray-200 rounded-lg">
                        <img src="{{ asset('images/meet1.jpg') }}" alt="Team" class="w-full h-auto rounded">
                    </div>
                    <div class="bg-white p-2 border-2 border-gray-200 rounded-lg">
                        <img src="{{ asset('images/meet2.jpeg') }}" alt="Team" class="w-full h-auto rounded">
                    </div>
                </div>
                <div>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        We're a passionate and innovative team based in Cebu, Philippines, dedicated to delivering exceptional products that our customers love and rely on. At CubeTech, we pride ourselves on our collaborative culture, fostering an environment where creativity thrives and every voice matters.
                    </p>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Together, we strive for excellence in everything we do, ensuring that we exceed expectations and make a positive impact in our community.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        CubeTech is all about crafting software solutions that meet client needs and drive growth. We're focused on building secure, user-friendly tools that add value—no hidden costs, just straightforward solutions. By enhancing productivity, we aim to be a reliable partner our clients can count on for the long haul.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-3xl font-bold text-blue-500 mb-4">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Empower businesses every day by providing innovative software solutions that drive growth and unlock their full potential.
                    </p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-blue-500 mb-4">Our Vision</h3>
                    <p class="text-gray-700 leading-relaxed">
                        CubeTech delivers innovative, secure, and user-friendly software tailored to client needs. We focus on transparency, efficiency, and long-term partnerships, empowering growth with reliable solutions that boost productivity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Carousel Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="relative">
                <div class="flex gap-8 overflow-x-auto pb-8 scrollbar-hide" style="scrollbar-width: none;">
                    <div class="team-card bg-white rounded-xl p-6 min-w-[250px] text-center">
                        <img src="{{ asset('images/man.jpg') }}" alt="Sadik Rahman" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h4 class="font-bold text-gray-900 mb-1">Sadik Rahman</h4>
                        <p class="text-gray-600 text-sm">Director</p>
                    </div>
                    <div class="team-card bg-white rounded-xl p-6 min-w-[250px] text-center">
                        <img src="{{ asset('images/girl.jpg') }}" alt="Cherry White" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h4 class="font-bold text-gray-900 mb-1">Cherry White</h4>
                        <p class="text-gray-600 text-sm">Sales and Marketing</p>
                    </div>
                    <div class="team-card bg-white rounded-xl p-6 min-w-[250px] text-center">
                        <img src="{{ asset('images/girl.jpg') }}" alt="Angeline Yap" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h4 class="font-bold text-gray-900 mb-1">Angeline Yap</h4>
                        <p class="text-gray-600 text-sm">Finance Manager</p>
                    </div>
                    <div class="team-card bg-white rounded-xl p-6 min-w-[250px] text-center">
                        <img src="{{ asset('images/man.jpg') }}" alt="Denver Son" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h4 class="font-bold text-gray-900 mb-1">Denver Son</h4>
                        <p class="text-gray-600 text-sm">Full-Stack Developer</p>
                    </div>
                </div>
                <div class="flex justify-center space-x-2 mt-6">
                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-blue-500 text-center mb-4">Experience it firsthand and discover true value</h2>
            <p class="text-gray-600 text-center mb-16 max-w-3xl mx-auto">
                See how our solution delivers real-world benefits, designed to meet your unique needs, enhance efficiency, and exceed your expectations every step of the way
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card bg-white rounded-xl p-8 text-center">
                    <img src="{{ asset('images/ceo.jpg') }}" alt="Anne Curtis" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h4 class="font-bold text-gray-900 mb-1">Anne Curtis</h4>
                    <p class="text-gray-500 text-sm mb-4">CEO @ NASHO WASHO LTD</p>
                    <p class="text-gray-600 italic">"Don't walk behind me; I may not lead. Don't walk in front of me; I may not follow. Just walk beside me and be my friend"</p>
                </div>
                <div class="testimonial-card bg-white rounded-xl p-8 text-center">
                    <img src="{{ asset('images/ceo2.jpg') }}" alt="Kim Sam Son" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h4 class="font-bold text-gray-900 mb-1">Kim Sam Son</h4>
                    <p class="text-gray-500 text-sm mb-4">MARKETING @ WOONG</p>
                    <p class="text-gray-600 italic">"The pessimist complain about the wind; the optimist expects to change it; the realist adjusts the sails."</p>
                </div>
                <div class="testimonial-card bg-white rounded-xl p-8 text-center">
                    <img src="{{ asset('images/ceo3.jpg') }}" alt="Kim Soo-Hyun" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h4 class="font-bold text-gray-900 mb-1">Kim Soo-Hyun</h4>
                    <p class="text-gray-500 text-sm mb-4">CEO @ WOONG WASHIOTO INC</p>
                    <p class="text-gray-600 italic">"길이 닿는 곳으로 가지 말고, 길이 없는 곳으로 가서 흔적을 남겨라"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">We are here for you</h2>
            <p class="text-gray-600 text-center mb-12">For further questions, including partnership opportunities</p>
            <div class="max-w-2xl mx-auto">
                <form method="POST" action="#" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" name="name" placeholder="Full Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                    </div>
                    <div>
                        <textarea name="message" placeholder="Describe your problem in at least 250 characters" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-400 text-white px-12 py-3 rounded-lg font-semibold uppercase hover:bg-blue-500 transition">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 footer-pattern text-gray-300 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <p class="mb-4">CubeTech Innovations © 2024</p>
                    <div class="flex space-x-4 mb-6">
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-500 transition">f</a>
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-500 transition">in</a>
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-500 transition">📷</a>
                    </div>
                    <div class="flex">
                        <input type="email" placeholder="Email" class="flex-1 px-4 py-2 bg-gray-700 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <button class="bg-blue-400 text-white px-6 py-2 rounded-r-lg font-semibold uppercase hover:bg-blue-500 transition">SUBSCRIBE</button>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('guide') }}" class="hover:text-white transition">Setup Guide</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Products</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition">SnapServe</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition">Barcode Generator</a></li>
                        <li><a href="#" class="hover:text-white transition">QR Code Generator</a></li>
                        <li><a href="#" class="hover:text-white transition">Job Search</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
