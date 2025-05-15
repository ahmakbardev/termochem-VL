@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-28">
        <div class="flex flex-col lg:flex-row lg:space-x-8">

            <!-- Sidebar Navigation -->
            <aside class="lg:w-1/4 hidden lg:block">
                <nav class="space-y-4 sticky top-28">
                    <a href="#konsep-dasar-termokimia" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        KONSEP DASAR TERMOKIMIA: Perubahan Kalor Reaksi Kimia
                    </a>
                    <a href="#sistem-dan-lingkungan" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Sistem dan Lingkungan
                    </a>
                    <a href="#energi-dan-perubahan-energi" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Energi dan Perubahan Energi
                    </a>
                    <a href="#reaksi-kimia" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Reaksi Eksoterm dan Endoterm
                    </a>
                    <a href="#reaksi-termokimia" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Persamaan Termokimia
                    </a>
                    <a href="#jenis-perubahan-entalpi" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Jenis-Jenis Perubahan Entalpi
                    </a>
                    <a href="#penentuan-perubahan-entalpi" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        PENENTUAN PERUBAHAN ENTALPI: Berdasarkan Data Percobaan
                    </a>
                    <a href="#berdasarkan-hukum-hess" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Berdasarkan Hukum Hess
                    </a>
                    <a href="#berdasarkan-entalpi-pembentukan"
                        class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Berdasarkan Data Entalpi Pembentukan
                    </a>
                    <a href="#berdasarkan-energi-ikatan" class="block px-4 py-2 bg-gray-100 rounded-md hover:bg-gray-200">
                        Berdasarkan Data Energi Ikatan
                    </a>
                </nav>
            </aside>



            <!-- Main Content -->
            <main class="lg:w-3/4">
                <section id="konsep-dasar-termokimia" class="mb-12">
                    <header class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Konsep Dasar Termokimia</h2>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Energi dalam termokimia sangat berkaitan dengan berbagai aspek kehidupan sehari-hari kita. Proses
                            pembakaran, seperti saat menggunakan bahan bakar LPG untuk memasak, merupakan contoh nyata di
                            mana energi kimia dalam molekul bahan bakar diubah menjadi energi panas dan cahaya. Reaksi kimia
                            ini dapat dibedakan menjadi eksotermik, yang melepaskan panas, dan endotermik, yang menyerap
                            panas.</p>

                        <p>Prinsip-prinsip termokimia juga terlihat dalam pencernaan makanan, di mana energi kimia dari
                            makanan diubah menjadi energi yang dapat digunakan oleh tubuh. Dengan demikian, pemahaman
                            tentang termokimia membantu kita memanfaatkan energi secara efisien dan memahami reaksi yang
                            terjadi dalam kehidupan sehari-hari.</p>

                        <p>Namun, tidak semua reaksi kimia menghasilkan energi. Termokimia adalah cabang ilmu kimia yang
                            mempelajari energi panas yang terlibat dalam reaksi kimia, termasuk jumlah energi yang diserap
                            atau dilepaskan selama proses tersebut.</p>
                    </article>
                </section>

                <section id="perubahan-kalor-reaksi-kimia" class="mb-12">
                    <header class="mb-6">
                        <h3 class="text-xl font-bold text-white bg-orange-500 inline-block px-4 py-2 rounded-md shadow-md">
                            Perubahan Kalor Reaksi Kimia</h3>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Reaksi kimia dapat disertai penyerapan atau pelepasan kalor. Dengan kata lain, kalor dapat
                            berpindah. Kemanakah kalor berpindah? Apakah besar kalor yang diserap atau dilepaskan suatu
                            reaksi dapat ditemukan? Ayo, simak uraian berikut untuk menentukan jawabannya.</p>
                    </article>

                    <div class="grid lg:grid-cols-2 gap-6 mt-6">
                        <div class="bg-blue-100 p-4 rounded-md flex flex-col justify-between">
                            <p>Ketika secangkir teh panas didiamkan di atas meja, suhu teh perlahan-lahan turun seiring
                                waktu hingga mencapai suhu ruangan. Ini merupakan contoh dari perpindahan kalor dalam
                                kehidupan sehari-hari. Perubahan kalor adalah peristiwa di mana energi panas berpindah dari
                                satu benda ke benda lain atau ke lingkungan sekitarnya.</p>
                            <figure class="mt-4">
                                <img src="{{ asset('assets/images/materi/teh-panas.png') }}" alt="Teh Panas"
                                    class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-600 mt-2">Gambar 1. Teh Panas</figcaption>
                            </figure>
                        </div>

                        <div class="bg-blue-100 p-4 rounded-md flex flex-col justify-between">
                            <p>Pada malam hari saat cuaca dingin, sekelompok siswa sedang berkemah. Mereka menyalakan api
                                unggun menggunakan kayu bakar. Ketika api mulai menyala, mereka duduk melingkar di
                                sekitarnya.</p>
                            <p><strong>Mengapa</strong> kita merasa hangat saat berada di dekat api unggun, meskipun tidak
                                menyentuh apinya?</p>
                            <figure class="mt-4">
                                <img src="{{ asset('assets/images/materi/api-unggun.png') }}" alt="Api Unggun"
                                    class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-600 mt-2">Gambar 2. Api Unggun</figcaption>
                            </figure>
                        </div>
                    </div>
                </section>


                <section id="sistem-dan-lingkungan" class="mb-12">
                    <header class="mb-6">
                        <h3 class="text-xl font-bold text-white bg-orange-500 inline-block px-4 py-2 rounded-md shadow-md">
                            Sistem dan Lingkungan</h3>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Sistem adalah bagian tertentu dari alam yang menjadi pusat perhatian sedangkan lingkungan adalah
                            segala sesuatu yang berada di luar sistem. Sistem dan lingkungan dapat mengalami suatu interaksi
                            berupa perpindahan kalor.</p>

                        <p>Berdasarkan interaksi antara sistem dan lingkungan, sistem dibedakan menjadi tiga jenis, yaitu
                            sistem terbuka, sistem tertutup, dan terisolasi. Untuk memahami jenis-jenis sistem lebih lanjut,
                            simak gambar berikut:</p>

                        <div class="flex justify-center my-6">
                            <figure class="w-full md:w-2/3">
                                <img src="{{ asset('assets/images/materi/sistem.png') }}" alt="Jenis Sistem Termokimia"
                                    class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500 mt-2">A. Sistem terbuka &nbsp;&nbsp; B.
                                    Sistem tertutup &nbsp;&nbsp; C. Sistem terisolasi</figcaption>
                            </figure>
                        </div>

                        <p><strong>Sistem dibedakan menjadi tiga macam, yaitu:</strong></p>
                        <ol class="list-decimal ml-6">
                            <li>Sistem terbuka, suatu sistem yang memungkinkan terjadinya pertukaran kalor dan zat (materi)
                                antara lingkungan dan sistem.</li>
                            <li>Sistem tertutup, suatu sistem yang memungkinkan terjadinya pertukaran kalor antara sistem
                                dan lingkungannya, tetapi tidak terjadi pertukaran materi.</li>
                            <li>Sistem terisolasi, suatu sistem yang tidak memungkinkan terjadinya pertukaran kalor dan
                                materi antara sistem dan lingkungan.</li>
                        </ol>

                        <div class="flex justify-center my-6">
                            <figure class="w-full md:w-2/3">
                                <img src="{{ asset('assets/images/materi/teko.png') }}" alt="Teko Memanas"
                                    class="w-full rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500 mt-2">Gambar: Teko berisi air
                                    dipanaskan di atas kompor</figcaption>
                            </figure>
                        </div>
                    </article>

                    <aside class="bg-blue-100 p-4 rounded-md mt-6 shadow-md">
                        <h4 class="text-xl font-semibold mb-2">Investigasi</h4>
                        <p>Ketika teko berisi air diletakkan di atas kompor dan dipanaskan, beberapa perubahan terjadi yang
                            melibatkan interaksi antara sistem (teko dan air) dan lingkungan (sumber panas dan udara
                            sekitar).</p>
                        <h5 class="mt-4 font-semibold">Pertanyaan:</h5>
                        <ol class="list-decimal ml-6">
                            <li>Apa saja komponen utama dalam sistem yang terdiri dari teko dan air?</li>
                            <li>Berdasarkan penjelasan tersebut, gambar di atas termasuk sistem apa? Jelaskan.</li>
                        </ol>
                    </aside>
                </section>


                <section id="energi-dan-perubahan-energi" class="mb-12">
                    <header class="mb-6">
                        <h3 class="text-xl font-bold text-white bg-orange-500 inline-block px-4 py-2 rounded-md shadow-md">
                            Energi dan Perubahan Energi</h3>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Seperti penjelasan sebelumnya, energi dapat mengalami perubahan. Begitu pula energi yang terlibat
                            dalam suatu sistem. Setiap materi mengandung energi yang disebut energi dalam. Energi dalam
                            merupakan total energi yang dimiliki oleh suatu benda. Besarnya energi ini tidak dapat diukur,
                            yang dapat diukur hanyalah perubahannya atau <strong>ΔE</strong>. Perubahan energi dalam
                            ditentukan oleh keadaan akhir dan keadaan awal.</p>

                        <p>Dalam termodinamika, perubahan energi dalam adalah kombinasi dari kalor yang ditransfer dan kerja
                            yang dilakukan. Sehingga secara matematis rumus energi dalam dapat dituliskan sebagai berikut:
                        </p>

                        <div
                            class="text-center font-semibold border border-blue-400 rounded-md p-4 my-4 w-fit mx-auto bg-blue-50">
                            ΔE = q + w</div>

                        <p><strong>Keterangan:</strong><br>
                            ΔE = perubahan energi dalam sistem<br>
                            q = jumlah kalor yang diserap atau dilepaskan sistem<br>
                            w = kerja yang dilakukan sistem</p>

                        <p>Untuk menentukan nilai q dan w digunakan aturan berikut:</p>
                        <ul class="list-disc ml-6">
                            <li>q bernilai positif (+) jika sistem menyerap kalor (q &gt; 0)</li>
                            <li>q bernilai negatif (−) jika sistem melepas kalor (q &lt; 0)</li>
                            <li>w bernilai positif (+) jika sistem menerima kerja (w &gt; 0)</li>
                            <li>w bernilai negatif (−) jika sistem melakukan kerja (w &lt; 0)</li>
                        </ul>
                    </article>

                    <div class="bg-blue-100 p-4 rounded-md mt-6 shadow-md">
                        <h4 class="text-lg font-bold">Contoh soal:</h4>
                        <p>Suatu sistem menyerap kalor sebesar 150 J setelah melakukan kerja 100 J. Tentukan perubahan
                            energi dalam sistem?</p>

                        <h5 class="font-semibold mt-2">Pembahasan:</h5>
                        <p>
                            Diketahui: <br>
                            Sistem menyerap kalor, artinya q = +150 J<br>
                            Sistem melakukan kerja, artinya w = −100 J<br><br>
                            ΔE = q + w = 150 J + (−100 J) = <strong>50 J</strong><br>
                            Jadi, perubahan energi dalam sistem tersebut sebesar <strong>+50 J</strong>
                        </p>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-md mt-6 shadow-md">
                        <h4 class="text-lg font-bold">Latihan soal</h4>
                        <ol class="list-decimal ml-6">
                            <li>Suatu sistem menyerap kalor sebesar 300 kJ setelah melakukan kerja sebesar 125 kJ. Tentukan
                                perubahan energi yang terjadi!</li>
                            <li>Kerja sebesar 70 J diberikan pada suatu gas. Hasilnya gas tersebut dapat memanfaatkan dengan
                                membebaskan kalor sebesar 20 J. Berapakah perubahan energi dalam sistem?</li>
                        </ol>
                    </div>

                    <article class="prose lg:prose-lg max-w-none mt-12">
                        <p>Dalam tekanan konstan, kerja yang dilakukan oleh gas ketika volumenya berubah diberikan oleh
                            persamaan:</p>
                        <div
                            class="text-center font-semibold border border-blue-400 rounded-md p-4 my-4 w-fit mx-auto bg-blue-50">
                            w = pΔV</div>

                        <p>Karena reaksi kimia biasa terjadi pada tekanan tetap dan tidak terjadi perubahan volume, maka
                            nilai ΔV = 0, maka kerja (w) akan bernilai = 0. Sehingga besarnya ΔE akan ditunjukan oleh
                            besarnya kalor yang dimiliki oleh benda tersebut, secara matematis dituliskan:</p>

                        <div
                            class="text-center font-semibold border border-blue-400 rounded-md p-4 my-4 w-fit mx-auto bg-blue-50">
                            ΔE = q</div>

                        <p>Pada termodinamika, total energi dalam (E) dikenal dengan istilah <strong>Entalpi (H)</strong>,
                            yaitu jumlah total energi dari suatu sistem yang diukur pada kondisi tekanan tetap. Sama dengan
                            energi dalam, entalpi tidak dapat diukur secara langsung, yang dapat ditentukan adalah perubahan
                            entalpi, ΔH. Dengan demikian, besarnya perubahan entalpi merupakan besarnya nilai kalor yang
                            dimiliki oleh suatu sistem.</p>

                        <div
                            class="text-center font-semibold border border-blue-400 rounded-md p-4 my-4 w-fit mx-auto bg-blue-50">
                            ΔH = q</div>

                        <p>Besarnya perubahan entalpi berarti selisih antara entalpi akhir dan entalpi awal. Secara
                            matematis dapat dituliskan:</p>

                        <div
                            class="text-center font-semibold border border-blue-400 rounded-md p-4 my-4 w-fit mx-auto bg-blue-50">
                            ΔH = H akhir − H awal</div>
                    </article>
                </section>



                <!-- Materi 4 -->
                {{-- <section id="materi4" class="mb-12">
                    <header class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800">Reaksi Eksoterm dan Endoterm</h2>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p><span class="font-semibold">Berdasarkan arah</span> berpindahnya kalor dalam sistem dan
                            lingkungan, maka reaksi dibedakan menjadi dua jenis, yaitu <strong>reaksi eksoterm</strong> dan
                            <strong>reaksi endoterm</strong>.
                        </p>
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
                                <figcaption class="text-sm text-center text-gray-500">Gambar 4. Kalor diserap dari
                                    lingkungan ke sistem (ΔH = +) dan Kalor dilepas dari sistem ke lingkungan (ΔH = −)
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

                        <ol class="list-decimal ml-5 mt-4">
                            <li>
                                Bila <strong>entalpi produk &gt; entalpi reaktan</strong>, maka ΔH bertanda
                                <strong>positif</strong>, berarti terjadi penyerapan kalor dari lingkungan ke sistem (reaksi
                                endoterm). Contohnya reaksi penguraian merkuri(II) oksida (HgO) pada suhu tinggi:
                                <p class="text-center font-semibold mt-2">energi + 2HgO(s) → 2Hg(l) + O<sub>2</sub>(g)</p>
                            </li>
                            <li class="mt-4">
                                Bila <strong>entalpi reaktan &gt; entalpi produk</strong>, maka ΔH bertanda
                                <strong>negatif</strong>, berarti terjadi pelepasan kalor dari sistem ke lingkungan (reaksi
                                eksoterm). Contohnya pembakaran gas asetilena (C<sub>2</sub>H<sub>2</sub>) dalam oksigen
                                yang melepaskan sejumlah energi yang cukup besar:
                                <p class="text-center font-semibold mt-2">2C<sub>2</sub>H<sub>2</sub>(g) +
                                    5O<sub>2</sub>(g)
                                    → 4CO<sub>2</sub>(g) + 2H<sub>2</sub>O(l) + energi</p>
                            </li>
                        </ol>

                        <div class="flex justify-center mt-6">
                            <figure class="w-full flex flex-col items-center justify-center">
                                <img src="{{ asset('assets/images/materi/endo&ekso.png') }}"
                                    alt="Diagram Enthalpi Eksoterm dan Endoterm" class="w-2/3 rounded-md shadow-md">
                                <figcaption class="text-sm text-center text-gray-500">Gambar 5. Reaksi eksoterm (kiri) dan
                                    Reaksi endoterm (kanan)</figcaption>
                            </figure>
                        </div>
                    </article>
                </section> --}}
                <section id="reaksi-kimia" class="mt-20 space-y-12">
                    {{-- Judul dan Penjelasan Eksoterm & Endoterm --}}
                    <div>
                        <h3 class="text-xl font-bold text-white bg-orange-500 inline-block px-4 py-2 rounded-md shadow-md">
                            Reaksi Eksoterm dan Reaksi Endoterm</h3>
                        <p class="mt-4 text-gray-700">
                            Berdasarkan perpindahan kalor yang terjadi antara sistem dan lingkungan, reaksi dibedakan
                            menjadi dua, yaitu reaksi eksoterm dan reaksi endoterm.
                        </p>
                        <ol class="mt-2 space-y-2 list-decimal pl-4 text-gray-700">
                            <li>
                                <strong>Reaksi Eksoterm</strong> yaitu apabila kalor berpindah dari sistem ke lingkungan,
                                artinya sistem melepaskan kalor. Hal ini akan meningkatkan suhu lingkungan.
                            </li>
                            <li>
                                <strong>Reaksi Endoterm</strong> yaitu apabila kalor berpindah dari lingkungan ke sistem,
                                artinya sistem menyerap kalor. Hal ini akan menurunkan suhu lingkungan.
                            </li>
                        </ol>
                        <div class="flex flex-col lg:flex-row gap-6 mt-6 items-center justify-center">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/materi/ekso.png') }}" alt="Reaksi Eksoterm"
                                    class="w-full max-w-xs mx-auto">
                                <p class="text-sm mt-2">Kalor dilepas dari sistem ke lingkungan (ΔH = -)</p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('assets/images/materi/endo.png') }}" alt="Reaksi Endoterm"
                                    class="w-full max-w-xs mx-auto">
                                <p class="text-sm mt-2">Kalor diserap dari lingkungan ke sistem (ΔH = +)</p>
                            </div>
                        </div>
                    </div>

                    {{-- Contoh Eksoterm: Pembakaran Kayu --}}
                    <div>
                        <h3 class="text-xl font-bold text-orange-600">Contoh Reaksi Eksoterm & Reaksi Endoterm</h3>
                        <div class="text-center mt-4">
                            <img src="{{ asset('assets/images/materi/kayu.png') }}" alt="Pembakaran Kayu"
                                class="mx-auto rounded-md shadow-md w-full max-w-lg">
                            <p class="text-sm italic mt-1">Gambar 3. Pembakaran Kayu</p>
                        </div>
                        <div class="mt-4 bg-blue-50 p-4 rounded-md text-gray-700">
                            <p>Ketika bahan bakar (seperti kayu) dibakar, terjadi reaksi kimia yang melepaskan energi dalam
                                bentuk panas dan cahaya. Misalnya, saat kayu dibakar dalam perapian, panas yang dihasilkan
                                membuat lingkungan sekitar terasa hangat.</p>
                            <h4 class="font-bold mt-3">Mengapa pembakaran dianggap sebagai reaksi eksoterm?</h4>
                            <p><strong>Pembahasan:</strong> Pembakaran kayu dianggap sebagai reaksi eksoterm karena selama
                                proses tersebut, kayu bereaksi dengan oksigen dan melepaskan energi. Kayu terdiri dari
                                <strong>selulosa</strong>, <strong>lignin</strong>, dan <strong>hemiselulosa</strong>.
                                Reaksi:
                            </p>
                            <p class="font-mono bg-white p-2 rounded mt-2">
                                Kayu + O<sub>2</sub> → CO<sub>2</sub> + H<sub>2</sub>O + Energi (panas dan cahaya)
                            </p>
                        </div>
                    </div>

                    {{-- Contoh Endoterm: Fotosintesis --}}
                    <div class="mt-8">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/materi/fotosin.png') }}" alt="Fotosintesis"
                                class="mx-auto rounded-md shadow-md w-full max-w-md">
                            <p class="text-sm italic mt-1">Gambar 4. Proses Fotosintesis</p>
                        </div>
                        <div class="mt-4 bg-blue-50 p-4 rounded-md text-gray-700">
                            <p>Pada tanaman, proses fotosintesis melibatkan penyerapan energi matahari untuk mengubah karbon
                                dioksida dan air menjadi glukosa dan oksigen. Karena membutuhkan energi, fotosintesis
                                merupakan reaksi <strong>endoterm</strong>.</p>
                            <h4 class="font-bold mt-3">Bagaimana tanaman menyerap energi dari matahari?</h4>
                            <p>Tanaman menyerap cahaya melalui klorofil di daun untuk memicu reaksi kimia dalam kloroplas.
                            </p>
                        </div>
                    </div>

                    {{-- Penjelasan Grafik Entalpi --}}
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-orange-600">Perbedaan ΔH dan Contoh Reaksi</h3>
                        <ol class="list-decimal pl-4 text-gray-700 space-y-3 mt-3">
                            <li>
                                Bila entalpi produk &gt; entalpi reaktan, maka <strong>ΔH positif</strong>, artinya reaksi
                                endoterm. Contoh:
                                <p class="font-mono bg-white p-2 rounded mt-1">energi + 2HgO(s) → 2Hg(l) + O<sub>2</sub>(g)
                                </p>
                            </li>
                            <li>
                                Bila entalpi reaktan &gt; entalpi produk, maka <strong>ΔH negatif</strong>, artinya reaksi
                                eksoterm. Contoh:
                                <p class="font-mono bg-white p-2 rounded mt-1">2C<sub>2</sub>H<sub>2</sub>(g) +
                                    5O<sub>2</sub>(g) → 4CO<sub>2</sub>(g) + 2H<sub>2</sub>O(l) + energi</p>
                            </li>
                        </ol>

                        <div class="flex flex-col lg:flex-row gap-6 mt-6 items-center justify-center">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/materi/eksoendo.png') }}" alt="Diagram Eksoterm"
                                    class="mx-auto w-full max-w-xs">
                            </div>
                        </div>
                        <p class="text-center mt-2 text-sm italic">Gambar 5. Diagram Reaksi Eksoterm dan Reaksi Endoterm
                        </p>
                    </div>
                </section>


                <section id="reaksi-termokimia" class="py-12">
                    <div class="container mx-auto px-4">
                        <h3 class="text-xl font-bold text-white bg-orange-500 inline-block px-4 py-2 rounded-md shadow-md">
                            Persamaan Termokimia</h3>
                        <p class="mb-4">
                            Penulisan reaksi kimia yang menyertakan perubahan entalpi disebut persamaan termokimia.
                            ΔH harus selalu ditampilkan untuk mengetahui energi yang dilepas atau diserap.
                        </p>
                        <pre class="bg-gray-100 p-4 rounded mb-6 font-semibold">
                  CH₄(g) + 2O₂(g) → CO₂(g) + 2H₂O(l)      ΔH = –890,4 kJ/mol
                      </pre>

                        <h3 class="text-2xl font-semibold mb-2">Contoh Soal</h3>
                        <div class="bg-blue-50 p-4 rounded mb-6">
                            <p class="mb-2 font-semibold">Soal:</p>
                            <p class="mb-4">Penguraian 1 mol kloroform (CH₃Cl) melepaskan kalor 80,84 kJ. Hitung ΔH untuk
                                pembentukan 2 mol kloroform!</p>
                            <p class="mb-2 font-semibold">Jawaban:</p>
                            <pre class="bg-white p-2 rounded mb-2">CH₃Cl(g) + C(s) → 3/2 H₂(g) + 1/2 Cl₂(g) + C(s)      ΔH = –80,84 kJ/mol</pre>
                            <p>Pembentukan balik:</p>
                            <pre class="bg-white p-2 rounded mb-2">3/2 H₂(g) + 1/2 Cl₂(g) + C(s) → CH₃Cl(g) + C(s)      ΔH = +80,84 kJ/mol</pre>
                            <p>Untuk 2 mol: ΔH = 2 × 80,84 = <strong>+161,68 kJ</strong></p>
                        </div>

                        <h3 class="text-2xl font-semibold mb-2">Latihan Soal</h3>
                        <p>
                            Bensin adalah zat cair yang diperoleh dari hasil pemurnian minyak bumi yang dapat
                            digunakan sebagai bahan bakar motor. Hal ini karena bensin berfungsi sebagai sumber
                            energi agar motor dapat bergerak. Pada reaksi pembakaran isooktana (bensin)
                            dihasilkan energi sebesar 5450 kJ/mol serta gas karbon dioksida dan uap air. Tuliskan persamaan
                            termokimia
                            pembakarannya!
                        </p>
                    </div>
                </section>

                <section id="jenis-perubahan-entalpi" class="mb-12">
                    <header class="mb-6 text-center">
                        <h2 class="text-3xl font-bold text-gray-800">Jenis-Jenis Perubahan Entalpi</h2>
                    </header>

                    <article class="prose lg:prose-lg max-w-none">
                        <p>Perubahan entalpi reaksi yang diukur pada temperatur 25°C (298 K) dan tekanan 1 atm disepakati
                            sebagai perubahan entalpi standar, dinyatakan dengan simbol ΔH⁰. Keadaan standar ini diperlukan
                            karena pengukuran pada suhu dan tekanan yang berbeda akan menghasilkan harga perubahan entalpi
                            yang berbeda pula. Satuan yang digunakan untuk menyatakan perubahan entalpi adalah kJ. Perubahan
                            entalpi dalam molar adalah kJ/mol.</p>

                        <p>Entalpi perubahan kimia terdiri dari entalpi pembentukan standar, entalpi atomisasi standar,
                            entalpi pembakaran standar, entalpi netralisasi standar, dan entalpi pelarutan standar.</p>

                        <h3 class="text-xl font-bold text-white bg-orange-500 inline-block px-4 py-2 rounded">Entalpi
                            Perubahan Kimia</h3>
                        <p>Data entalpi perubahan kimia biasanya diberikan dalam keadaan standar. Entalpi standar perubahan
                            kimia terdiri dari entalpi pembentukan standar, entalpi atomisasi standar, entalpi pembakaran
                            standar, entalpi netralisasi standar, dan entalpi pelarutan standar.</p>

                        <h4 class="text-lg font-semibold mt-6">1. Entalpi penguraian standar (ΔH<sub>d</sub><sup>o</sup>)
                        </h4>
                        <p>Perubahan entalpi penguraian standar (ΔH<sub>d</sub><sup>o</sup>) adalah kebalikan dari perubahan
                            entalpi pembentukan standar (ΔH<sub>f</sub><sup>0</sup>), sehingga nilai
                            ΔH<sub>d</sub><sup>o</sup> = –ΔH<sub>f</sub><sup>0</sup>. Oleh karena itu reaksi penguraian MgO
                            dan MgCO<sub>3</sub> dinyatakan dengan persamaan termokimia sebagai berikut:</p>

                        <p>MgO(s) → Mg(s) + ½ O<sub>2</sub>(g) &nbsp;&nbsp;&nbsp; ΔH<sub>d</sub><sup>o</sup> = +601,70
                            kJ/mol MgO</p>
                        <p>MgCO<sub>3</sub>(s) → Mg(s) + C(s) + 3/2 O<sub>2</sub>(g) &nbsp;&nbsp;&nbsp;
                            ΔH<sub>d</sub><sup>o</sup> = +1.095,8 kJ/mol MgCO<sub>3</sub></p>

                        <div class="bg-blue-50 p-4 rounded-lg text-sm mt-4">
                            <p><strong>Catatan:</strong></p>
                            <ul class="list-disc ml-6">
                                <li>ΔH<sub>d</sub><sup>o</sup> adalah kebalikan dari ΔH<sub>f</sub><sup>0</sup>, jika hasil
                                    ΔH<sub>d</sub><sup>o</sup> bertanda negatif maka akan ΔH<sub>f</sub><sup>0</sup>
                                    bertanda positif</li>
                                <li>Koefisien zat atau senyawa yang diuraikan harus 1</li>
                                <li>Zat atau senyawa harus terurai menjadi unsur-unsurnya</li>
                            </ul>
                            <p class="mt-2"><strong>Contoh:</strong></p>
                            <p>Diketahui = ΔH<sub>d</sub><sup>o</sup> dari senyawa NH<sub>3</sub> = +46 kJ/mol</p>
                            <p>NH<sub>3</sub> → ½ N<sub>2</sub>(g) + 3/2 H<sub>2</sub>(g) &nbsp; ΔH<sub>d</sub><sup>o</sup>
                                = +46 kJ/mol</p>
                        </div>


                        <h4 class="text-lg font-semibold mt-6">2. Entalpi Pembakaran Standar (ΔH<sub>c</sub><sup>o</sup>)
                        </h4>
                        <p>Entalpi pembakaran standar adalah kalor yang dibutuhkan dalam pembakaran sempurna 1 mol senyawa
                            atau unsur dengan oksigen (O<sub>2</sub>) dari udara, yang diukur pada keadaan standar.
                            Pembakaran dikatakan sempurna jika:</p>
                        <ol class="list-decimal ml-6">
                            <li>karbon (C) terbakar sempurna menjadi CO<sub>2</sub></li>
                            <li>hidrogen (H) terbakar sempurna menjadi H<sub>2</sub>O</li>
                            <li>belerang (S) terbakar sempurna menjadi SO<sub>2</sub></li>
                            <li>senyawa hidrokarbon (C<sub>x</sub>H<sub>y</sub>) terbakar sempurna menurut reaksi: <br>
                                C<sub>x</sub>H<sub>y</sub> + O<sub>2</sub> → CO<sub>2</sub> + H<sub>2</sub>O (belum setara)
                            </li>
                        </ol>

                        <p>Entalpi pembakaran standar beberapa senyawa ditabelkan sebagai berikut.</p>

                        <table class="table-auto border text-sm my-4">
                            <thead>
                                <tr>
                                    <th class="border px-2 py-1">Senyawa</th>
                                    <th class="border px-2 py-1">ΔH<sub>c</sub><sup>o</sup> (kJ/mol)</th>
                                    <th class="border px-2 py-1">Senyawa</th>
                                    <th class="border px-2 py-1">ΔH<sub>c</sub><sup>o</sup> (kJ/mol)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-2 py-1">H<sub>2</sub>(g)</td>
                                    <td class="border px-2 py-1">-286</td>
                                    <td class="border px-2 py-1">C<sub>2</sub>H<sub>2</sub>(g)</td>
                                    <td class="border px-2 py-1">-1300</td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1">C(diamond)</td>
                                    <td class="border px-2 py-1">-395,388</td>
                                    <td class="border px-2 py-1">C<sub>2</sub>H<sub>4</sub>(g)</td>
                                    <td class="border px-2 py-1">-1411</td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1">C(grafit)</td>
                                    <td class="border px-2 py-1">-393,505</td>
                                    <td class="border px-2 py-1">C<sub>2</sub>H<sub>5</sub>OH(l)</td>
                                    <td class="border px-2 py-1">-1367</td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1">CH<sub>4</sub>(g)</td>
                                    <td class="border px-2 py-1">-890</td>
                                    <td class="border px-2 py-1">C<sub>8</sub>H<sub>18</sub>(l)</td>
                                    <td class="border px-2 py-1">-5450</td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1">C<sub>2</sub>H<sub>6</sub>(g)</td>
                                    <td class="border px-2 py-1">-1560</td>
                                    <td class="border px-2 py-1">C<sub>6</sub>H<sub>12</sub>O<sub>6</sub>(s)</td>
                                    <td class="border px-2 py-1">-2803</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-blue-50 p-4 rounded-lg text-sm mt-4">
                            <p><strong>Catatan:</strong></p>
                            <ul class="list-disc ml-6">
                                <li>ΔH<sub>c</sub><sup>o</sup> selalu bernilai negatif</li>
                                <li>Koefisien zat yang dikabar selalu 1</li>
                                <li>Reaksi pembakaran selalu melibatkan gas oksigen maka gas harus direaksikan dengan
                                    O<sub>2</sub></li>
                            </ul>
                            <p class="mt-2"><strong>Contoh:</strong></p>
                            <p>Diketahui: CH<sub>4</sub> = -890,5 kJ/mol</p>
                            <p>CH<sub>4</sub>(g) + 2O<sub>2</sub>(g) → CO<sub>2</sub>(g) + 2H<sub>2</sub>O(l)
                                &nbsp;&nbsp;&nbsp; ΔH<sub>c</sub><sup>o</sup> = -890,5 kJ/mol</p>
                        </div>


                        <h4 class="text-lg font-semibold mt-6">3. Entalpi Pembakaran Standar (ΔH<sub>c</sub><sup>0</sup>)
                        </h4>
                        <p>
                            Entalpi pembakaran standar adalah kalor yang dibutuhkan dalam pembakaran sempurna 1 mol senyawa
                            atau unsur dengan oksigen (O<sub>2</sub>) dari udara, yang diukur pada keadaan standar.
                            Pembakaran dikatakan sempurna jika:
                        </p>
                        <ol class="list-decimal ml-6">
                            <li>karbon (C) terbakar sempurna menjadi CO<sub>2</sub></li>
                            <li>hidrogen (H) terbakar sempurna menjadi H<sub>2</sub>O</li>
                            <li>belerang (S) terbakar sempurna menjadi SO<sub>2</sub></li>
                            <li>senyawa hidrokarbon (C<sub>x</sub>H<sub>y</sub>) terbakar sempurna menurut reaksi: <br>
                                <strong>C<sub>x</sub>H<sub>y</sub> + O<sub>2</sub> → CO<sub>2</sub> +
                                    H<sub>2</sub>O</strong> (belum setara)
                            </li>
                        </ol>

                        <p class="mt-4">Entalpi pembakaran standar beberapa senyawa ditabelkan sebagai berikut.</p>

                        <div class="flex flex-col md:flex-row gap-4 my-4">
                            <!-- Tabel kiri -->
                            <table class="table-auto border text-sm w-full md:w-1/2">
                                <thead>
                                    <tr>
                                        <th class="border px-2 py-1 bg-orange-100">Senyawa</th>
                                        <th class="border px-2 py-1 bg-orange-100">ΔH<sup>c</sup><sup>0</sup> (kJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-2 py-1">H<sub>2</sub>(g)</td>
                                        <td class="border px-2 py-1">-286</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">C(diamond)</td>
                                        <td class="border px-2 py-1">-395.388</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">C(grafit)</td>
                                        <td class="border px-2 py-1">-393,505</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">CH<sub>4</sub>(g)</td>
                                        <td class="border px-2 py-1">-890</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">C<sub>2</sub>H<sub>6</sub>(g)</td>
                                        <td class="border px-2 py-1">-1560</td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Tabel kanan -->
                            <table class="table-auto border text-sm w-full md:w-1/2">
                                <thead>
                                    <tr>
                                        <th class="border px-2 py-1 bg-orange-100">Senyawa</th>
                                        <th class="border px-2 py-1 bg-orange-100">ΔH<sup>c</sup><sup>0</sup> (kJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-2 py-1">C<sub>2</sub>H<sub>2</sub>(g)</td>
                                        <td class="border px-2 py-1">-1300</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">C<sub>2</sub>H<sub>4</sub>(g)</td>
                                        <td class="border px-2 py-1">-1411</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">C<sub>2</sub>H<sub>5</sub>OH(l)</td>
                                        <td class="border px-2 py-1">-1367</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">C<sub>8</sub>H<sub>18</sub>(l)</td>
                                        <td class="border px-2 py-1">-5450</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-2 py-1">C<sub>6</sub>H<sub>12</sub>O<sub>6</sub>(s)</td>
                                        <td class="border px-2 py-1">-2803</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="bg-blue-50 p-4 rounded-lg text-sm">
                            <p><strong>Catatan:</strong></p>
                            <ul class="list-disc ml-6">
                                <li>ΔH<sup>c</sup><sup>0</sup> selalu bernilai negatif</li>
                                <li>Koefisien zat yang di kabar selalu 1</li>
                                <li>Reaksi pembakaran selalu melibatkan gas oksigen maka gas harus di reaksikan oksigen
                                    dengan O<sub>2</sub></li>
                            </ul>
                            <p class="mt-2"><strong>Contoh:</strong></p>
                            <p>Diketahui: CH<sub>4</sub> = -890,5 kJ/mol</p>
                            <p>CH<sub>4</sub> (g) + 2H<sub>2</sub>O (g) → CO<sub>2</sub> (g) + 2H<sub>2</sub>O (l)
                                &nbsp;&nbsp;&nbsp; ΔH<sup>c</sup><sup>0</sup> = -890,5 kJ/mol</p>
                        </div>
                        <h4 class="text-lg font-semibold mt-6">4. Entalpi Penetralan Standar
                            (ΔH<sub>neut</sub><sup>0</sup>)</h4>
                        <p>
                            Entalpi penetralan standar adalah kalor yang dibutuhkan dalam reaksi penetralan asam
                            (H<sup>+</sup>) oleh basa (OH<sup>−</sup>) membentuk 1 mol garam dan 1 mol air yang diukur pada
                            keadaan standar. Entalpi penetralan standar beberapa senyawa ditabelkan sebagai berikut.
                        </p>

                        <table class="table-auto border text-sm my-4">
                            <thead>
                                <tr>
                                    <th class="border px-3 py-1 bg-orange-100">Asam</th>
                                    <th class="border px-3 py-1 bg-orange-100">Basa</th>
                                    <th class="border px-3 py-1 bg-orange-100">ΔH<sub>neut</sub><sup>0</sup> (kJ/mol)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-3 py-1">HCl(aq)</td>
                                    <td class="border px-3 py-1">NaOH(aq)</td>
                                    <td class="border px-3 py-1">-57,1</td>
                                </tr>
                                <tr>
                                    <td class="border px-3 py-1">HCl(aq)</td>
                                    <td class="border px-3 py-1">KOH(aq)</td>
                                    <td class="border px-3 py-1">-57,1</td>
                                </tr>
                                <tr>
                                    <td class="border px-3 py-1">HCl(aq)</td>
                                    <td class="border px-3 py-1">NH<sub>3</sub>(aq)</td>
                                    <td class="border px-3 py-1">-52,2</td>
                                </tr>
                                <tr>
                                    <td class="border px-3 py-1">HNO<sub>3</sub>(aq)</td>
                                    <td class="border px-3 py-1">NaOH(aq)</td>
                                    <td class="border px-3 py-1">-57,3</td>
                                </tr>
                                <tr>
                                    <td class="border px-3 py-1">HNO<sub>3</sub>(aq)</td>
                                    <td class="border px-3 py-1">KOH(aq)</td>
                                    <td class="border px-3 py-1">-57,3</td>
                                </tr>
                                <tr>
                                    <td class="border px-3 py-1">CH<sub>3</sub>COOH(aq)</td>
                                    <td class="border px-3 py-1">NaOH(aq)</td>
                                    <td class="border px-3 py-1">-55,2</td>
                                </tr>
                                <tr>
                                    <td class="border px-3 py-1">HCN(aq)</td>
                                    <td class="border px-3 py-1">NH<sub>3</sub>(aq)</td>
                                    <td class="border px-3 py-1">-5,4</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-blue-50 p-4 rounded-lg text-sm">
                            <p><strong>Catatan:</strong></p>
                            <ul class="list-disc ml-6">
                                <li>ΔH<sub>n</sub><sup>0</sup> selalu bernilai negatif</li>
                                <li>Reaksi penetralan atau reaksi asam + basa</li>
                            </ul>
                            <p class="mt-2"><strong>Contoh:</strong></p>
                            <p>Diketahui ΔH<sub>n</sub><sup>0</sup> HCl = -63 kJ/mol</p>
                            <p>Persamaan termokimia:</p>
                            <p>HCl + NaOH → NaCl + H<sub>2</sub>O &nbsp;&nbsp;&nbsp; ΔH = -63 kJ</p>
                        </div>

                        <h4 class="font-semibold mt-8">Latihan Soal:</h4>
                        <ol class="list-decimal ml-6 text-sm space-y-2">
                            <li>
                                Mengidentifikasi jenis-jenis perubahan entalpi standar (ΔH<sup>0</sup>). Cermati beberapa
                                persamaan termokimia berikut, lalu beri tanda (✓) centang pada kolom jenis reaksi yang
                                sesuai.
                            </li>
                        </ol>

                        <table class="table-auto border text-sm mt-4 w-full">
                            <thead>
                                <tr class="bg-blue-200 font-semibold text-center">
                                    <th class="border px-2 py-1">Reaksi</th>
                                    <th class="border px-2 py-1">Reaksi Pembentukan</th>
                                    <th class="border px-2 py-1">Reaksi Penguraian</th>
                                    <th class="border px-2 py-1">Reaksi Pembakaran</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td class="border px-2 py-1 text-left">2NH<sub>3</sub>(g) → N<sub>2</sub>(g) +
                                        3H<sub>2</sub>(g) &nbsp;&nbsp;&nbsp; ΔH = +92 kJ</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1 text-left">H<sub>2</sub>(g) + I<sub>2</sub>(g) → 2HI(g)
                                        &nbsp;&nbsp;&nbsp; ΔH = +52,96 kJ</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1 text-left">2NH<sub>4</sub>Cl(s) → N<sub>2</sub>(g) +
                                        4H<sub>2</sub>(g) + Cl<sub>2</sub>(g) &nbsp;&nbsp;&nbsp; ΔH = +628 kJ</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1 text-left">3C<sub>2</sub>H<sub>5</sub>OH(l) +
                                        9O<sub>2</sub>(g) → 6CO<sub>2</sub>(g) + 9H<sub>2</sub>O(l) &nbsp;&nbsp;&nbsp; ΔH =
                                        -3.690 kJ</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                    <td class="border px-2 py-1">.........</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="mt-6 text-sm">
                            <strong>2.</strong> Perhatikan persamaan termokimia berikut!<br>
                            CH<sub>3</sub>Cl(g) → C(s) + 3/2 H<sub>2</sub>(g) + 1/2 Cl<sub>2</sub>(g) &nbsp;&nbsp;&nbsp; ΔH
                            = -74,8 kJ/mol<sup>-1</sup><br>
                            Tentukan harga ΔH<sup>f</sup><sup>0</sup> CH<sub>3</sub>Cl?
                        </p>


                    </article>
                </section>




                <section id="penentuan-perubahan-entalpi" class="mb-12">
                    <header class="mb-6 text-center">
                        <h2 class="text-3xl font-bold text-gray-800">Penentuan Perubahan Entalpi</h2>
                    </header>

                    <article class="prose lg:prose-lg max-w-none">
                        <p>Perubahan entalpi merupakan salah satu konsep penting dalam termokimia yang membantu kita
                            memahami apakah suatu reaksi bersifat menyerap atau melepaskan energi. Dalam kehidupan
                            sehari-hari, konsep ini berperan penting dalam berbagai proses seperti pembakaran, metabolisme,
                            hingga dalam perancangan sistem energi.</p>

                        <p>Panas pembakaran ini dapat ditentukan melalui perhitungan perubahan entalpi. Perubahan Entalpi
                            (ΔH) dapat ditentukan dengan beberapa cara, yakni dari hasil percobaan, penerapan Hukum Hess
                            dengan data entalpi pembentukan dan energi ikatan.</p>

                        <h3 class="text-white bg-orange-500 px-4 py-2 rounded inline-block text-base font-semibold">
                            Berdasarkan Data Percobaan</h3>
                        <p>Kalorimetri yaitu perubahan entalpi adalah perubahan kalor yang diukur pada tekanan konstan.
                            Untuk menentukan perubahan entalpi dilakukan dengan cara yang sama dengan penentuan perubahan
                            kalor pada tekanan konstan. Salah satu cara pengukuran kalor reaksi dapat dengan menggunakan
                            kalorimeter.</p>

                        <p>Alat yang digunakan adalah kalorimeter yaitu alat yang digunakan untuk mengukur perubahan energi
                            termal atau perpindahan kalor. Perubahan kalor pada suatu reaksi dapat diukur melalui pengukuran
                            perubahan suhu yang terjadi pada reaksi tersebut.</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6">
                            <figure class="text-center">
                                <img src="{{ asset('assets/images/materi/kaloriser.png') }}" alt="Kalorimeter Sederhana"
                                    class="rounded-lg shadow">
                                <figcaption class="italic mt-2 text-sm">Gambar 6. Kalorimeter Sederhana</figcaption>
                            </figure>
                            <figure class="text-center">
                                <img src="{{ asset('assets/images/materi/kaloribom.png') }}" alt="Kalorimeter Bomb"
                                    class="rounded-lg shadow">
                                <figcaption class="italic mt-2 text-sm">Gambar 7. Kalorimeter Bomb</figcaption>
                            </figure>
                        </div>

                        <p>Kalorimeter adalah suatu sistem terisolasi (tidak ada perpindahan materi maupun energi dengan
                            lingkungan di luar kalorimeter). Secara garis besar, kalorimeter dibedakan menjadi dua, yaitu
                            kalorimeter bom dan kalorimeter sederhana.</p>

                        <p>Prinsip kerja kalorimetri adalah dengan penerapan azas Black, yakni dua buah zat atau lebih
                            dicampur menjadi satu maka zat yang suhunya tinggi akan melepaskan kalor sedangkan zat yang
                            suhunya rendah akan menerima kalor, sampai tercapai kesetimbangan termal.</p>

                        <h4 class="font-semibold">Menurut azas Black: Kalor yang dilepas = kalor yang diterima</h4>
                        <p><strong>Rumus yang digunakan adalah:</strong></p>
                        <p><code>q = m × c × ΔT</code></p>
                        <p><code>q kalorimeter = C × ΔT</code></p>
                        <p><code>q reaksi + q larutan + q kalorimeter = 0</code></p>
                        <p><code>q reaksi = – (q larutan + q kalorimeter)</code></p>

                        <div class="mt-4">
                            <p class="font-semibold">Dengan keterangan:</p>
                            <ul class="list-disc ml-6">
                                <li>q = jumlah kalor (J)</li>
                                <li>m = massa zat (g)</li>
                                <li>ΔT = perubahan suhu (°C atau K)</li>
                                <li>c = kalor jenis (J/g.°C) atau (J/g.K)</li>
                                <li>C = kapasitas kalor (J/°C) atau (J/K)</li>
                            </ul>
                            <p>Karena kalorimeter merupakan sistem terisolasi, maka tidak ada kalor yang terbuang ke
                                lingkungan. Maka kalor reaksi = kalor yang diserap/dibebaskan oleh larutan dan kalorimeter
                                dengan tanda berbeda.</p>
                        </div>

                        <h4 class="font-semibold mt-6">Contoh Soal:</h4>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 text-sm">
                            <p>Dalam kalorimeter yang telah dikalibrasi dan terbuka direaksikan 50g alkohol dan 3g logam
                                natrium. Jika suhu awal campuran 30°C dan setelah reaksi suhunya 75°C, tentukan ΔH reaksi.
                                Diketahui kalor jenis larutan 3,65 J g⁻¹°C⁻¹, kapasitas kalor kalorimeter 150 J °C⁻¹, dan
                                suhu kalorimeter naik sebesar 10°C.</p>

                            <p class="mt-3"><strong>Jawaban:</strong></p>
                            <p>q larutan = m × c × ΔT = (53g)(3,65)(45°C) = 8.705,25 J</p>
                            <p>q kalorimeter = C × ΔT = (150)(10) = 1.500 J</p>
                            <p>q reaksi = – (q larutan + q kalorimeter) = –(8.705,25 + 1.500) = –10.205,25 J</p>
                            <p class="mt-2">Jadi, reaksi alkohol dan logam natrium melepaskan kalor sebesar 10.205 kJ.
                                Oleh karena pada percobaan dilakukan pada tekanan tetap maka q reaksi = ΔH reaksi = –10.205
                                kJ.</p>
                        </div>

                        <h4 class="mt-6 font-semibold">Latihan Soal:</h4>
                        <p>Sebanyak 1,28 g C₁₀H₈ (Mr = 128 mol⁻¹) dibakar dalam kalorimeter bom, akibat pembakaran tersebut
                            suhu air berubah dari 20°C menjadi 25°C. Jika kapasitas kalor kalorimeter sebesar 10,17 kJ °C⁻¹,
                            hitung perubahan entalpi pembakaran C₁₀H₈.</p>
                    </article>
                </section>
                <section id="berdasarkan-entalpi-pembentukan" class="mb-12">
                    <article class="prose lg:prose-lg max-w-none">
                        <h3 class="text-white bg-orange-500 px-4 py-2 rounded inline-block text-base font-semibold">
                            Berdasarkan Data Entalpi Pembentukan
                        </h3>
                        <p>Kalor suatu reaksi dapat ditentukan berdasar data entalpi pembentukan zat pereaksi dan zat
                            produknya. Dalam hal ini, zat pereaksi dianggap terlebih dahulu terurai menjadi unsur-unsurnya,
                            kemudian unsur-unsur tersebut bereaksi membentuk zat produk. ΔH = total entalpi pembentukan
                            standar dari produk – total entalpi pembentukan standar dari reaktan</p>

                        <p>Entalpi pembentukan zat yang diukur pada keadaan standar merupakan harga ΔH<sub>f</sub>⁰, oleh
                            karena itu perubahan entalpi. Adapun rumus perhitungannya adalah:</p>

                        <div
                            class="bg-white border border-blue-500 px-4 py-3 text-center my-4 font-semibold rounded-md shadow">
                            ΔH = Σ ΔH<sub>f</sub>⁰ (produk) – Σ ΔH<sub>f</sub>⁰ (reaktan)
                        </div>

                        <h4 class="font-semibold">Untuk reaksi hipotesis</h4>
                        <p>aA + bB + ... → dD + eE + ... ΔH = ?</p>
                        <p>di mana a adalah koefisien reaktan A, b adalah koefisien reaktan B, d adalah koefisien produk D,
                            dan e adalah koefisien produk E, dan seterusnya.</p>
                        <p class="font-semibold">ΔH = [ d . ΔH<sub>f</sub>⁰(D) + e . ΔH<sub>f</sub>⁰(E) + ... ] – [ a .
                            ΔH<sub>f</sub>⁰(A) + b . ΔH<sub>f</sub>⁰(B) + ... ]</p>

                        <h4 class="font-semibold mt-6">Contoh soal 1:</h4>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 text-sm">
                            <p>Gunakan data ΔH<sub>f</sub>⁰ untuk menentukan ΔH⁰ reaksi amonia dan oksigen berlebih.</p>
                            <p><strong>Persamaan reaksinya:</strong></p>
                            <p>NH₃(g) + O₂(g) → NO₂(g) + H₂O(g)</p>
                            <p>Data ΔH<sub>f</sub>⁰ untuk masing-masing zat adalah:</p>
                            <ul class="list-disc ml-6">
                                <li>ΔH<sub>f</sub>⁰ (NH₃) = –46,1 kJ/mol</li>
                                <li>ΔH<sub>f</sub>⁰ (O₂) = 0 kJ/mol</li>
                                <li>ΔH<sub>f</sub>⁰ (NO₂) = –33,2 kJ/mol</li>
                                <li>ΔH<sub>f</sub>⁰ (H₂O) = 214,8 kJ/mol</li>
                            </ul>
                            <p><strong>Jawaban:</strong></p>
                            <p>Persamaan reaksi setara:</p>
                            <p>4NH₃(g) + 7O₂(g) → 4NO₂(g) + 6H₂O(g)</p>
                            <p>ΔH<sub>reaksi</sub> = ΣΔH<sub>f</sub>⁰ produk – ΣΔH<sub>f</sub>⁰ pereaksi</p>
                            <p>= (1.288,8 kJ/mol + 132,8 kJ/mol) – (–184 kJ/mol + 0)</p>
                            <p>= 1.340 kJ/mol</p>
                        </div>

                        <h4 class="font-semibold mt-6">Contoh soal 2</h4>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 text-sm">
                            <p>Diketahui perubahan entalpi pembentukan standar:</p>
                            <ul class="list-disc ml-6">
                                <li>CH₃OH(l) = –238,6 kJ/mol</li>
                                <li>CO₂(g) = –393,5 kJ/mol</li>
                                <li>H₂O(l) = –286,0 kJ/mol</li>
                            </ul>
                            <p>Ar H = 1, Ar C = 12, Ar O = 16</p>
                            <p>a. Tentukan entalpi pembakaran metanol, CH₃OH!</p>
                            <p>b. Tentukan jumlah kalor yang dibebaskan pada pembakaran 8 gram metanol!</p>

                            <p><strong>Jawaban:</strong></p>
                            <p>a. Reaksi pembakaran metanol berarti metanol direaksikan dengan oksigen,</p>
                            <p>sebagai berikut: CH₃OH(l) + 3/2O₂(g) → CO₂(g) + 2H₂O(g) ΔH = ?</p>
                            <p>ΔH = Σ ΔH<sub>f</sub>⁰ (produk) – Σ ΔH<sub>f</sub>⁰ (reaktan)</p>
                            <p>= (1ΔH<sub>f</sub>⁰ CO₂ + 2ΔH<sub>f</sub>⁰ H₂O) – (ΔH<sub>f</sub>⁰ CH₃OH + 3/2ΔH<sub>f</sub>⁰
                                O₂)</p>
                            <p>= (–393,5 kJ + 2mol. –286,0 kJ/mol) – (–238,6 kJ + 3/2 mol. 0 kJ/mol)</p>
                            <p>= (–393,5 kJ + –572 kJ) – (–238,6 kJ)</p>
                            <p>= –965,5 kJ + 238,6 kJ</p>
                            <p>= –726,9 kJ</p>
                            <p>Jadi perubahan entalpi pembakaran metanol = –726,9 kJ/mol</p>

                            <p class="mt-4">b. <strong>Tentukan</strong> jumlah kalor yang dibebaskan pada pembakaran 8
                                gram metanol!</p>
                        </div>
                    </article>
                </section>

                <section id="berdasarkan-hukum-hess" class="mb-12">
                    <article class="prose lg:prose-lg max-w-none">
                        <h3 class="text-white bg-orange-500 px-4 py-2 rounded inline-block text-base font-semibold">
                            Berdasarkan Hukum Hess
                        </h3>
                        <p>Menurut hukum Hess, karena entalpi adalah fungsi keadaan, perubahan entalpi dari suatu reaksi
                            kimia adalah sama, walaupun langkah-langkah yang digunakan untuk memperoleh produk berbeda.
                            Dengan kata lain, hanya keadaan awal dan akhir yang berpengaruh terhadap perubahan entalpi,
                            bukan langkah-langkah yang dilakukan untuk mencapainya. Jika suatu reaksi berlangsung dalam dua
                            tahap atau lebih, maka perubahan entalpi reaksi tersebut sama dengan jumlah perubahan entalpi
                            dari semua tahapannya. Hukum Hess dapat dinyatakan dalam bentuk diagram siklus atau diagram
                            tingkat energi. Menurut Hukum Hess :</p>

                        <p class="text-center font-semibold">ΔH reaksi = ΔH₁ + ΔH₂ + ...</p>

                        <div class="text-center">
                            <img src="{{ asset('assets/images/materi/disik.png') }}" alt="Diagram Siklus"
                                class="mx-auto my-4 rounded-md shadow">
                            <figcaption class="italic text-sm">Diagram Siklus</figcaption>
                        </div>

                        <p>Perubahan dari A menjadi C bisa berlangsung melalui 2 tahap yakni:</p>
                        <ul class="list-disc ml-6">
                            <li>Tahap I (secara langsung) A → C → ΔH₁</li>
                            <li>Tahap II (secara tidak langsung)</li>
                        </ul>
                        <p>Berdasarkan Hukum Hess maka harga ΔH₁ = ΔH₂ + ΔH₃</p>
                        <p>A → B ΔH₂</p>
                        <p>B → C ΔH₃</p>
                        <p>A → C ΔH₂ + ΔH₃</p>

                        <p class="font-bold">Catatan:</p>
                        <ol class="list-decimal ml-6">
                            <li>Apabila suatu reaksi dapat dinyatakan sebagai penjumlahan aljabar, ΔH juga merupakan
                                penjumlahan aljabar dari kalor yang menyertai reaksi-reaksi tersebut.</li>
                            <li>ΔH yang dilepaskan atau diserap tidak bergantung pada jalannya reaksi, tetapi bergantung
                                pada kondisi zat-zat yang bereaksi dan zat-zat hasil reaksi.</li>
                        </ol>

                        <p>Hukum Hess dapat diilustrasikan melalui pembakaran nitrogen yang menghasilkan nitrogen dioksida
                            seperti berikut ini.</p>
                        <p>N₂(g) + 2O₂(g) → 2NO₂(g) ΔH = +68 kJ/mol</p>

                        <p>Reaksi ini juga dapat dilakukan dalam dua langkah, dengan perubahan entalpi yang ditandai dengan
                            ΔH₁ dan ΔH₂</p>
                        <p>N₂(g) + O₂(g) → 2NO(g) ΔH₁ = +180 kJ/mol</p>
                        <p>2NO(g) + O₂(g) → 2NO₂(g) ΔH₂ = -112 kJ/mol</p>
                        <p>N₂(g) + 2O₂(g) → 2NO₂(g) ΔH = +68 kJ/mol</p>

                        <h4 class="font-semibold mt-6">Contoh soal:</h4>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 text-sm">
                            <p>2C(s) + H₂(g) → C₂H₂(g)</p>
                            <p>Hitung ΔH⁰ untuk reaksi tersebut berdasarkan persamaan termokimia berikut.</p>
                            <ul class="list-disc ml-6">
                                <li>(a) C(s) + O₂(g) → CO₂(g) ΔH⁰₁ = -393,5 kJ mol⁻¹</li>
                                <li>(b) H₂(g) + 1/2O₂(g) → H₂O(l) ΔH⁰₂ = -285,8 kJ mol⁻¹</li>
                                <li>(c) C₂H₂(g) + 5/2O₂(g) → 2CO₂(g) + H₂O(l) ΔH⁰₃ = -1.299,8 kJ mol⁻¹</li>
                            </ul>

                            <p class="mt-4 font-bold">Jawaban:</p>
                            <p>Aturan yang harus diperhatikan adalah</p>
                            <ol class="list-decimal ml-6">
                                <li>Posisi pereaksi dan hasil reaksi yang diketahui harus sama dengan posisi yang
                                    ditanyakan. Jika tidak sama maka posisi yang diketahui harus diubah.</li>
                                <li>Koefisien reaksi (mol zat) yang diketahui harus sama dengan yang ditanyakan. Jika tidak
                                    sama maka harus disamakan terlebih dahulu dengan cara dibagi atau dikalikan, demikian
                                    juga dengan nilai entalpinya.</li>
                            </ol>

                            <ul class="list-disc ml-6">
                                <li>Persamaan (a) harus dikalikan 2 sebab reaksi pembentukan asetilen memerlukan 2 mol C
                                </li>
                                <li>Persamaan (b) tidak perlu diubah sebab sudah sesuai dengan persamaan reaksi pembentukan
                                    asetilen (1 mol H₂)</li>
                                <li>Persamaan (c) perlu dibalikkan arahnya, sebab C₂H₂ berada sebagai pereaksi. Persamaan
                                    termokimianya menjadi:</li>
                            </ul>

                            <p>2C(s) + 2O₂(g) → 2CO₂(g)</p>
                            <p>H₂(g) + 1/2O₂(g) → H₂O(l)</p>
                            <p>2CO₂(g) + H₂O(l) → C₂H₂(g) + 5/2O₂(g)</p>

                            <p>ΔH⁰₁ = 2 (–393,5 kJ mol⁻¹)</p>
                            <p>ΔH⁰₂ = –285,8 kJ mol⁻¹</p>
                            <p>ΔH⁰₃ = +1.299,8 kJ mol⁻¹</p>

                            <p>ΔH⁰ = ΔH⁰₁ + ΔH⁰₂ + ΔH⁰₃ = –787 + (–285,8) + 1.299,8 = +227,0 kJ mol⁻¹</p>
                        </div>
                    </article>
                </section>

                <section id="berdasarkan-energi-ikatan" class="mb-12">
                    <article class="prose lg:prose-lg max-w-none">
                        <h3 class="text-white bg-orange-500 px-4 py-2 rounded inline-block text-base font-semibold">
                            Berdasarkan Data Energi Ikatan
                        </h3>
                        <p>Dalam suatu reaksi kimia, terjadi pemutusan ikatan pada reaktan terlebih dahulu. Kemudian
                            terbentuk ikatan baru pada produk. Pada dasarnya reaksi kimia terdiri dari dua proses, yaitu
                            pemutusan ikatan antar atom-atom dari senyawa yang bereaksi (proses yang memerlukan energi) dan
                            penggabungan ikatan kembali dari atom-atom yang terlibat reaksi sehingga membentuk susunan baru
                            (proses yang membebaskan energi). Perubahan entalpi reaksi dapat dihitung dengan menggunakan
                            data energi ikatan. Energi ikatan adalah energi yang diperlukan untuk memutuskan 1 mol ikatan
                            dalam fase gas zat kovalen untuk membentuk produk dalam fase gas pada suhu dan tekanan konstan.
                        </p>

                        <p><strong>Perhatikan</strong> reaksi pembentukan gas HCl sebagai berikut:</p>

                        <div class="flex flex-col md:flex-row items-center justify-center gap-4 my-6">
                            <img src="{{ asset('assets/images/materi/ikhaseb.png') }}" alt="Ikatan H dan Cl sebelum"
                                class="rounded-md shadow-md w-full md:w-1/2">
                            <img src="{{ asset('assets/images/materi/ikhases.png') }}" alt="Ikatan HCl setelah"
                                class="rounded-md shadow-md w-full md:w-1/2">
                        </div>
                        <figcaption class="italic text-sm text-center">Gambar 8. Pemutusan ikatan H₂ dan Cl₂ untuk
                            membentuk ikatan baru pada HCl</figcaption>

                        <p>Ikatan antaratom Cl pada Cl₂ dan ikatan antaratom H pada H₂ harus putus terlebih dahulu. Setelah
                            itu, H dan Cl membentuk ikatan baru sehingga terbentuk HCl. Nah, untuk memutuskan ikatan
                            diperlukan energi. Energi yang disebut energi ikatan. Perubahan entalpi (ΔH) suatu reaksi dapat
                            ditentukan dari selisih energi rata-rata (Ē) antara pereaksi dengan produk.</p>

                        <p><strong>ΔH reaksi = Σ Energi ikatan pereaksi yang putus – Σ Energi ikatan produk yang
                                terbentuk</strong></p>
                        <p>= Σ Epemutusan – Σ Epengikatan</p>
                        <p>= Σ E ruas kiri – Σ E ruas kanan</p>

                        <p>Harga beberapa energi ikatan disajikan dalam tabel berikut:</p>

                        <div class="grid grid-cols-2 gap-6">
                            <table class="table-auto border border-gray-300">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th class="border px-4 py-2">Ikatan</th>
                                        <th class="border px-4 py-2">EI (kJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-4 py-1">H – H</td>
                                        <td class="border px-4 py-1">+436</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – H</td>
                                        <td class="border px-4 py-1">+414</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">N – H</td>
                                        <td class="border px-4 py-1">+389</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">O – H</td>
                                        <td class="border px-4 py-1">+464</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">S – H</td>
                                        <td class="border px-4 py-1">+368</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">H – F</td>
                                        <td class="border px-4 py-1">+565</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">H – Cl</td>
                                        <td class="border px-4 py-1">+431</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">H – Br</td>
                                        <td class="border px-4 py-1">+364</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">H – I</td>
                                        <td class="border px-4 py-1">+297</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – C</td>
                                        <td class="border px-4 py-1">+347</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C = C</td>
                                        <td class="border px-4 py-1">+611</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table-auto border border-gray-300">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th class="border px-4 py-2">Ikatan</th>
                                        <th class="border px-4 py-2">EI (kJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-4 py-1">C ≡ C</td>
                                        <td class="border px-4 py-1">+837</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – N</td>
                                        <td class="border px-4 py-1">+305</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C ≡ N</td>
                                        <td class="border px-4 py-1">+891</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – O</td>
                                        <td class="border px-4 py-1">+360</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C = O</td>
                                        <td class="border px-4 py-1">+736</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C ≡ O</td>
                                        <td class="border px-4 py-1">+1072</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – F</td>
                                        <td class="border px-4 py-1">+485</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – Cl</td>
                                        <td class="border px-4 py-1">+327</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – Br</td>
                                        <td class="border px-4 py-1">+285</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-1">C – I</td>
                                        <td class="border px-4 py-1">+213</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4 class="font-semibold mt-6">Contoh soal:</h4>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 text-sm">
                            <p>Diketahui energi ikatan:</p>
                            <ul class="list-disc ml-6">
                                <li>C – H = 415 kJ/mol</li>
                                <li>C = C = 607 kJ/mol</li>
                                <li>C – C = 348 kJ/mol</li>
                                <li>H – H = 436 kJ/mol</li>
                            </ul>

                            <p>Ditanya:</p>
                            <p>ΔH reaksi pada reaksi: C₂H₄(g) + H₂(g) → C₂H₆(g)</p>

                            <p><strong>Jawab:</strong></p>
                            <img src="{{ asset('assets/images/materi/pemik.png') }}" alt="Struktur Ikatan"
                                class="rounded-md shadow-md my-4">

                            <p>ΔH reaksi = Σ energi pemutusan ikatan – Σ energi pembentukan ikatan</p>
                            <p>= {4 (C – H) + (C = C) + (H – H)} – {6 (C – H) + (C – C)}</p>
                            <p>= {(C = C) + (H – H)} – {2 (C – H) + (C – C)}</p>
                            <p>= (607 + 436) – (2 × 415 + 348)</p>
                            <p>= 1.043 – 1.178</p>
                            <p>= –135 kJ</p>
                            <p>Jadi, C₂H₄(g) + H₂(g) → C₂H₆(g) ΔH = –135 kJ</p>
                        </div>
                    </article>
                </section>


            </main>
        </div>
    </div>
    <script>
        function scrollToSection(event) {
            event.preventDefault();
            const targetId = event.target.getAttribute('href').substring(1);
            const section = document.getElementById(targetId);

            if (!section) return;

            // cari elemen heading (h2 atau h3) pertama di dalam section
            const heading = section.querySelector("h2, h3, h4, h5") || section;

            const rect = heading.getBoundingClientRect();
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const elementTop = rect.top + scrollTop;

            const centerOffset = (window.innerHeight / 2) - (heading.offsetHeight / 2);

            window.scrollTo({
                top: elementTop - centerOffset,
                behavior: 'smooth'
            });
        }

        // tambahkan event listener ke semua link sidebar
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("aside nav a").forEach((link) => {
                link.addEventListener("click", scrollToSection);
            });
        });
    </script>


    <!-- Modal for Automatic Tutorial with Carousel -->
    {{-- <div class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div
            class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
            <button
                class="close-modal absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>
            <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Panduan Penggunaan Halaman Materi</h3>

            <!-- Carousel Content -->
            <div class="carousel">
                <div class="carousel-slide text-center hidden">Langkah 1: Gunakan sidebar di sebelah kiri untuk navigasi
                    cepat ke setiap bagian materi. Klik pada bagian yang diinginkan untuk langsung menuju ke materi
                    tersebut.</div>
                <div class="carousel-slide text-center hidden">Langkah 2: Setiap bagian materi memiliki penjelasan yang
                    mendetail serta gambar ilustrasi untuk membantu pemahaman konsep secara visual.</div>
                <div class="carousel-slide text-center hidden">Langkah 4: Manfaatkan fitur tambahan seperti catatan,
                    referensi eksternal, dan latihan interaktif untuk memperdalam materi.</div>
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
                    class="close-modal bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700 transition duration-200">Mengerti</button>
            </div>
        </div>
    </div> --}}

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
                $('.modal').fadeIn();
                showSlide(0); // Start from the first slide
            }, 1000); // Delay 1 second for a smoother experience

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
