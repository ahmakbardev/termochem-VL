@extends('layouts.layout')

@section('content')
    <!-- Header -->
    <header id="header" class="header h-full text-center lg:text-left">
        <div class="container h-full px-4 items-center justify-center flex flex-col">
            <div class="relative w-2/3 h-fit">
                <img src="{{ asset('assets/images/detail/kompetensi/kompetensi.png') }}" alt="">
                <a href="javascript:void(0)" onclick="openModal('modalUmum')">
                    <img src="{{ asset('assets/images/detail/kompetensi/umum.png') }}"
                        class="absolute top-20 w-2/3 -left-64 hover:-rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="Umum">
                </a>
                <a href="javascript:void(0)" onclick="openModal('modalKimia')">
                    <img src="{{ asset('assets/images/detail/kompetensi/kimia.png') }}"
                        class="absolute bottom-28 w-2/3 -left-64 hover:-rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="Kimia">
                </a>
                <a href="javascript:void(0)" onclick="openModal('modalKeterampilan')">
                    <img src="{{ asset('assets/images/detail/kompetensi/keterampilan.png') }}"
                        class="absolute top-20 w-2/3 -right-64 hover:rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="Keterampilan">
                </a>
                <a href="javascript:void(0)" onclick="openModal('modalAtp')">
                    <img src="{{ asset('assets/images/detail/kompetensi/atp.png') }}"
                        class="absolute bottom-28 w-2/3 -right-64 hover:rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="ATP">
                </a>
            </div>
        </div>
    </header>

    <!-- Modal for Umum -->
    <div id="modalUmum" class="fixed inset-0 hidden bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg max-w-lg transform transition-all duration-300 opacity-0 scale-75">
            <h2 class="text-xl font-semibold mb-4">Capaian Pembelajaran (Umum) - Fase F</h2>
            <p class="text-gray-700">
                Peserta didik mampu mengamati, menyelidiki, dan menjelaskan fenomena sehari-hari sesuai kaidah kerja ilmiah
                dalam menjelaskan konsep kimia dalam keseharian; menerapkan operasi matematika dalam perhitungan kimia;
                mempelajari sifat, struktur dan interaksi partikel dalam membentuk berbagai senyawa termasuk pengolahan dan
                penerapannya dalam keseharian; memahami dan menjelaskan aspek energi, laju dan kesetimbangan reaksi kimia;
                menggunakan konsep asam-basa dalam keseharian; menggunakan transformasi energi kimia dalam keseharian
                termasuk termokimia dan elektrokimia; memahami kimia organik termasuk penerapannya dalam keseharian.
            </p>
            <button onclick="closeModal('modalUmum')" class="mt-4 text-blue-500">Tutup</button>
        </div>
    </div>

    <!-- Modal for Kimia -->
    <div id="modalKimia" class="fixed inset-0 hidden bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg max-w-lg transform transition-all duration-300 opacity-0 scale-75">
            <h2 class="text-xl font-semibold mb-4">Capaian Pembelajaran (Per Elemen) - Pemahaman Kimia</h2>
            <p class="text-gray-700">
                Peserta didik mampu mengamati, menyelidiki, dan menjelaskan fenomena sehari-hari sesuai kaidah kerja ilmiah
                dalam menjelaskan konsep kimia dalam keseharian; menerapkan operasi matematika dalam perhitungan kimia;
                mempelajari sifat, struktur dan interaksi partikel dalam membentuk berbagai senyawa termasuk pengolahan dan
                penerapannya dalam keseharian; memahami dan menjelaskan aspek energi, laju dan kesetimbangan reaksi kimia;
                menggunakan konsep asam-basa dalam keseharian; menggunakan transformasi energi kimia dalam keseharian
                termasuk termokimia dan elektrokimia; memahami kimia organik termasuk penerapannya dalam keseharian.
            </p>
            <button onclick="closeModal('modalKimia')" class="mt-4 text-blue-500">Tutup</button>
        </div>
    </div>

    <!-- Modal for Keterampilan -->
    <div id="modalKeterampilan"
        class="fixed inset-0 hidden bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg max-w-lg transform transition-all duration-300 opacity-0 scale-75">
            <h2 class="text-xl font-semibold mb-4">Keterampilan Proses</h2>
            <p class="text-gray-700">
                Mengamati: Mampu memilih alat bantu yang tepat untuk melakukan pengukuran dan pengamatan. Memperhatikan
                detail yang relevan dari obyek yang diamati. Mempertanyakan dan memprediksi: Merumuskan pertanyaan ilmiah
                dan hipotesis yang dapat diselidiki secara ilmiah. Merencanakan dan melakukan penyelidikan: Peserta didik
                merencanakan dan memilih metode yang sesuai berdasarkan referensi untuk mengumpulkan data yang dapat
                dipercaya, memperhitungkan resiko serta isu-isu etik dalam penggunaan metode tersebut. Peserta didik memilih
                dan menggunakan alat dan bahan, termasuk penggunaan teknologi digital yang sesuai untuk mengumpulkan serta
                mencatat data secara sistematis dan akurat.
            </p>
            <button onclick="closeModal('modalKeterampilan')" class="mt-4 text-blue-500">Tutup</button>
        </div>
    </div>

    <!-- Modal for ATP -->
    <div id="modalAtp" class="fixed inset-0 hidden bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg max-w-lg transform transition-all duration-300 opacity-0 scale-75">
            <h2 class="text-xl font-semibold mb-4">Tujuan Pembelajaran</h2>
            <ul class="text-gray-700 list-disc ml-6">
                <li>Menjelaskan konsep termokimia</li>
                <li>Menjelaskan jenis-jenis sistem</li>
                <li>Menjelaskan keterkaitan antar energi, kalor dan kerja</li>
                <li>Menjelaskan reaksi eksoterm dan endoterm</li>
                <li>Menjelaskan konsep perubahan entalpi dan jenis-jenis perubahan entalpi</li>
                <li>Melakukan percobaan menggunakan kalorimeter</li>
                <li>Menentukan perubahan entalpi menggunakan kalorimeter, data perubahan entalpi pembentukan standar, hukum
                    Hess, dan data energi ikatan.</li>
            </ul>
            <button onclick="closeModal('modalAtp')" class="mt-4 text-blue-500">Tutup</button>
        </div>
    </div>

    <!-- Script to Handle Modal Open/Close with Smooth Animation -->
    <script>
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.querySelector('div').classList.remove('opacity-0', 'scale-75');
            }, 10); // Slight delay to trigger the transition
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.querySelector('div').classList.add('opacity-0', 'scale-75');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300); // Duration should match the transition duration
        }
    </script>

    <!-- Modal for Automatic Tutorial with Carousel -->
    <div id="modalTutorial" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
        <div
            class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 transform transition-all duration-300 opacity-0 scale-75">
            <button
                class="close-tutorial absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>
            <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Panduan Penggunaan Halaman</h3>

            <!-- Carousel Content -->
            <div class="carousel">
                <div class="carousel-slide text-center hidden">Langkah 1: Pada halaman ini, Anda dapat memilih kategori
                    kompetensi yang ingin dipelajari dengan mengklik gambar pada masing-masing bagian.</div>
                <div class="carousel-slide text-center hidden">Langkah 2: Setiap kategori kompetensi berisi informasi rinci
                    yang relevan dengan topik tersebut, termasuk tujuan dan keterampilan yang dibutuhkan.</div>
                <div class="carousel-slide text-center hidden">Langkah 3: Untuk menutup setiap modal informasi, klik tombol
                    "Tutup" atau klik di luar area modal.</div>
                <div class="carousel-slide text-center hidden">Langkah 4: Gunakan halaman ini sebagai panduan dalam memahami
                    berbagai kompetensi yang tersedia dalam pembelajaran kimia ini.</div>
            </div>

            <!-- Carousel Controls -->
            <div class="flex justify-between items-center mt-4">
                <button class="prev px-4 py-2 bg-gray-300 rounded-full hover:bg-gray-400">Prev</button>
                <div class="carousel-indicators flex space-x-2"></div>
                <button class="next px-4 py-2 bg-gray-300 rounded-full hover:bg-gray-400">Next</button>
            </div>

            <!-- Close Button -->
            <div class="text-center mt-6">
                <button
                    class="close-tutorial bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700 transition duration-200">Mengerti</button>
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
    </style>

    <script>
        $(document).ready(function() {
            // Show the modal automatically when the page loads
            setTimeout(function() {
                $('#modalTutorial').removeClass('hidden');
                $('#modalTutorial .transform').removeClass('opacity-0 scale-75');
                showSlide(0); // Start from the first slide
            }, 100); // Delay 1 second for a smoother experience

            // Close the modal on button click
            $('.close-tutorial').click(function() {
                $('#modalTutorial .transform').addClass('opacity-0 scale-75');
                setTimeout(() => {
                    $('#modalTutorial').addClass('hidden');
                }, 300); // Duration matches the transition
            });

            // Carousel variables
            let currentSlide = 0;
            const slides = $('#modalTutorial .carousel-slide');
            const totalSlides = slides.length;

            // Show the current slide and update indicators
            function showSlide(index) {
                slides.removeClass('active').eq(index).addClass('active');
                $('#modalTutorial .carousel-indicators .indicator').removeClass('active').eq(index).addClass(
                    'active');
                currentSlide = index;
            }

            // Generate indicators
            slides.each(function(index) {
                $('#modalTutorial .carousel-indicators').append('<div class="indicator" data-index="' +
                    index + '"></div>');
            });

            // Click indicator to go to specific slide
            $('#modalTutorial .carousel-indicators').on('click', '.indicator', function() {
                showSlide($(this).data('index'));
            });

            // Next button
            $('#modalTutorial .next').click(function() {
                const nextSlide = (currentSlide + 1) % totalSlides;
                showSlide(nextSlide);
            });

            // Previous button
            $('#modalTutorial .prev').click(function() {
                const prevSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(prevSlide);
            });

            // Show the first slide by default
            showSlide(currentSlide);
        });
    </script>
@endsection
