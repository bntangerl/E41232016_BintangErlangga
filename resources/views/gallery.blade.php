@extends('layouts.main')

@section('title', 'Welcome to YourBrand')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Transform Your Business</span>
                    <span class="block text-indigo-600">With Our Platform</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Streamline your operations, boost productivity, and drive growth with our comprehensive solution.
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                            Get started
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            Live demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Features That Set Us Apart
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Everything you need to succeed in today's competitive market.
                </p>
            </div>

            <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 rounded-md bg-indigo-500 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Lightning Fast</h3>
                    <p class="mt-2 text-gray-500">Experience blazing fast performance that keeps your business moving.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 rounded-md bg-indigo-500 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Secure by Design</h3>
                    <p class="mt-2 text-gray-500">Bank-grade security to protect your valuable data and assets.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="w-12 h-12 rounded-md bg-indigo-500 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Smart Analytics</h3>
                    <p class="mt-2 text-gray-500">Gain valuable insights with our advanced analytics platform.</p>
                </div>
            </div>
        </div>
    </section>
    @endsection