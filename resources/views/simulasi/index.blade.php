@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-12 flex flex-col h-full justify-center items-center min-h-screen">
        <!-- Title -->
        <h2 class="text-center text-4xl font-extrabold mb-12 drop-shadow-lg">Menu Percobaan</h2>

        <!-- Experiment Menu -->
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Eksoterm Section -->
            <div
                class="bg-white p-8 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl w-full sm:w-64 text-center relative">
                <h3 class="text-lg font-semibold mb-4 text-yellow-600">Reaksi Eksoterm</h3>
                <p class="text-gray-600 mb-4">HCl dan NaOH <br>(Eksperimen yang menujukkan pelepaskan kalor dari sistem ke
                    lingkungan)</p>
                <a href="{{ route('percobaan-eksoterm') }}"
                    class="w-full inline-block bg-yellow-500 text-white font-semibold py-2 px-4 rounded-full shadow-md hover:bg-yellow-600 transition duration-200 relative tooltip-trigger">
                    Mulai Percobaan
                </a>
                <!-- Tooltip for Eksoterm -->
            </div>

            <!-- Endoterm Section -->
            <div
                class="bg-white p-8 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl w-full sm:w-64 text-center relative">
                <h3 class="text-lg font-semibold mb-4 text-teal-600">Reaksi Endoterm</h3>
                <p class="text-gray-600 mb-4">
                    CH<sub>3</sub>COOH dan NaHCO<sub>3</sub>
                    <br>(Eksperimen yang menunjukkan pelepasan kalor dari lingkungan ke sistem)
                </p>
                <a href="{{ route('percobaan-endoterm') }}"
                    class="w-full inline-block bg-teal-500 text-white font-semibold py-2 px-4 rounded-full shadow-md hover:bg-teal-600 transition duration-200 relative tooltip-trigger">
                    Mulai Percobaan
                </a>
                <!-- Tooltip for Endoterm -->
            </div>

            <!-- Kalorimeter Section -->
            <div
                class="bg-white p-8 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl w-full sm:w-64 text-center relative">
                <h3 class="text-lg font-semibold mb-4 text-indigo-600">Kalorimeter</h3>
                <p class="text-gray-600 mb-4">HCl dan NaOH
                    <br>("Eksperimen yang digunakan untuk menentukan perubahan kalor pada suatu reaksi")
                </p>
                <a href="{{ route('percobaan-kalorimeter') }}"
                    class="w-full inline-block bg-indigo-500 text-white font-semibold py-2 px-4 rounded-full shadow-md hover:bg-indigo-600 transition duration-200 relative tooltip-trigger">
                    Mulai Percobaan
                </a>
                <!-- Tooltip for Kalorimeter -->
            </div>

        </div>
    </div>

    <!-- Modal for Tutorial -->
    <div class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div
            class="bg-white rounded-lg shadow-lg max-w-md w-full absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 p-6">
            <button
                class="close-modal absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>
            <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Tutorial Penggunaan Fitur Simulasi</h3>

            <!-- Carousel Content -->
            <div class="carousel">
                <div class="carousel-slide text-center hidden">Langkah 1: Persiapkan alat dan bahan yang dibutuhkan</div>
                <div class="carousel-slide text-center hidden">Langkah 2: Ikuti instruksi simulasi dengan seksama</div>
                <div class="carousel-slide text-center hidden">Langkah 3: Amati hasil simulasi dan lakukan pencatatan</div>
                <div class="carousel-slide text-center hidden">Langkah 4: Gunakan fitur-fitur tambahan untuk eksplorasi
                </div>
            </div>

            <!-- Carousel Controls -->
            <div class="flex justify-between items-center mt-4">
                <button class="prev px-4 py-2 bg-gray-300 rounded-full hover:bg-gray-400">Prev</button>
                <div class="carousel-indicators flex space-x-2"></div>
                <button class="next px-4 py-2 bg-gray-300 rounded-full hover:bg-gray-400">Next</button>
            </div>
        </div>
    </div>

    <style>
        .modal {
            display: none;
        }

        .carousel-slide {
            display: none;
        }

        .carousel-slide.active {
            display: block;
        }

        .carousel-indicators .indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: gray;
        }

        .carousel-indicators .indicator.active {
            background: blue;
        }

        .tooltip {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.2s ease, visibility 0.2s ease;
        }

        .tooltip-trigger:hover+.tooltip {
            opacity: 1;
            visibility: visible;
        }
    </style>

    <script>
        $(document).ready(function() {
            // Show the modal automatically after 3 seconds (3000 ms)
            setTimeout(function() {
                $('.modal').fadeIn();
                showSlide(0); // Start from the first slide
            }, 300);

            // Open the modal manually with button click
            $('.open-tutorial-modal').click(function() {
                $('.modal').fadeIn();
                showSlide(0); // Start from the first slide
            });

            // Close the modal on button click
            $('.close-modal').click(function() {
                $('.modal').fadeOut();
            });

            // Carousel variables
            let currentSlide = 0;
            const slides = $('.carousel-slide');
            const totalSlides = slides.length;

            // Show the current slide and update indicators
            function showSlide(index) {
                slides.removeClass('active').eq(index).addClass('active');
                $('.carousel-indicators .indicator').removeClass('active').eq(index).addClass('active');
                currentSlide = index;
            }

            // Generate indicators
            slides.each(function(index) {
                $('.carousel-indicators').append('<div class="indicator" data-index="' + index +
                    '"></div>');
            });

            // Click indicator to go to specific slide
            $('.carousel-indicators').on('click', '.indicator', function() {
                showSlide($(this).data('index'));
            });

            // Next button
            $('.next').click(function() {
                const nextSlide = (currentSlide + 1) % totalSlides;
                showSlide(nextSlide);
            });

            // Previous button
            $('.prev').click(function() {
                const prevSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(prevSlide);
            });

            // Show the first slide by default
            showSlide(currentSlide);
        });
    </script>
@endsection
