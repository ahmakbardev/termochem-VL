@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-28">
        <div class="flex flex-col lg:flex-row lg:space-x-8">

            <!-- Sidebar Navigation -->
            <aside class="lg:w-1/4 hidden lg:block">
                <nav class="space-y-4 sticky top-28">
                    <a href="#materi1" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">Kegiatan Belajar I:
                        Konsep Dasar Termokimia</a>
                    <a href="#materi2" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">Sistem dan
                        Lingkungan</a>
                    <a href="#materi3" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">Energi dan Perubahan
                        Energi</a>
                    <a href="#materi4" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">Reaksi Eksoterm dan
                        Endoterm</a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="lg:w-3/4">
                <!-- Materi 1 -->
                <section id="materi1" class="mb-12">
                    <header class="mb-6">
                        <h1 class="text-3xl font-bold text-gray-800">Kegiatan Belajar I</h1>
                        <p class="text-gray-600 mt-2">Konsep Dasar Termokimia</p>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Energi memainkan peran penting dalam berbagai kegiatan sehari-hari kita. Misalnya, saat kita
                            memasak makanan di dapur, energi panas dari kompor mengubah bahan mentah menjadi makanan matang.
                            Ketika kita mengisi bahan bakar kendaraan, energi kimia dalam bahan bakar diubah menjadi energi
                            kinetik yang menggerakkan mesin. Contoh lainnya adalah saat menyeduh secangkir teh panas; energi
                            yang membuat air mendidih berasal dari sumber panas yang berpindah ke air. Ini menunjukkan
                            bagaimana energi dapat berubah bentuk dalam kehidupan sehari-hari. Energi juga sangat penting
                            dalam tubuh kita. Makanan yang kita makan diubah menjadi energi yang memungkinkan kita bergerak
                            dan berpikir.</p>
                        <p>Dalam konteks kimia, energi sering terlibat dalam reaksi kimia, seperti saat pembakaran kayu,
                            bensin, atau gas alam yang menghasilkan energi panas. Namun, tidak semua reaksi kimia
                            menghasilkan energi. Banyak reaksi kimia yang berlangsungnya disertai dengan penyerapan energi
                            misalnya reaksi peruraian air menjadi hidrogen dan oksigen. Energi yang menyertai suatu reaksi
                            kimia dapat merupakan energi panas, energi listrik, energi cahaya atau energi dengan jenis lain.
                            Termokimia adalah cabang ilmu kimia yang mempelajari energi panas yang terlibat dalam reaksi
                            kimia, termasuk jumlah energi yang diserap atau dilepaskan selama proses tersebut.</p>
                        <div class="flex space-x-4 mt-4">
                            <figure class="w-1/2">
                                <img src="{{ asset('assets/images/materi/teh_panas.jpg') }}" alt="Teh Panas"
                                    class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500">Gambar 1: Teh Panas<br>(sumber:
                                    kompasiana.com)</figcaption>
                            </figure>
                            <figure class="w-1/2">
                                <img src="{{ asset('assets/images/materi/pembakaran_kayu.jpg') }}" alt="Pembakaran Kayu"
                                    class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500">Gambar 2: Pembakaran Kayu<br>(sumber:
                                    kumparan.com)</figcaption>
                            </figure>
                        </div>
                    </article>
                </section>

                <!-- Materi 2 -->
                <section id="materi2" class="mb-12">
                    <header class="mb-6">
                        <h2 class="text-2xl font-semibold">Sistem dan Lingkungan</h2>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Pada saat mempelajari termokimia, kita harus paham mana yang menjadi pusat pengamatan, mana yang
                            bukan. <strong>Sistem</strong> adalah segala sesuatu yang menjadi pusat perhatian yang kita
                            pelajari perubahannya. Sedangkan yang disebut <strong>lingkungan</strong> adalah segala sesuatu
                            di luar sistem.</p>
                        <h3 class="font-semibold mt-4">Jenis-jenis Sistem</h3>
                        <ul class="list-disc ml-5">
                            <li><strong>Sistem terbuka:</strong> suatu sistem yang memungkinkan terjadinya pertukaran kalor
                                dan materi antara lingkungan dan sistem.</li>
                            <li><strong>Sistem tertutup:</strong> suatu sistem yang memungkinkan terjadinya pertukaran kalor
                                antara sistem dan lingkungannya, tetapi tidak terjadi pertukaran materi.</li>
                            <li><strong>Sistem terisolasi:</strong> suatu sistem yang tidak memungkinkan terjadinya
                                pertukaran kalor dan materi antara sistem dan lingkungan.</li>
                        </ul>
                        <div class="flex justify-center mt-4">
                            <figure class="w-2/3">
                                <img src="{{ asset('assets/images/materi/sistem_terbuka.png') }}" alt="Jenis-Jenis Sistem"
                                    class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500">Gambar 3: Sistem Terbuka, Tertutup,
                                    dan Terisolasi</figcaption>
                            </figure>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-md mt-6">
                            <h3 class="font-semibold text-lg text-gray-800">Contoh:</h3>
                            <p>Untuk mengurangi bahan bakar fosil yang tak terbarukan...</p>
                        </div>
                    </article>
                </section>

                <!-- Materi 3 -->
                <section id="materi3" class="mb-12">
                    <header class="mb-6">
                        <h2 class="text-2xl font-semibold">Energi dan Perubahan Energi</h2>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Semua benda di alam semesta memiliki energi. Energi digunakan pada saat benda berpindah tempat
                            atau berubah bentuk. Pada hukum termodinamika, dikenal istilah hukum kekekalan energi yang
                            menyatakan energi tidak dapat diciptakan atau tidak dapat dimusnahkan, energi hanya dapat
                            berubah dari bentuk yang satu ke bentuk energi yang lainnya.</p>
                        <p>Setiap materi mengandung energi yang disebut <strong>energi dalam</strong>. Energi dalam
                            merupakan total energi yang dimiliki oleh suatu benda. Besarnya energi ini tidak dapat diukur,
                            yang dapat diukur hanyalah perubahannya atau ΔE. Perubahan energi dalam ditentukan oleh keadaan
                            akhir dan keadaan awal.</p>
                        <p>Dalam termodinamika, perubahan energi dalam adalah kombinasi dari kalor yang ditransfer dan kerja
                            yang dilakukan. Sehingga, secara matematis rumus energi dalam dapat dituliskan sebagai berikut:
                        </p>
                        <p class="text-center font-semibold">ΔE = q + w</p>
                        <h3 class="font-semibold text-lg">Contoh:</h3>
                        <p>Suatu sistem menyerap kalor sebesar 300 kJ setelah melakukan kerja sebesar 125 kJ. Tentukan
                            perubahan energi yang terjadi!</p>
                        <p class="bg-gray-100 p-4 rounded-md">
                            <strong>Pembahasan:</strong><br> Diketahui q = 300 kJ, w = -125 kJ, maka ΔE = 300 kJ - 125 kJ =
                            175 kJ.
                        </p>
                    </article>
                    <aside class="bg-blue-50 p-4 rounded-md mt-6 shadow-md">
                        <h3 class="font-semibold text-lg text-blue-600">Tahukah Kamu?</h3>
                        <p>Energi, tekanan, volume, dan suhu dikatakan sebagai fungsi keadaan...</p>
                    </aside>
                </section>

                <!-- Materi 4 -->
                <section id="materi4" class="mb-12">
                    <header class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800">Reaksi Eksoterm dan Endoterm</h2>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Berdasarkan arah berpindahnya kalor dalam sistem dan lingkungan, maka reaksi dibedakan menjadi
                            dua jenis, yaitu <strong>reaksi eksoterm</strong> dan <strong>reaksi endoterm</strong>.</p>
                        <ol class="list-decimal ml-5">
                            <li>
                                <strong>Reaksi Eksoterm</strong> (berasal dari kata eks (keluar) dan therm (panas)), yaitu
                                apabila kalor berpindah dari sistem ke lingkungan, artinya sistem melepaskan kalor ke
                                lingkungan. Kalor yang dilepaskan sistem akan meningkatkan suhu lingkungan.
                            </li>
                            <li>
                                <strong>Reaksi Endoterm</strong> (kebalikan dari reaksi eksoterm), yaitu apabila kalor
                                berpindah dari lingkungan ke sistem, artinya sistem menyerap kalor dari lingkungan.
                                Penyerapan kalor oleh sistem akan menurunkan suhu lingkungan.
                            </li>
                        </ol>
                        <div class="flex justify-center mt-4">
                            <figure class="w-2/3">
                                <img src="{{ asset('assets/images/materi/2reaksi.png') }}"
                                    alt="Reaksi Eksoterm dan Endoterm" class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500">Gambar 4: Kalor diserap dari
                                    lingkungan ke sistem (ΔH = +) dan Kalor dilepas dari sistem ke lingkungan (ΔH = -)
                                </figcaption>
                            </figure>
                        </div>
                        <h3 class="font-semibold text-lg text-gray-800 mt-6">Contoh:</h3>
                        <p>Gasifikasi adalah proses konversi bahan bakar padat seperti batu bara menjadi wujud gas. Terdapat
                            empat tahap dalam suatu proses gasifikasi antara lain penguapan, pirolisis, oksidasi, dan
                            reduksi. Pada tahap oksidasi terjadi proses pembakaran menggunakan bantuan udara dan
                            menghasilkan gas yang terbakar secara sempurna. Gas karbondioksida timbul bersamaan dengan
                            energi panas. Apakah reaksi tersebut eksoterm atau endoterm?</p>
                        <p class="font-semibold mt-4">Jawaban:</p>
                        <p>Tahap oksidasi disertai dengan pelepasan gas karbondioksida dan energi panas. Pelepasan energi
                            panas menunjukkan kalor berpindah dari sistem ke lingkungan, di mana suhu lingkungan menjadi
                            meningkat sehingga dapat disimpulkan bahwa proses oksidasi pada gasifikasi termasuk reaksi
                            eksoterm.</p>
                        <ol class="list-decimal ml-5">
                            <li>
                                Bila <strong>entalpi produk > entalpi reaktan</strong>, maka ΔH bertanda positif, berarti
                                terjadi penyerapan kalor dari lingkungan ke sistem (reaksi endoterm). Contohnya reaksi
                                penguraian merkuri(II) oksida (HgO) pada suhu tinggi:
                                <p class="text-center font-semibold">energi + 2HgO(s) → 2Hg(l) + O<sub>2</sub>(g)</p>
                            </li>
                            <li>
                                Bila <strong>entalpi reaktan > entalpi produk</strong>, maka ΔH bertanda negatif, berarti
                                terjadi pelepasan kalor dari sistem ke lingkungan (reaksi eksoterm). Contohnya pembakaran
                                gas asetilena (C<sub>2</sub>H<sub>2</sub>) dalam oksigen yang melepaskan sejumlah energi
                                yang cukup besar:
                                <p class="text-center font-semibold">2C<sub>2</sub>H<sub>2</sub>(g) + 5O<sub>2</sub>(g) →
                                    4CO<sub>2</sub>(g) + 2H<sub>2</sub>O(l) + energi</p>
                            </li>
                        </ol>
                        <div class="flex justify-center mt-4">
                            <figure class="w-full flex flex-col items-center justify-center">
                                <img src="{{ asset('assets/images/materi/endo&ekso.png') }}"
                                    alt="Diagram Enthalpi Eksoterm dan Endoterm" class="w-2/3 rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500">Gambar 5: Reaksi eksoterm (kiri) dan
                                    Reaksi endoterm (kanan)</figcaption>
                            </figure>
                        </div>
                    </article>
                </section>

            </main>
        </div>
    </div>
    <script>
        // Function to handle smooth scrolling to the selected section
        function scrollToSection(event) {
            event.preventDefault();
            const targetId = event.target.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            // Calculate the offset to bring the title in the center of the viewport
            const yOffset = -window.innerHeight / 2 + targetElement.offsetHeight / 2;
            const yPosition = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({
                top: yPosition,
                behavior: 'smooth'
            });
        }

        // Attach click event listener to each link in the sidebar
        document.querySelectorAll('aside nav a').forEach(link => {
            link.addEventListener('click', scrollToSection);
        });
    </script>
@endsection
