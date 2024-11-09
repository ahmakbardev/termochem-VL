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
@endsection
