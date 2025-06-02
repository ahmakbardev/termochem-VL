@extends('layouts.layout')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="flex gap-5 absolute top-5 left-5 w-60 h-60">
            <img src="{{ asset('assets/icons/left-1.png') }}" class="w-fit object-contain max-w-28 z-[2] h-fit" alt="">
            <img src="{{ asset('assets/icons/left-2.png') }}" class="w-fit object-contain max-w-28 z-[2] h-fit" alt="">
        </div>
        <div class="flex gap-5 absolute top-5 right-5 w-80 h-60">
            <img src="{{ asset('assets/icons/right-1.png') }}" class="w-fit object-contain max-w-44 z-[2] h-fit"
                alt="">
            <img src="{{ asset('assets/icons/right-2.png') }}" class="w-fit object-contain max-w-28 z-[2] h-fit"
                alt="">
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>

            <!-- Display validation errors, if any -->
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="bg-red-100 text-red-700 px-4 py-3 rounded">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username Field -->
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="text" name="username" id="username"
                        class="w-full px-4 py-2 border rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}" required autofocus>
                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 border rounded-lg @error('password') border-red-500 @enderror" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
