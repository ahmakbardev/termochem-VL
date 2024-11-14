@extends('layouts.layout')

@section('content')
    <!-- Header -->
    <header id="header" class="header h-full text-center lg:text-left py-8 lg:py-0">
        <div class="container h-full px-4 flex flex-col items-center justify-center">
            <div class="flex flex-col text-center mb-6 lg:mb-0">
                <h1 class="text-3xl lg:text-5xl font-semibold">Virtual Laboratorium</h1>
                <h1 class="text-5xl lg:text-7xl font-bold uppercase">Termokimia</h1>
            </div>
            <div class="relative w-full lg:w-2/3 h-fit mt-8 lg:mt-0">
                <img src="{{ asset('assets/images/component/1.png') }}" class="w-full lg:w-auto mx-auto" alt="Main Image">

                <a href="{{ route('materi') }}"
                    class="absolute top-0 left-1/2 transform -translate-x-[150%] lg:translate-x-0 lg:-left-40 w-1/3 md:w-1/4 lg:w-1/3 hover:-rotate-12 hover:scale-105 transition-all ease-in-out">
                    <img src="{{ asset('assets/images/nav/materi.png') }}" alt="Materi">
                </a>

                <a href="{{ route('kompetensi') }}"
                    class="absolute top-1/2 left-1/2 transform -translate-x-[150%] lg:translate-x-0 lg:-left-48 w-1/3 md:w-1/4 lg:w-1/3 hover:-rotate-12 hover:scale-105 transition-all ease-in-out">
                    <img src="{{ asset('assets/images/nav/kompetensi.png') }}" alt="Kompetensi">
                </a>

                <a href="{{ route('simulasi') }}"
                    class="absolute top-0 right-1/2 transform translate-x-[150%] lg:translate-x-0 lg:-right-40 w-1/3 md:w-1/4 lg:w-1/3 hover:rotate-12 hover:scale-105 transition-all ease-in-out">
                    <img src="{{ asset('assets/images/nav/simulasi.png') }}" alt="Simulasi">
                </a>

                <a href=""
                    class="absolute top-1/2 right-1/2 transform translate-x-[150%] lg:translate-x-0 lg:-right-48 w-1/3 md:w-1/4 lg:w-1/3 hover:rotate-12 hover:scale-105 transition-all ease-in-out">
                    <img src="{{ asset('assets/images/nav/uji.png') }}" alt="Uji">
                </a>
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->

    <!-- Modal for User Instructions -->
    {{-- <div id="guideModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-[51] hidden">
        <div class="bg-white px-6 py-5 rounded-lg shadow-lg w-full max-w-xl transform scale-0 transition-transform duration-500"
            id="modalContent">
            <button onclick="closeModal()" class="absolute top-4 right-4 w-fit text-gray-600 z-[1] hover:text-gray-800">Close</button>

            <!-- Carousel Content -->
            <div id="carouselSlides" class="relative z-0 overflow-hidden">
                <div id="carouselInner" class="flex transition-transform duration-500">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 text-center">
                        <h2 class="text-2xl font-bold mb-4">Langkah 1</h2>
                        <p class="text-gray-700">Mulailah dengan mengklik ikon untuk membuka materi yang ingin Anda
                            pelajari.</p>
                        <img src="{{ asset('assets/images/nav/materi.png') }}" alt="Materi Icon" class="mx-auto mt-4">
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0 text-center">
                        <h2 class="text-2xl font-bold mb-4">Langkah 2</h2>
                        <p class="text-gray-700">Ikuti kompetensi yang ada untuk memahami topik lebih dalam.</p>
                        <img src="{{ asset('assets/images/nav/kompetensi.png') }}" alt="Kompetensi Icon"
                            class="mx-auto mt-4">
                    </div>
                    <!-- Slide 3 -->
                    <div class="w-full flex-shrink-0 text-center">
                        <h2 class="text-2xl font-bold mb-4">Langkah 3</h2>
                        <p class="text-gray-700">Gunakan simulasi untuk mempraktikkan teori yang telah dipelajari.</p>
                        <img src="{{ asset('assets/images/nav/simulasi.png') }}" alt="Simulasi Icon" class="mx-auto mt-4">
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <div class="flex justify-between mt-6">
                <button onclick="prevSlide()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">←</button>
                <button onclick="nextSlide()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">→</button>
            </div>
        </div>
    </div> --}}

    {{-- <script>
        let currentSlide = 0;
        const totalSlides = document.querySelectorAll("#carouselInner > div").length;

        function openModal() {
            const modal = document.getElementById("guideModal");
            const modalContent = document.getElementById("modalContent");
            modal.classList.remove("hidden");
            setTimeout(() => {
                modalContent.classList.remove("scale-0");
            }, 100);
        }

        function closeModal() {
            const modal = document.getElementById("guideModal");
            const modalContent = document.getElementById("modalContent");
            modalContent.classList.add("scale-0");
            setTimeout(() => {
                modal.classList.add("hidden");
            }, 500);
        }

        function showSlide(slideIndex) {
            const carouselInner = document.getElementById("carouselInner");
            if (slideIndex >= totalSlides) currentSlide = 0;
            else if (slideIndex < 0) currentSlide = totalSlides - 1;
            else currentSlide = slideIndex;
            carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        // Automatically show the modal on page load
        document.addEventListener("DOMContentLoaded", function() {
            openModal();
        });
    </script> --}}
@endsection
