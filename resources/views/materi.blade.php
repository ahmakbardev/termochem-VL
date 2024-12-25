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
                <!-- Persamaan Termokimia -->
                <section id="persamaan-termokimia" class="mb-12">
                    <header class="mb-6">
                        <h2 class="text-2xl font-semibold">Persamaan Termokimia</h2>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Persamaan termokimia memberikan informasi tentang suatu reaksi mengenai jumlah mol reaktan dan
                            produk serta jumlah energi yang terlibat di dalamnya. Penulisan persamaan termokimia mirip
                            dengan penulisan reaksi biasa, termasuk jenis atom dan jumlah atomnya. Perbedaannya, ∆H reaksi
                            pada penulisan persamaan termokimia harus disertakan.</p>
                        <p>Contoh persamaan termokimia pembakaran metana (CH₄) adalah sebagai berikut:</p>
                        <p class="text-center font-semibold">CH₄(g) + 2O₂(g) → CO₂(g) + 2H₂O(l) ΔH = –890,4 kJ/mol</p>
                        <p>Panduan di bawah ini dapat membantu penulisan dan penafsiran persamaan termokimia:</p>
                        <ul class="list-disc ml-5">
                            <li>Koefisien stoikiometri menunjukkan jumlah mol zat.</li>
                            <li>Jika suatu persamaan dibalik, nilai ΔH tetap tetapi tandanya berubah.</li>
                            <li>Jika persamaan dikalikan dengan faktor n, maka ΔH juga dikalikan dengan faktor yang sama.
                            </li>
                        </ul>
                        <p>Ketika menuliskan persamaan termokimia, kita harus selalu menuliskan wujud fisis semua reaktan
                            dan produk karena ini akan membantu penentuan perubahan entalpi yang sesungguhnya.</p>
                        <h3 class="font-semibold mt-4">Contoh:</h3>
                        <p>Reaksi pembakaran isooktana (bensin) menghasilkan energi sebesar 5450 kJ/mol serta gas karbon
                            dioksida dan uap air. Tuliskan persamaan termokimianya.</p>
                        <p class="bg-gray-100 p-4 rounded-md">Jawaban: C₈H₁₈(l) + O₂(g) → 9H₂O(g) + 8CO₂(g) ΔH = -5450
                            kJ/mol</p>
                    </article>
                </section>

                <!-- Jenis-jenis Perubahan Entalpi -->
                <section id="jenis-perubahan-entalpi" class="mb-12">
                    <header class="mb-6 text-center">
                        <h2 class="text-3xl font-semibold">Kegiatan Belajar 2</h2>
                        <h2 class="text-2xl font-semibold">Jenis-jenis Perubahan Entalpi</h2>
                    </header>
                    <article class="prose lg:prose-lg max-w-none">
                        <p>Perubahan entalpi reaksi yang diukur pada temperatur 250C (298 K) dan tekanan 1 atm disepakati
                            sebagai perubahan entalpi standar, dinyatakan dengan simbol ∆H0. Keadaan standar ini diperlukan
                            karena pengukuran pada suhu dan tekanan yang berbeda akan menghasilkan harga perubahan entalpi
                            yang berbeda pula. Satuan yang digunakan untuk menyatakan perubahan entalpi adalah kJ. Perubahan
                            entalpi dalam molar adalah kJ/mol. Perubahan entalpi dapat dikaitkan dengan perubahan fisika dan
                            perubahan kimianya. Entalpi perubahan fisika terdiri entalpi peleburan, entalpi penguapan, dan
                            entalpi sublimasi. Sedangkan entalpi perubahan kimia terdiri dari entalpi pembentukan standar,
                            entalpi atomisasi standar, entalpi pembakaran standar, entalpi netralisasi standar, dan entalpi
                            pelarutan standar.</p>
                        <!-- Entalpi Perubahan Fisika -->
                        <section id="materi5" class="mb-12">
                            <header class="mb-6">
                                <h2 class="text-2xl font-semibold text-gray-800">Entalpi Perubahan Fisika</h2>
                            </header>
                            <article class="prose lg:prose-lg max-w-none">
                                <h3 class="text-lg font-bold">a. Entalpi Peleburan (<i>ΔH<sub>fus</sub></i> = Enthalpy of
                                    Fusion)</h3>
                                <p>Entalpi peleburan/pelelehan adalah kalor yang dibutuhkan dalam peleburan 1 mol senyawa.
                                    Pelelehan selalu berlangsung secara endotermik sehingga harga <i>ΔH<sub>fus</sub></i>
                                    selalu positif (<i>ΔH<sub>fus</sub></i> > 0). Entalpi peleburan beberapa senyawa
                                    ditabulasikan sebagai berikut:</p>
                                <div class="overflow-x-auto">
                                    <table
                                        class="table-auto border-collapse border border-gray-300 w-full text-left text-sm">
                                        <thead class="bg-gray-200">
                                            <tr>
                                                <th class="border border-gray-300 px-4 py-2">Senyawa</th>
                                                <th class="border border-gray-300 px-4 py-2">ΔH<sub>fus</sub> (kJ/mol)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">O<sub>2</sub></td>
                                                <td class="border border-gray-300 px-4 py-2">0,45</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">HCl</td>
                                                <td class="border border-gray-300 px-4 py-2">1,99</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">NH<sub>3</sub></td>
                                                <td class="border border-gray-300 px-4 py-2">5,65</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">HI</td>
                                                <td class="border border-gray-300 px-4 py-2">2,87</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">CCl<sub>4</sub></td>
                                                <td class="border border-gray-300 px-4 py-2">2,51</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">H<sub>2</sub>O</td>
                                                <td class="border border-gray-300 px-4 py-2">6,02</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">NaCl</td>
                                                <td class="border border-gray-300 px-4 py-2">30,2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                        </section>
                        <!-- Entalpi Penguapan -->
                        <section id="penguapan" class="mb-12">
                            <header class="mb-6">
                                <h2 class="text-lg font-semibold text-gray-800">b. Entalpi Penguapan (ΔH<sub>vap</sub>)
                                </h2>
                            </header>
                            <article class="prose lg:prose-lg max-w-none">
                                <p>Entalpi penguapan adalah kalor yang dibutuhkan dalam penguapan 1 mol senyawa. Penguapan
                                    selalu berlangsung secara endotermik sehingga harga ΔH<sub>vap</sub> selalu positif,
                                    ΔH<sub>vap</sub> > 0. Entalpi penguapan beberapa senyawa ditabeklan sebagai berikut:</p>
                                <div class="overflow-x-auto">
                                    <table class="table-auto border-collapse border border-gray-300 w-full text-left">
                                        <thead>
                                            <tr>
                                                <th class="border border-gray-300 px-4 py-2">Senyawa</th>
                                                <th class="border border-gray-300 px-4 py-2">ΔH<sub>vap</sub> (kJ/mol)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">O<sub>2</sub></td>
                                                <td class="border border-gray-300 px-4 py-2">6,82</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">HCl</td>
                                                <td class="border border-gray-300 px-4 py-2">16,2</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">NH<sub>3</sub></td>
                                                <td class="border border-gray-300 px-4 py-2">23,4</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">HI</td>
                                                <td class="border border-gray-300 px-4 py-2">19,8</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">H<sub>2</sub>O</td>
                                                <td class="border border-gray-300 px-4 py-2">41,1</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">NaCl</td>
                                                <td class="border border-gray-300 px-4 py-2">171</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                        </section>

                        <!-- Entalpi Sublimasi -->
                        <section id="sublimasi" class="mb-12">
                            <header class="mb-6">
                                <h2 class="text-lg font-semibold text-gray-800">c. Entalpi Sublimasi (ΔH<sub>sub</sub>)
                                </h2>
                            </header>
                            <article class="prose lg:prose-lg max-w-none">
                                <p>Entalpi sublimasi adalah kalor yang dibutuhkan dalam sublimasi 1 mol senyawa. Sublimasi
                                    merupakan proses endotermik sehingga harga ΔH<sub>sub</sub> selalu positif,
                                    ΔH<sub>sub</sub> > 0. Entalpi sublimasi beberapa senyawa ditabeklan sebagai berikut:</p>
                                <div class="overflow-x-auto">
                                    <table class="table-auto border-collapse border border-gray-300 w-full text-left">
                                        <thead>
                                            <tr>
                                                <th class="border border-gray-300 px-4 py-2">Logam</th>
                                                <th class="border border-gray-300 px-4 py-2">ΔH<sub>sub</sub> (kJ/mol)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">Na</td>
                                                <td class="border border-gray-300 px-4 py-2">108,4</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">K</td>
                                                <td class="border border-gray-300 px-4 py-2">90,0</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">Rb</td>
                                                <td class="border border-gray-300 px-4 py-2">85,8</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">Cs</td>
                                                <td class="border border-gray-300 px-4 py-2">78,7</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">Mg</td>
                                                <td class="border border-gray-300 px-4 py-2">150</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">Ca</td>
                                                <td class="border border-gray-300 px-4 py-2">193</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">Sr</td>
                                                <td class="border border-gray-300 px-4 py-2">164</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">Ba</td>
                                                <td class="border border-gray-300 px-4 py-2">176</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                        </section>

                        <h3 class="font-semibold mt-4">Entalpi Perubahan Kimia:</h3>
                        <p>Data entalpi perubahan kimia biasanya diberikan dalam keadaan standar. Entalpi standar perubahan
                            kimia terdiri dari entalpi pembentukan standar, entalpi atomisasi standar, entalpi pembakaran
                            standar, entalpi netralisasi standar, dan entalpi pelarutan standar.</p>
                        <!-- Section for Enthalpi -->
                        <section id="enthalpi" class="mb-12">
                            <article class="prose lg:prose-lg max-w-none">
                                <h3>a. Entalpi Pembentukan Standar (ΔHf° = Standard Enthalpy of Formation)</h3>
                                <p>Entalpi pembentukan standar adalah kalor yang dibutuhkan dalam pembentukan 1 mol senyawa
                                    dari unsur-unsurnya yang diukur pada keadaan standar. Entalpi pembentukan standar
                                    beberapa senyawa ditabelkan sebagai berikut:</p>
                                <table class="table-auto w-full text-left border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-200">
                                            <th class="border border-gray-300 px-4 py-2">Senyawa</th>
                                            <th class="border border-gray-300 px-4 py-2">ΔHf°(kJ/mol)</th>
                                            <th class="border border-gray-300 px-4 py-2">Senyawa</th>
                                            <th class="border border-gray-300 px-4 py-2">ΔHf°(kJ/mol)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NH₃(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-46,1</td>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₅OH(l)</td>
                                            <td class="border border-gray-300 px-4 py-2">-277,70</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CO(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-110,5</td>
                                            <td class="border border-gray-300 px-4 py-2">C₆H₁₂O₆(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-1260,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CO₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-393,5</td>
                                            <td class="border border-gray-300 px-4 py-2">NO(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+90,40</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HF(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-271,1</td>
                                            <td class="border border-gray-300 px-4 py-2">NO₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+33,90</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HCl(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-92,5</td>
                                            <td class="border border-gray-300 px-4 py-2">N₂O(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+82,50</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HBr(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-36,4</td>
                                            <td class="border border-gray-300 px-4 py-2">SO₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-297,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HI(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+25,9</td>
                                            <td class="border border-gray-300 px-4 py-2">SO₃(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-395,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">H₂S(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-20,1</td>
                                            <td class="border border-gray-300 px-4 py-2">H₂O(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-241,80</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C(diamond)</td>
                                            <td class="border border-gray-300 px-4 py-2">+1,9</td>
                                            <td class="border border-gray-300 px-4 py-2">H₂O(l)</td>
                                            <td class="border border-gray-300 px-4 py-2">-285,80</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+226,7</td>
                                            <td class="border border-gray-300 px-4 py-2">C₆H₁₂O₆(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-1260,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CH₄(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-74,8</td>
                                            <td class="border border-gray-300 px-4 py-2">NO(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+90,40</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₆(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-84,7</td>
                                            <td class="border border-gray-300 px-4 py-2">NO₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+33,90</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₃H₈(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-104,0</td>
                                            <td class="border border-gray-300 px-4 py-2">SO₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-297,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₄(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+52,3</td>
                                            <td class="border border-gray-300 px-4 py-2">SO₃(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-395,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₅OH(l)</td>
                                            <td class="border border-gray-300 px-4 py-2">-277,70</td>
                                            <td class="border border-gray-300 px-4 py-2">H₂O(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-241,80</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₆H₁₂O₆(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-1260,00</td>
                                            <td class="border border-gray-300 px-4 py-2">H₂O(l)</td>
                                            <td class="border border-gray-300 px-4 py-2">-285,80</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">MgO(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-602,00</td>
                                            <td class="border border-gray-300 px-4 py-2">CaO(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-635,09</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">FeO(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-269,00</td>
                                            <td class="border border-gray-300 px-4 py-2">Fe₂O₃(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-822,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NaCl(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-411,00</td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>

                                <h3 class="font-semibold mt-6">2. Entalpi Atomisasi Standar (ΔH<sub>a</sub>⁰)</h3>
                                <p>Entalpi atomisasi standar adalah kalor yang dibutuhkan dalam penguraian 1 mol senyawa
                                    menjadi atom dalam wujud gasnya yang diukur pada keadaan standar. Entalpi atomisasi
                                    standar beberapa senyawa ditabelkan sebagai berikut:</p>
                                <table class="table-auto w-full border-collapse border border-gray-300">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left">Senyawa</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left">Reaksi Dekomposisi</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left">ΔH<sup>0</sup> (kJ/mol)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">H₂ (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">H₂ (g) → 2H (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+432,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">O₂ (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">O₂ (g) → 2O (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+493,59</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">N₂ (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">N₂ (g) → 2N (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+941,69</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">F₂ (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">F₂ (g) → 2F (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+154,80</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">Cl₂ (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">Cl₂ (g) → 2Cl (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+239,70</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">Br₂ (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">Br₂ (g) → 2Br (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+190,16</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HF (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">HF (g) → H (g) + F (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+1565,00</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HCl (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">HCl (g) → H (g) + Cl (g)</td>
                                            <td class="border border-gray-300 px-4 py-2">+428,02</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h3 class="font-semibold mt-6">3. Entalpi Pembakaran Standar (ΔH<sub>comb</sub>⁰)</h3>
                                <p>Entalpi pembakaran standar adalah kalor yang dilepaskan saat pembakaran sempurna 1 mol
                                    senyawa. Berikut tabel data entalpi pembakaran standar:</p>
                                <table class="table-auto border-collapse border border-gray-300 w-full mt-4">
                                    <thead>
                                        <tr class="bg-gray-200">
                                            <th class="border border-gray-300 px-4 py-2">Senyawa</th>
                                            <th class="border border-gray-300 px-4 py-2">ΔH<sub>comb</sub>⁰ (kJ/mol)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">H₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-286</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C(diamond)</td>
                                            <td class="border border-gray-300 px-4 py-2">-395,388</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C(grafit)</td>
                                            <td class="border border-gray-300 px-4 py-2">-393,505</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CH₄(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-890</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₆(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-1560</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₃H₈(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-2220</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₄H₁₀(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-2879</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₂(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-1300</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₄(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-1411</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₂H₅OH(l)</td>
                                            <td class="border border-gray-300 px-4 py-2">-1367</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₈H₁₈(l)</td>
                                            <td class="border border-gray-300 px-4 py-2">-5450</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₆H₁₂O₆(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-2803</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₁₂H₂₂O₁₁(s)</td>
                                            <td class="border border-gray-300 px-4 py-2">-5641</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₆H₆(l)</td>
                                            <td class="border border-gray-300 px-4 py-2">-3268</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">C₆H₆(g)</td>
                                            <td class="border border-gray-300 px-4 py-2">-3293</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <h3 class="font-semibold mt-6">4. Entalpi Penetralan Standar (ΔH<sub>neut</sub>⁰)</h3>
                                <p>Entalpi penetralan standar adalah kalor yang dilepaskan saat reaksi penetralan 1 mol asam
                                    dengan 1 mol basa dalam keadaan standar. Berikut tabel data entalpi penetralan standar:
                                </p>
                                <table class="table-auto border-collapse border border-gray-300 w-full mt-4">
                                    <thead>
                                        <tr class="bg-gray-200">
                                            <th class="border border-gray-300 px-4 py-2">Asam</th>
                                            <th class="border border-gray-300 px-4 py-2">Basa</th>
                                            <th class="border border-gray-300 px-4 py-2">ΔH<sub>neut</sub>⁰ (kJ/mol)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HCl(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">NaOH(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">-57,1</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HCl(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">KOH(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">-57,1</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HCl(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">NH<sub>3</sub>(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">-52,2</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HNO<sub>3</sub>(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">NaOH(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">-57,3</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HNO<sub>3</sub>(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">KOH(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">-57,3</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CH<sub>3</sub>COOH(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">NaOH(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">-55,2</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">HCN(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">NH<sub>3</sub>(aq)</td>
                                            <td class="border border-gray-300 px-4 py-2">-5,4</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h3 class="font-semibold mt-6">5. Entalpi Pelarutan Standar (ΔH<sub>sol</sub>⁰)</h3>
                                <p>Entalpi pelarutan standar adalah kalor yang dibutuhkan dalam melarutkan 1 mol zat dalam
                                    sejumlah pelarut tertentu yang diukur pada keadaan standar. Berikut tabel data entalpi
                                    pelarutan standar:</p>
                                <table class="table-auto border-collapse border border-gray-300 w-full mt-4">
                                    <thead>
                                        <tr class="bg-gray-200">
                                            <th class="border border-gray-300 px-4 py-2">Senyawa</th>
                                            <th class="border border-gray-300 px-4 py-2">ΔH<sub>sol</sub>⁰ (kJ/mol)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">Mg(OH)₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-2,8</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">MgCl₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-155</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">MgBr₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-186</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">Mg(NO₃)₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-85,5</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">MgSO₄</td>
                                            <td class="border border-gray-300 px-4 py-2">-91,2</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">Ca(OH)₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-16,2</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CaCl₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-82,9</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CaBr₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-110</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">Ca(NO₃)₂</td>
                                            <td class="border border-gray-300 px-4 py-2">-18,9</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">CaSO₄</td>
                                            <td class="border border-gray-300 px-4 py-2">-17,8</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NH₄NO₃</td>
                                            <td class="border border-gray-300 px-4 py-2">+25,8</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">(NH₄)₂SO₄</td>
                                            <td class="border border-gray-300 px-4 py-2">+6,2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="font-semibold mt-6">pelarutan standar beberapa senyawa ditabelkan sebagai
                                    berikut.</p>
                                <table class="table-auto border-collapse border border-gray-300 w-full mt-4">
                                    <thead>
                                        <tr class="bg-gray-200">
                                            <th class="border border-gray-300 px-4 py-2">Senyawa</th>
                                            <th class="border border-gray-300 px-4 py-2">ΔH<sub>sol</sub>⁰ (kJ/mol)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NaOH</td>
                                            <td class="border border-gray-300 px-4 py-2">-42,7</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NaCl</td>
                                            <td class="border border-gray-300 px-4 py-2">+3,9</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NaBr</td>
                                            <td class="border border-gray-300 px-4 py-2">-0,6</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NaNO₃</td>
                                            <td class="border border-gray-300 px-4 py-2">+20,5</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">Na₂SO₄</td>
                                            <td class="border border-gray-300 px-4 py-2">-2,3</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">KOH</td>
                                            <td class="border border-gray-300 px-4 py-2">-55,2</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">KCl</td>
                                            <td class="border border-gray-300 px-4 py-2">+17,2</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">KBr</td>
                                            <td class="border border-gray-300 px-4 py-2">+20,0</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">KNO₃</td>
                                            <td class="border border-gray-300 px-4 py-2">+34,9</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">K₂SO₄</td>
                                            <td class="border border-gray-300 px-4 py-2">+23,8</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NH₄Cl</td>
                                            <td class="border border-gray-300 px-4 py-2">+15,2</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">NH₄Br</td>
                                            <td class="border border-gray-300 px-4 py-2">+16,2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <aside class="bg-blue-50 p-4 rounded-md mt-6 shadow-md">
                                    <h3 class="font-semibold">5. Contoh</h3>
                                    <div class="bg-blue-100 p-4 rounded-lg mt-4">
                                        <p>
                                            Bahan bakar hidrogen merupakan bahan bakar tanpa emisi yang digunakan sebagai
                                            bahan bakar bagi pembangkit listrik bersama dengan oksigen menggunakan suatu
                                            unit yang dinamakan dengan hydrogen fuel cell. Identifikasi jenis perubahan
                                            entalpi reaksinya:
                                        </p>
                                        <p class="text-center font-semibold mt-2">H₂(g) + ½ O₂(g) → H₂O(g) ΔH = -286 kJ/mol
                                        </p>
                                        <h4 class="font-bold mt-4">Jawaban:</h4>
                                        <p>Entalpi pembakaran standar.</p>
                                    </div>

                                </aside>
                            </article>
                        </section>

                    </article>
                    <h3 class="font-semibold mt-6 text-xl text-gray-800">Emisi Nol Bersih (Net Zero Emission)</h3>
                    <p>Seperti yang telah dipelajari sebelumnya, entalpi adalah konsep penting yang menggambarkan jumlah
                        total
                        energi dalam suatu sistem, terutama dalam bentuk panas. Ketika reaksi kimia terjadi, entalpi dapat
                        berubah, dan perubahan ini sering kali disertai dengan pelepasan atau penyerapan energi. Sebagai
                        contoh
                        adalah reaksi pembakaran yang melepaskan energi pada pembangkit listrik tenaga batu bara atau mesin
                        kendaraan bermotor. Namun, pembakaran bahan bakar fosil ini juga menghasilkan emisi gas rumah kaca,
                        terutama karbon dioksida (CO<sub>2</sub>), yang merupakan kontributor utama pemanasan global.</p>

                    <p>Untuk mengatasi masalah emisi dan mengurangi dampaknya terhadap perubahan iklim, solusi yang sedang
                        banyak dibahas adalah mencapai <strong>net zero emission</strong> atau emisi nol. Konsep net zero
                        emission berfokus pada menghilangkan emisi gas rumah kaca dari berbagai proses industri dan energi.
                        Salah satu pendekatan utama dalam menuju net zero emission adalah dengan menggantikan bahan bakar
                        fosil
                        dengan sumber energi terbarukan yang bersih, seperti tenaga surya, angin, atau hidrogen. Untuk
                        mengetahui net zero emission, kamu dapat menonton video berikut atau mencari sumber bacaan lainnya:
                    </p>
                </section>

                <div class="container mx-auto py-8">
                    <h3 class="text-2xl font-bold text-center mb-6">Kegiatan Belajar III: Penentuan Perubahan Entalpi</h3>
                    <p class="mb-4">
                        Bahan bakar merupakan pengeluaran yang signifikan di rumah dan industri. Informasi tentang berapa
                        banyak energi
                        yang dapat dilepaskan dari berbagai jenis bahan bakar sangat berguna. Salah satu penggunaan,
                        pengukuran, dan
                        perhitungan termokimia yang paling penting adalah bahan bakar sebagai sumber energi. Salah satu cara
                        untuk
                        membandingkan berbagai bahan bakar adalah melalui nilai panas pembakarannya. Secara umum, semakin
                        tinggi nilai
                        panas, semakin baik bahan bakarnya.
                    </p>
                    <p class="mb-4">
                        Panas pembakaran ini dapat ditentukan melalui perhitungan perubahan entalpi. Perubahan entalpi (ΔH)
                        dapat
                        ditentukan melalui tiga cara, yakni dari hasil eksperimen, dari penerapan Hukum Hess, atau dengan
                        data entalpi
                        pembentukan dan energi ikatan.
                    </p>

                    <h4 class="text-xl font-bold text-gray-800 mt-6 mb-4">A. Berdasarkan Eksperimen</h4>
                    <p class="mb-4">
                        Prinsip utama dalam perhitungan entalpi menggunakan Asas Black yang berbunyi kalor yang diserap akan
                        sama dengan
                        kalor yang dilepas selama reaksi berlangsung. Pada asas ini juga dapat dihitung adalah apakah panas
                        reaksi bukan
                        entalpi reaksi, tetapi karena proses reaksi ini dilakukan pada tekanan tetap, maka nilai kalor
                        reaksi akan sama
                        dengan nilai entalpi. Dengan demikian, entalpi suatu reaksi dapat dihitung secara otomatis nilai
                        entalpi juga dapat
                        ditentukan. Perubahan entalpi dapat ditentukan dengan pengukuran kalor, dan alat yang banyak dipakai
                        untuk entalpi
                        adalah kalorimeter.
                    </p>
                    <figure class="flex flex-col justify-center mt-4">
                        <img src="{{ asset('assets/images/kalori-sederhana.png') }}" alt="Kalorimeter"
                            class="w-2/3 rounded-md shadow-md w-fit">
                        <figcaption class="text-sm text-center text-gray-500 mt-2">
                            Gambar 10. Kalorimeter sederhana (kiri) dan kalorimeter bom (kanan) (sumber: google.com)
                        </figcaption>
                    </figure>

                    <h4 class="text-lg font-bold text-gray-700 mt-6 mb-4">Kalorimeter</h4>
                    <p>
                        Kalorimeter adalah suatu alat untuk mengukur jumlah kalor yang diserap atau dilepaskan sistem.
                        Proses pengukuran kalor reaksi disebut kalorimetri.
                        Kalorimeter sederhana dibuat dari wadah yang bersifat isolator (tidak menyerap kalor). Kalorimeter
                        bom merupakan suatu kalorimeter yang dirancang khusus sehingga benar-benar terisolasi.
                        Meskipun sistem dikatakan terisolasi, tetapi alat ini masih dapat menyerap atau melepaskan kalor ke
                        lingkungan, dalam hal ini lingkungannya adalah kalorimeter sendiri.
                    </p>
                    <p>Hubungan kalor yang diserap atau dilepaskan sistem dapat dinyatakan dengan persamaan:</p>
                    <p class="font-semibold text-center">q<sub>reaksi</sub> + q<sub>larutan</sub> + q<sub>kalorimeter</sub>
                        = 0</p>
                    <p>Hubungan kalor secara spesifik adalah:</p>
                    <pre class="bg-gray-100 p-4 rounded-md">
                    q<sub>larutan</sub> = m.c.ΔT dan q<sub>kalorimeter</sub> = C<sub>kal</sub>.ΔT
                    </pre>
                    <p>Keterangan:</p>
                    <ul class="list-disc ml-6">
                        <li><strong>q</strong>: jumlah kalor (J)</li>
                        <li><strong>m</strong>: massa larutan (gram)</li>
                        <li><strong>c</strong>: kalor jenis larutan (J g⁻¹ K⁻¹)</li>
                        <li><strong>C<sub>kal</sub></strong>: kapasitas kalor (J/°C)</li>
                        <li><strong>ΔT</strong>: kenaikan suhu (°C)</li>
                    </ul>

                    <div class="bg-gray-50 p-4 rounded-md mt-4">
                        <h5 class="font-semibold text-blue-700">Contoh:</h5>
                        <p>
                            Dalam kalorimeter yang telah dikalibrasi dan terbukti direaksikan 50 g alkohol dan 30 g logam
                            nutrisi. Jika suhu awal campuran 30°C dan setelah reaksi suhu mencapai 75°C, diketahui kalor
                            jenis larutan (3,65 J g⁻¹°C⁻¹), kapasitas kalor kalorimeter (150 J/°C), dan suhu kalorimeter
                            naik sebesar 10°C.
                        </p>
                        <p><strong>Hitunglah kalor yang terlibat dalam reaksi:</strong></p>
                        <pre class="bg-gray-100 p-4 rounded-md">
                            q<sub>larutan</sub> = m.c.ΔT
                            q<sub>larutan</sub> = (53g) × (3.65 J g⁻¹ °C⁻¹) × (45°C)
                            q<sub>larutan</sub> = 8,705.25 J
                    
                            q<sub>kalorimeter</sub> = C<sub>kal</sub>.ΔT
                            q<sub>kalorimeter</sub> = (150 J/°C) × (10°C)
                            q<sub>kalorimeter</sub> = 1,500 J
                    
                            Total q<sub>reaksi</sub> = - (q<sub>larutan</sub> + q<sub>kalorimeter</sub>)
                            Total q<sub>reaksi</sub> = - (8,705.25 + 1,500)
                            Total q<sub>reaksi</sub> = -10,205.25 J
                        </pre>
                    </div>

                    <p>Jadi, reaksi alkohol dan logam natrium dilepaskan kalor sebesar 10.205 kJ. Oleh karena pada percobaan
                        dilakukan pada tekanan tetap maka q reaksi = ΔH reaksi = –10.205 kJ.</p>
                    <div class="bg-blue-50 p-4 rounded-md shadow-md">
                        <h4 class="text-lg font-bold text-gray-700 mt-6 mb-4">Tahukah Kamu?</h4>
                        <p class="text-gray-700">
                            Kalor jenis (<em>specific heat</em>) suatu zat adalah jumlah kalor yang dibutuhkan untuk
                            menaikkan suhu 1 gram zat sebesar satu derajat Celsius.
                            Kapasitas kalor (<em>heat capacity</em>) suatu zat adalah jumlah kalor yang dibutuhkan untuk
                            menaikkan suhu sejumlah zat sebesar satu derajat Celsius.
                            Kalor jenis beberapa zat ditampilkan sebagai berikut:
                        </p>
                        <table class="table-auto border-collapse border border-gray-300 w-full mt-4">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="border border-gray-300 px-4 py-2">Zat</th>
                                    <th class="border border-gray-300 px-4 py-2">Kalor Jenis (J/g°C)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Al</td>
                                    <td class="border border-gray-300 px-4 py-2">0,900</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Au</td>
                                    <td class="border border-gray-300 px-4 py-2">0,129</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">C (grafit)</td>
                                    <td class="border border-gray-300 px-4 py-2">0,720</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">C (intan)</td>
                                    <td class="border border-gray-300 px-4 py-2">0,520</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Cu</td>
                                    <td class="border border-gray-300 px-4 py-2">0,444</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hg</td>
                                    <td class="border border-gray-300 px-4 py-2">0,139</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h4 class="text-lg font-bold text-gray-700 mt-6 mb-4">B. Berdasarkan Hukum Hess</h4>
                    <p class="text-gray-700">
                        Perubahan entalpi kadang sukar diukur atau ditentukan langsung dengan percobaan. Pada tahun 1840
                        Henry Hess dari Jerman menyatakan, perubahan entalpi reaksi hanya tergantung pada keadaan awal dan
                        akhir sistem, tidak bergantung pada jalannya reaksi. Jadi, jika suatu reaksi berlangsung menurut dua
                        tahap atau lebih, maka kalor reaksi totalnya sama dengan jumlah kalor tahap reaksinya. Hukum Hess
                        digunakan untuk menghitung ΔH suatu reaksi, berdasarkan beberapa harga ΔH dari reaksi lain yang
                        sudah diketahui. Hukum Hess dapat dinyatakan dalam bentuk diagram siklus atau diagram tingkat
                        energi. Menurut Hukum Hess:
                    </p>
                    <p class="text-center font-semibold">ΔH = ΔH<sub>1</sub> + ΔH<sub>2</sub></p>
                    <p class="text-gray-700">
                        Hukum Hess dapat diilustrasikan melalui pembakaran nitrogen yang menghasilkan nitrogen dioksida
                        seperti berikut ini:
                    </p>
                    <p class="text-center font-semibold">
                        N<sub>2</sub>(g) + 2O<sub>2</sub>(g) → 2NO<sub>2</sub>(g) &nbsp;&nbsp;&nbsp;&nbsp; ΔH = +68 kJ/mol
                    </p>
                    <p class="text-gray-700">
                        Reaksi ini juga dapat dilakukan dalam dua langkah, dengan perubahan entalpi yang ditandai dengan
                        ΔH<sub>1</sub> dan ΔH<sub>2</sub>:
                    </p>
                    <p class="text-center font-semibold">
                        N<sub>2</sub>(g) + O<sub>2</sub>(g) → 2NO(g) &nbsp;&nbsp;&nbsp;&nbsp; ΔH<sub>1</sub> = +180
                        kJ/mol<br>
                        2NO(g) + O<sub>2</sub>(g) → 2NO<sub>2</sub>(g) &nbsp;&nbsp;&nbsp;&nbsp; ΔH<sub>2</sub> = -112
                        kJ/mol<br>
                        N<sub>2</sub>(g) + 2O<sub>2</sub>(g) → 2NO<sub>2</sub>(g) &nbsp;&nbsp;&nbsp;&nbsp; ΔH = +68 kJ/mol
                    </p>

                    <aside class="bg-blue-50 p-4 rounded-md mt-6 shadow-md">
                        <h5 class="text-md font-bold text-gray-700 mb-2">Contoh:</h5>
                        <p class="text-gray-700">
                            Hitung ΔH untuk reaksi tersebut berdasarkan persamaan termokimia berikut:
                        </p>
                        <p class="text-center font-semibold">
                            2C(s) + H<sub>2</sub>(g) → C<sub>2</sub>H<sub>4</sub>(g)
                        </p>
                        <p class="text-gray-700">
                            (a) C(s) + O<sub>2</sub>(g) → CO<sub>2</sub>(g) &nbsp;&nbsp;&nbsp;&nbsp; ΔH<sub>R</sub> = -393,5
                            kJ/mol<br>
                            (b) H<sub>2</sub>(g) + ½O<sub>2</sub>(g) → H<sub>2</sub>O(l) &nbsp;&nbsp;&nbsp;&nbsp;
                            ΔH<sub>R</sub> = -285,8 kJ/mol<br>
                            (c) C<sub>2</sub>H<sub>4</sub>(g) + 5/2O<sub>2</sub>(g) → 2CO<sub>2</sub>(g) +
                            2H<sub>2</sub>O(l) &nbsp;&nbsp;&nbsp;&nbsp; ΔH<sub>R</sub> = -1.299,8 kJ/mol
                        </p>
                        <h5 class="text-md font-bold text-gray-700 mt-6 mb-2">Jawaban:</h5>
                        <p class="text-gray-700 font-bold">Aturan yang harus diperhatikan adalah:</p>
                        <ol class="list-decimal list-inside text-gray-700 pl-4">
                            <li>
                                Posisi pereaksi dan hasil reaksi yang diketahui harus sama dengan posisi yang ditanyakan.
                                Jika tidak sama maka posisi yang diketahui harus dibalik.
                            </li>
                            <li>
                                Koefisien reaksi (mol zat) yang diketahui harus sama dengan yang ditanyakan. Jika tidak
                                maka massa harus disamakan terlebih dahulu dengan cara dibagi atau dikalikan, demikian
                                juga dengan nilai entalpinya.
                                <ul class="list-disc list-inside pl-6">
                                    <li>Persamaan (a) harus dikalikan 2 sebab reaksi pembentukan asetilen memerlukan 2 mol
                                        C.</li>
                                    <li>Persamaan (b) tidak perlu diubah sebab sudah sesuai dengan persamaan reaksi
                                        pembentukan setara (1 mol H<sub>2</sub>).</li>
                                    <li>Persamaan (c) perlu dibalikkan arahnya, sebab C<sub>2</sub>H<sub>4</sub> berada
                                        sebagai pereaksi.</li>
                                </ul>
                            </li>
                        </ol>
                        <p class="text-gray-700 mt-4">
                            Persamaan termokimia menjadi:
                        </p>
                        <p class="text-center font-semibold">
                        <div class="flex justify-between">
                            <div class="">
                                2C(s) + 2O<sub>2</sub>(g) → 2CO<sub>2</sub>(g)
                            </div>
                            <div class="">
                                ΔH<sub>1</sub> = 2(-393,5) kJ/mol<br>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                H<sub>2</sub>(g) + ½O<sub>2</sub>(g) → H<sub>2</sub>O(l)
                            </div>
                            <div class="">
                                ΔH<sub>2</sub>= -285,8 kJ/mol<br>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                C<sub>2</sub>H<sub>4</sub>(g) + 5/2O<sub>2</sub>(g) → 2CO<sub>2</sub>(g) +
                                2H<sub>2</sub>O(l)
                            </div>
                            <div class="">
                                ΔH<sub>3</sub> = -1.299,8 kJ/mol<br>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                2C(s) + H<sub>2</sub>(g) → C<sub>2</sub>H<sub>4</sub>(g)
                            </div>
                            <div class="">
                                ΔH = ΔH<sub>1</sub> + ΔH<sub>2</sub> + ΔH<sub>3</sub> = +227,0 kJ/mol
                            </div>
                        </div>
                        </p>
                    </aside>

                    <h5 class="text-md font-bold text-gray-700 mt-6 mb-2">C. Berdasarkan Data Entalpi Pembentukan</h5>
                    <p class="text-gray-700">
                        Kalor suatu reaksi juga dapat ditentukan dari data entalpi pembentukan (ΔH<sup>f</sup>) zat-zat
                        pereaksi (reaktan) dan zat-zat hasil reaksi (produk).
                    </p>
                    <p class="text-gray-700 font-semibold">
                        ΔH = total entalpi pembentukan standar dari produk − total entalpi pembentukan standar dari
                        reaktan
                    </p>
                    <p class="text-gray-700">
                        Di mana entalpi pembentukan standar setiap zat dikalikan dengan koefisien dalam persamaan
                        reaksinya.
                    </p>
                    <p class="text-gray-700 font-bold mt-4">Untuk reaksi hipotesis:</p>
                    <p class="text-center font-semibold">
                        A + B → C + D &nbsp;&nbsp;&nbsp;&nbsp; ΔH = ?
                    </p>
                    <p class="text-gray-700">
                        A dan B adalah koefisien reaktan A, B adalah koefisien reaktan B, C adalah koefisien produk C,
                        dan D adalah koefisien produk D, dan seterusnya.
                    </p>
                    <p class="text-center font-semibold mt-4">
                        ΔH = [cΔH<sup>f</sup>(C) + dΔH<sup>f</sup>(D)] − [aΔH<sup>f</sup>(A) + bΔH<sup>f</sup>(B)]
                    </p>

                    <section class="bg-yellow-50 p-4 rounded-md mt-6 shadow-md">
                        <h5 class="text-md font-bold text-gray-700 mt-6 mb-2">Contoh:</h5>
                        <p class="text-gray-700">
                            Gunakan data ΔH<sup>f</sup> untuk menentukan ΔH<sup>R</sup> reaksi amonia dan oksigen berlebih.
                        </p>
                        <p class="text-gray-700 mt-2">
                            Persamaan reaksinya:
                            <br>
                            4NH<sub>3</sub>(g) + 3O<sub>2</sub>(g) → 2N<sub>2</sub>(g) + 6H<sub>2</sub>O(g)
                        </p>
                        <p class="text-gray-700">
                            ΔH<sup>f</sup> masing-masing zat adalah:
                            <br>
                            ΔH<sup>f</sup>(NH<sub>3</sub>) = −46,11 kJ/mol <br>
                            ΔH<sup>f</sup>(H<sub>2</sub>O) = −241,8 kJ/mol
                        </p>
                        <p class="text-gray-700 mt-2">
                            Substitusi data ke dalam persamaan:
                        </p>
                        <p class="text-center font-semibold">
                            ΔH<sup>R</sup> = [2(0) + 6(−241,8)] − [4(−46,11) + 3(0)] <br>
                            ΔH<sup>R</sup> = (0 − 1450,8) − (−184,44 + 0) <br>
                            ΔH<sup>R</sup> = −1.340 kJ/mol
                        </p>
                    </section>

                    <h3 class="text-lg font-bold text-gray-800 mt-6">D. Berdasarkan Data Energi Ikatan</h3>
                    <p>
                        Pada dasarnya reaksi kimia terdiri dari dua proses, yaitu pemutusan ikatan antar atom-atom dari
                        senyawa yang bereaksi (proses yang memerlukan energi) dan penggabungan ikatan kembali dari atom-atom
                        yang terlibat reaksi sehingga membentuk susunan baru (proses yang membebaskan energi). Perubahan
                        entalpi reaksi dapat dihitung dengan menggunakan data energi ikatan. Energi ikatan adalah energi
                        yang diperlukan untuk memutuskan 1 mol ikatan dalam fase gas zat kovalen untuk membentuk produk
                        dalam fase gas pada suhu dan tekanan konstan. Energi ikatan rata-rata adalah rata-rata energi
                        disosiasi ikatan untuk sejumlah spesies berbeda (molekul atau ion) yang mengandung ikatan tertentu.
                        Berikut beberapa data energi ikatan:
                    </p>
                    <table class="table-auto border-collapse border border-gray-300 w-full mt-4">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2">Ikatan</th>
                                <th class="border border-gray-300 px-4 py-2">EI (kJ/mol)</th>
                                <th class="border border-gray-300 px-4 py-2">Ikatan</th>
                                <th class="border border-gray-300 px-4 py-2">EI (kJ/mol)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">H–H</td>
                                <td class="border border-gray-300 px-4 py-2">+436</td>
                                <td class="border border-gray-300 px-4 py-2">C=C</td>
                                <td class="border border-gray-300 px-4 py-2">+837</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">O–H</td>
                                <td class="border border-gray-300 px-4 py-2">+463</td>
                                <td class="border border-gray-300 px-4 py-2">C=O</td>
                                <td class="border border-gray-300 px-4 py-2">+736</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">C–H</td>
                                <td class="border border-gray-300 px-4 py-2">+414</td>
                                <td class="border border-gray-300 px-4 py-2">N=N</td>
                                <td class="border border-gray-300 px-4 py-2">+946</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">H–Cl</td>
                                <td class="border border-gray-300 px-4 py-2">+432</td>
                                <td class="border border-gray-300 px-4 py-2">Cl–Cl</td>
                                <td class="border border-gray-300 px-4 py-2">+242</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Br–Br</td>
                                <td class="border border-gray-300 px-4 py-2">+193</td>
                                <td class="border border-gray-300 px-4 py-2">I–I</td>
                                <td class="border border-gray-300 px-4 py-2">+151</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4">
                        Energi ikatan dapat digunakan untuk menghitung perubahan entalpi suatu reaksi jika semua reaktan dan
                        produk berada dalam fase gas. Reaksi dapat dianggap melibatkan dua langkah, pertama semua ikatan
                        dalam reaktan dalam fase gas putus dan atom dalam fase gas terbentuk. Langkah ini membutuhkan
                        energi, dan perubahan entalpi ΔH (putusnya ikatan) = ΣEI(reaktan).
                    </p>
                    <p>
                        Kedua, atom dalam fase gas bergabung kembali menjadi molekul produk. Pada langkah ini ikatan
                        terbentuk dan energi dilepaskan, dan perubahan entalpi ΔH (pembentukan ikatan) = ΣEI(produk).
                    </p>
                    <p>
                        Sehingga, perubahan entalpi total dihitung dengan rumus:
                    </p>
                    <p class="text-center font-semibold mt-2">
                        ΔH = Σ[reaktan - EI (produk)].
                    </p>
                    <aside class="bg-blue-50 p-4 rounded-md mt-6 shadow-md">
                        <h5 class="text-md font-bold text-gray-700 mb-2">Contoh:</h5>
                        <p class="text-gray-700">Persamaan reaksinya:</p>
                        <p class="text-center font-semibold">N₂(g) + 3H₂(g) → 2NH₃(g)</p>
                        <p class="text-gray-700 mt-4">Ikatan yang putus pada reaktan:</p>
                        <ul class="list-disc list-inside ml-4">
                            <li>N≡N: 1 × 418 kJ/mol = 418 kJ/mol</li>
                            <li>H–H: 3 × 432 kJ/mol = 1.296 kJ/mol</li>
                        </ul>
                        <p class="font-semibold">Total energi yang diperlukan = 1.714 kJ/mol</p>
                        <p class="text-gray-700 mt-4">Ikatan yang terbentuk pada produk:</p>
                        <ul class="list-disc list-inside ml-4">
                            <li>N–H: 2 × 386 kJ/mol = 1.158 kJ/mol</li>
                        </ul>
                        <p class="font-semibold">Total energi yang dilepaskan = 1.158 kJ/mol</p>
                        <h5 class="text-md font-bold text-gray-700 mt-4">Jawaban:</h5>
                        <p class="text-gray-700">
                            Perubahan entalpi reaksi:
                            <br>
                            ΔH<sub>reaksi</sub> = ΔH (pemutusan ikatan) - ΔH (pembentukan ikatan)
                            <br>
                            = 1.714 kJ/mol - 1.158 kJ/mol
                            <br>
                            = 556 kJ/mol
                        </p>
                    </aside>

                    <h3 class="text-lg font-bold text-gray-800 mt-6">Bahan Bakar Hidrogen (Hydrogen Fuel)</h3>
                    <p>
                        Seperti yang telah dipelajari sebelumnya, perubahan entalpi adalah ukuran perubahan total energi
                        dalam suatu sistem selama reaksi kimia atau proses fisik yang sering kali melibatkan perubahan
                        panas. Penentuan perubahan entalpi penting untuk memahami bagaimana energi diserap atau dilepaskan
                        dalam suatu proses. Ini memiliki aplikasi yang luas, termasuk dalam pengembangan dan evaluasi bahan
                        bakar yang ramah lingkungan.
                    </p>
                    <p>
                        Salah satu bahan bakar yang menarik perhatian dalam upaya transisi ke energi bersih adalah hidrogen.
                        Sebagai bahan bakar, hidrogen memiliki berbagai keuntungan. Namun, untuk menggunakan hidrogen
                        sebagai bahan bakar memerlukan pendekatan dan teknologi khusus. Reaksi pembakaran hidrogen berikut
                        ini merupakan salah satu aplikasi yang terkait. Jika kamu ingin mengetahui lebih dalam mengenai
                        bahan bakar hidrogen, kamu dapat menonton video berikut atau mencari sumber bacaan lainnya.
                    </p>

                </div>

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

    <!-- Modal for Automatic Tutorial with Carousel -->
    <div class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
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
