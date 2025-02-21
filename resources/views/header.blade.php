<header class="bg-white shadow-sm sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-indigo-600">YourBrand</a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#features" class="text-gray-700 hover:text-indigo-600">Features</a>
                <a href="#pricing" class="text-gray-700 hover:text-indigo-600">Pricing</a>
                <a href="#testimonials" class="text-gray-700 hover:text-indigo-600">Testimonials</a>
                <a href="#contact" class="text-gray-700 hover:text-indigo-600">Contact</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-indigo-600">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                                Get Started
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
</header>