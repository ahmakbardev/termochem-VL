@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-12 flex flex-col h-full justify-center items-center">
        <!-- Title -->
        <h2 class="text-center text-3xl font-bold text-red-600 mb-8">Menu Percobaan</h2>

        <!-- Experiment Menu -->
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Eksoterm Section -->
            <div class="bg-yellow-400 p-6 rounded-lg shadow-lg text-center w-full sm:w-64">
                <h3 class="text-lg font-semibold mb-4 text-gray-800">Reaksi Eksoterm</h3>
                <div class="space-y-4 relative w-full">
                    <a href="{{ route('percobaan') }}"
                        class="w-full block bg-white relative text-gray-800 py-2 rounded-full shadow-md hover:bg-gray-200 transition duration-200">
                        Percobaan 1
                    </a>
                    {{-- <button
                        class="w-full bg-white text-gray-800 py-2 rounded-full shadow-md hover:bg-gray-200 transition duration-200">
                        Percobaan 2
                    </button> --}}
                </div>
            </div>

            <!-- Endoterm Section -->
            <div class="bg-yellow-400 p-6 rounded-lg shadow-lg text-center w-full sm:w-64">
                <h3 class="text-lg font-semibold mb-4 text-gray-800">Reaksi Endoterm</h3>
                <div class="space-y-4">
                    <button
                        class="w-full bg-white text-gray-800 py-2 rounded-full shadow-md hover:bg-gray-200 transition duration-200">
                        Percobaan 1
                    </button>
                    {{-- <button
                        class="w-full bg-white text-gray-800 py-2 rounded-full shadow-md hover:bg-gray-200 transition duration-200">
                        Percobaan 2
                    </button> --}}
                </div>
            </div>

            <!-- Kalorimeter Section -->
            <div class="bg-yellow-400 p-6 rounded-lg shadow-lg text-center w-full sm:w-64">
                <h3 class="text-lg font-semibold mb-4 text-gray-800">Kalorimeter</h3>
                <div class="space-y-4">
                    <button
                        class="w-full bg-white text-gray-800 py-2 rounded-full shadow-md hover:bg-gray-200 transition duration-200">
                        Percobaan
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
