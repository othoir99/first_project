<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub | Modern Clothing Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .category-card:hover .category-overlay {
            opacity: 1;
        }
        .product-card:hover .product-actions {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <!-- Header/Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-indigo-600">StyleHub</a>
                </div>

                <!-- Navigation Links -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium">New Arrivals</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium">Women</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium">Men</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium">Kids</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium">Sale</a>
                </nav>

                <!-- Right Icons -->
                <div class="flex items-center space-x-6">
                    <div class="hidden md:flex items-center bg-gray-100 rounded-full px-4 py-2">
                        <i class="fas fa-search text-gray-500"></i>
                        <input type="text" placeholder="Search products..." class="bg-transparent border-none focus:outline-none focus:ring-0 ml-2 w-40">
                    </div>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">
                        <i class="fas fa-user text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">
                        <i class="fas fa-heart text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 relative">
                        <i class="fas fa-shopping-bag text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Summer Collection 2023</h1>
                    <p class="text-lg text-gray-700 mb-8">Discover our new summer collection with fresh styles and vibrant colors. Up to 40% off on selected items.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition duration-300">Shop Now</a>
                        <a href="#" class="border border-gray-800 text-gray-800 px-6 py-3 rounded-lg font-medium hover:bg-gray-800 hover:text-white transition duration-300">Explore</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="bg-white rounded-2xl shadow-xl p-2 transform rotate-3 w-64 h-80 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Fashion Model" class="rounded-xl object-cover w-full h-full">
                        </div>
                        <div class="absolute top-10 -left-10 bg-white rounded-2xl shadow-xl p-2 transform -rotate-6 w-64 h-80 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Fashion Model" class="rounded-xl object-cover w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Shop by Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <div class="category-card relative rounded-xl overflow-hidden shadow-md h-64">
                    <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Women's Fashion" class="w-full h-full object-cover">
                    <div class="category-overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-white text-xl font-bold">Women</h3>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div class="category-card relative rounded-xl overflow-hidden shadow-md h-64">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Men's Fashion" class="w-full h-full object-cover">
                    <div class="category-overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-white text-xl font-bold">Men</h3>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div class="category-card relative rounded-xl overflow-hidden shadow-md h-64">
                    <img src="https://images.unsplash.com/photo-1519457431-44ccd64a579b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Kids Fashion" class="w-full h-full object-cover">
                    <div class="category-overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-white text-xl font-bold">Kids</h3>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div class="category-card relative rounded-xl overflow-hidden shadow-md h-64">
                    <img src="https://images.unsplash.com/photo-1558769132-cb25c5d1ac7f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Accessories" class="w-full h-full object-cover">
                    <div class="category-overlay absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-white text-xl font-bold">Accessories</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Featured Products</h2>
                <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800">View All <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">


                @foreach ($products as $item)
                    

                <!-- Product 1 -->
                <div class="product-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Casual Shirt" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                        <div class="product-actions absolute top-4 right-4 opacity-0 transform translate-y-2 transition-all duration-300">
                            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100 mb-2">
                                <i class="fas fa-heart text-gray-600"></i>
                            </button>
                            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                <i class="fas fa-eye text-gray-600"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 text-white">
                            <span class="bg-indigo-600 text-xs font-medium px-2 py-1 rounded">New</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-medium text-lg mb-1">{{$item->name}}</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(128)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">$49.99</span>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700 transition duration-300">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
            </div>
        </div>
    </section>

    <!-- Special Offer -->
    <section class="py-16 bg-indigo-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Summer Sale - Up to 50% Off</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Don't miss our biggest sale of the season. Shop now and get amazing discounts on summer essentials.</p>
            <div class="flex justify-center space-x-4 mb-10">
                <div class="bg-white bg-opacity-20 rounded-lg p-4 text-center w-20">
                    <span class="text-2xl font-bold">05</span>
                    <p class="text-sm">Days</p>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-4 text-center w-20">
                    <span class="text-2xl font-bold">18</span>
                    <p class="text-sm">Hours</p>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-4 text-center w-20">
                    <span class="text-2xl font-bold">45</span>
                    <p class="text-sm">Minutes</p>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-4 text-center w-20">
                    <span class="text-2xl font-bold">22</span>
                    <p class="text-sm">Seconds</p>
                </div>
            </div>
            <a href="#" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-bold text-lg hover:bg-gray-100 transition duration-300">Shop the Sale</a>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"I absolutely love my new dress from StyleHub! The quality is amazing and it fits perfectly. Will definitely shop here again!"</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Customer" class="w-10 h-10 rounded-full object-cover mr-3">
                        <div>
                            <h4 class="font-medium">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Fast shipping and great customer service. The jeans I ordered are exactly as described and very comfortable. Highly recommend!"</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Customer" class="w-10 h-10 rounded-full object-cover mr-3">
                        <div>
                            <h4 class="font-medium">Michael Chen</h4>
                            <p class="text-gray-500 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The summer collection is fantastic! I bought three items and they're all high quality and stylish. Great prices too!"</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Customer" class="w-10 h-10 rounded-full object-cover mr-3">
                        <div>
                            <h4 class="font-medium">Emily Rodriguez</h4>
                            <p class="text-gray-500 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-gray-900 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Stay in Style</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Subscribe to our newsletter and be the first to know about new arrivals, exclusive offers, and style tips.</p>
            <div class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-l-lg text-gray-800 focus:outline-none">
                <button class="bg-indigo-600 px-6 py-3 rounded-r-lg font-medium hover:bg-indigo-700 transition duration-300">Subscribe</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">StyleHub</h3>
                    <p class="text-gray-400 mb-4">Your destination for modern and stylish clothing for every occasion.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Shipping & Returns</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Size Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Customer Service</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">My Account</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Track Order</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms & Conditions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Payment Methods</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3"></i>
                            <span>123 Fashion Street, New York, NY 10001</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>info@stylehub.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2023 StyleHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple countdown timer for the special offer section
        function updateCountdown() {
            const days = document.querySelector('.bg-white.bg-opacity-20:nth-child(1) span');
            const hours = document.querySelector('.bg-white.bg-opacity-20:nth-child(2) span');
            const minutes = document.querySelector('.bg-white.bg-opacity-20:nth-child(3) span');
            const seconds = document.querySelector('.bg-white.bg-opacity-20:nth-child(4) span');
            
            // Set the countdown date (5 days from now)
            const countdownDate = new Date();
            countdownDate.setDate(countdownDate.getDate() + 5);
            
            const now = new Date().getTime();
            const distance = countdownDate - now;
            
            const daysRemaining = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hoursRemaining = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutesRemaining = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const secondsRemaining = Math.floor((distance % (1000 * 60)) / 1000);
            
            days.textContent = daysRemaining.toString().padStart(2, '0');
            hours.textContent = hoursRemaining.toString().padStart(2, '0');
            minutes.textContent = minutesRemaining.toString().padStart(2, '0');
            seconds.textContent = secondsRemaining.toString().padStart(2, '0');
        }
        
        // Update the countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown(); // Initial call
    </script>
</body>
</html>