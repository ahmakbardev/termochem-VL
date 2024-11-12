@extends('layouts.layout')

@section('content')
    <!-- Start Page Section -->
    <section id="start-page" class="h-screen flex flex-col relative w-screen overflow-hidden items-center justify-center bg-green-100">
        <!-- Title Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl lg:text-5xl font-bold uppercase mb-2">Virtual Laboratorium</h1>
            <h2 class="text-5xl lg:text-7xl font-bold uppercase text-red-600">Termokimia</h2>
        </div>

        <!-- Lab Images Section -->
        <div class="flex items-center justify-center z-[1] space-x-4 lg:space-x-12 mb-8 w-full px-4 lg:px-0">
            <!-- Left Image -->
            <div class="w-1/3 lg:w-1/4 flex justify-end">
                <img src="{{ asset('assets/images/front/front-1.png') }}" alt="Lab Activity Left"
                    class="w-full max-w-xs lg:max-w-sm">
            </div>

            <!-- Center Button -->
            <div class="flex flex-col items-center">
                <a href="{{ route('login') }}"
                    class="bg-red-500 text-white text-2xl font-semibold py-4 px-12 rounded-full shadow-lg hover:bg-red-600 transition duration-300 ease-in-out transform hover:scale-105">
                    Mulai
                </a>
            </div>

            <!-- Right Image -->
            <div class="w-1/3 lg:w-1/4 flex justify-start">
                <img src="{{ asset('assets/images/front/front-2.png') }}" alt="Lab Activity Right"
                    class="w-full max-w-xs lg:max-w-sm mt-8">
            </div>
        </div>

        <!-- Decorative Elements (Optional) -->
        <div class="absolute z-[0] top-12 -left-2">
            <img src="{{ asset('assets/images/front/front-bg-2.png') }}" alt="Decorative Element Left"
                class="w-1/4 opacity-75">
        </div>
            <img src="{{ asset('assets/images/front/front-bg-2.png') }}" alt="Decorative Element Right"
                class="absolute bottom-12 w-1/3 opacity-75 -right-2 rotate-180">
    </section>
@endsection
