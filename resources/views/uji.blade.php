@extends('layouts.layout')

@section('content')
    <div class="mx-auto px-4 flex gap-5 pb-8 pt-24 relative">
        <div class="flex gap-5 absolute top-20 left-5 w-16 h-16">
            <img src="{{ asset('assets/icons/left-1.png') }}" class="w-full object-contain max-w-28 z-[2] h-full"
                alt="">
            <img src="{{ asset('assets/icons/left-2.png') }}" class="w-full object-contain max-w-28 z-[2] h-full"
                alt="">
        </div>
        <div class="flex gap-5 absolute top-20 right-24 w-24 h-16">
            <img src="{{ asset('assets/icons/right-1.png') }}" class="w-full object-contain max-w-28 z-[2] h-full"
                alt="">
            <img src="{{ asset('assets/icons/right-2.png') }}" class="w-full object-contain max-w-28 z-[2] h-full"
                alt="">
        </div>
        <!-- Sticky Aside -->
        <aside class="w-1/3 pl-4 h-fit sticky top-24 mt-40">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-4">Navigasi Soal</h3>
                <ul class="list-none gap-4 grid grid-cols-4">
                    @foreach (range(1, 20) as $number)
                        <li>
                            <a href="#soal-{{ $number }}" data-target="soal-{{ $number }}"
                                class="text-white bg-blue-500 w-10 flex justify-center items-center aspect-square rounded-lg hover:bg-blue-400 hover:scale-95 hover:underline transition-all ease-in-out">
                                {{ $number }}
                            </a>
                        </li>
                    @endforeach
                    @foreach (range(1, 3) as $number)
                        <li>
                            <a href="#soal-esai-{{ $number }}" data-target="soal-esai-{{ $number }}"
                                class="text-white bg-green-500 w-10 flex justify-center items-center aspect-square rounded-lg hover:bg-green-400 hover:scale-95 hover:underline transition-all ease-in-out">
                                E{{ $number }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </aside>


        <div class="mt-24">
            <h2 class="text-3xl font-bold text-center mb-6">Soal Pre-test dan Post-test</h2>

            <!-- Pre-test and Post-test Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-8">
                <ol class="list-decimal list-inside space-y-4">
                    <li id="soal-1">
                        Seorang siswa sedang melakukan percobaan mencampurkan asam klorida (HCl) dengan larutan natrium
                        hidroksida (NaOH) dalam sebuah kalorimeter, siswa tersebut mengamati kenaikan suhu campuran.
                        Berdasarkan fenomena ini, manakah pernyataan yang paling tepat menggambarkan konsep termokimia?
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Termokimia mempelajari hubungan antara kalor dengan perubahan warna suatu zat.</li>
                            <li>b. Termokimia hanya mempelajari reaksi eksoterm, yaitu reaksi yang melepaskan kalor.</li>
                            <li>c. Termokimia mempelajari hubungan antara kalor dengan perubahan energi dalam suatu reaksi
                                kimia.</li>
                            <li>d. Termokimia mempelajari pengaruh tekanan terhadap laju reaksi.</li>
                        </ul>
                    </li>

                    <li id="soal-2">
                        Kegiatan pramuka atau peminat kegiatan alam bebas sering membuat api unggun sewaktu berkemah atau
                        melakukan kegiatan di alam terbuka. Api unggun membuat keadaan sekitar akan menjadi lebih hangat
                        dari sebelumnya. Namun, saat api unggun mulai padam keadaan sekitar kembali dingin seperti keadaan
                        semula. <br>
                        Berdasarkan fenomena di atas, perhatikan pernyataan berikut:
                        <ol class="list-decimal list-inside ml-5">
                            <li>Kalor dihasilkan dari perubahan energi kimia yang tersimpan pada kayu saat dibakar.</li>
                            <li>Saat api unggun padam, kalor musnah dengan sendirinya.</li>
                            <li>Kalor berpindah dari suhu tinggi ke suhu yang lebih rendah.</li>
                            <li>Kalor tidak musnah tetapi diserap oleh molekul-molekul di udara dan menjadi energi kinetik.
                            </li>
                            <li>Kalor hanya dapat dihasilkan dari pembakaran.</li>
                        </ol>
                        Merujuk pada hukum kekekalan energi pernyataan yang benar adalah ...
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. 1, 2, dan 3</li>
                            <li>b. 1, 3, dan 4</li>
                            <li>c. 2, 4, dan 5</li>
                            <li>d. 2, 3, dan 4</li>
                        </ul>
                    </li>
                    <li id="soal-3">
                        Suatu reaksi berlangsung pada tekanan tetap disertai pelepasan kalor sebanyak 100 kkal dan sistem
                        melakukan kerja sebesar 5 kkal, maka...
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. ΔE = +105 kkal; ΔH = +100 kkal</li>
                            <li>b. ΔE = -105 kkal; ΔH = -100 kkal</li>
                            <li>c. ΔE = -95 kkal; ΔH = -100 kkal</li>
                            <li>d. ΔE = -105 kkal; ΔH = +100 kkal</li>
                        </ul>
                    </li>
                    <li id="soal-4">
                        Sifat apa yang ditunjukkan apabila dari fakta bahwa bila kristal KNO₃ di dalam tabung reaksi
                        ditetesi dengan air menyebabkan dasar tabung reaksi akan dingin?
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Eksotermik karena energi dari lingkungan masuk ke dalam sistem</li>
                            <li>b. Endotermik karena tidak ada perpindahan energi</li>
                            <li>c. Eksotermik karena energi mengalir dari sistem ke lingkungan</li>
                            <li>d. Endotermik karena dari lingkungan ke sistem</li>
                        </ul>
                    </li>

                    <li id="soal-5">
                        Seorang siswa mendemonstrasikan lampu senter yang bisa menyala tanpa baterai, namun menggunakan
                        energi panas tubuh. Energi panas tubuh diperoleh dari perbedaan suhu udara dalam ruangan dengan suhu
                        tubuh.
                        Kalor yang dihasilkan dialirkan ke plat senter untuk menyalakan lampu dalam senter. Perbedaan suhu
                        tubuh
                        dan suhu ruangan diperlukan minimal 5°C. Jika kurang dari itu, kemungkinan lampu senter itu tidak
                        akan
                        menyala atau menyala namun kurang terang. <br>
                        <strong>Pernyataan yang Tidak Sesuai</strong> dengan fenomena di atas adalah…
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Energi panas tubuh dapat dihasilkan dari reaksi pembakaran dalam tubuh</li>
                            <li>b. Reaksi eksoterm terjadi pada saat pelepasan kalor dari tubuh</li>
                            <li>c. Plat pada lampu senter bertindak sebagai sistem, sedangkan energi panas tubuh merupakan
                                lingkungan.</li>
                            <li>d. Lampu dapat menyala terang jika suhu tubuh 37°C dan suhu ruangan 27°C</li>
                        </ul>
                    </li>
                    <li id="soal-6">
                        Reaksi antara larutan P dan larutan Q adalah reaksi eksoterm. Seorang siswa ingin membuktikan hal
                        ini
                        di laboratorium. Langkah percobaan yang tepat dilakukan siswa tersebut adalah…
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Mengukur suhu awal larutan P dan Q dengan termometer, kemudian mencampurkan kedua larutan
                                dalam gelas beaker dan mengukur suhu akhir larutan menggunakan termometer. Hasil yang
                                didapatkan adalah suhu akhir lebih tinggi dibandingkan suhu awal masing-masing larutan.</li>
                            <li>b. Mengukur suhu awal larutan P dan Q dengan termometer. Menentukan suhu awal larutan yaitu
                                dengan menghitung rata-rata suhu kedua larutan. Kemudian mencampurkan kedua larutan dalam
                                gelas beaker dan mengukur suhu akhir larutan menggunakan termometer. Kemudian membandingkan
                                suhu akhir larutan dengan suhu awal larutan diperoleh suhu akhir larutan lebih tinggi.</li>
                            <li>c. Mengukur suhu awal larutan P dan Q dengan termometer, kemudian mencampurkan kedua larutan
                                dalam gelas beaker dan mengukur suhu akhir larutan menggunakan termometer. Kemudian
                                membandingkan suhu akhir dengan masing-masing suhu awal larutan hasilnya lebih rendah.</li>
                            <li>d. Mengukur suhu larutan P dan Q dengan termometer. Menentukan suhu awal larutan yaitu
                                dengan menghitung rata-rata suhu kedua larutan. Kemudian mencampurkan kedua larutan dalam
                                gelas beaker dan mengukur suhu akhir larutan menggunakan termometer. Kemudian membandingkan
                                dengan suhu awal larutan diperoleh suhu akhir larutan lebih rendah.</li>
                        </ul>
                    </li>

                    <li id="soal-7">
                        Metanol (CH₃OH) adalah suatu senyawa alkohol yang dapat digunakan sebagai bahan bakar.
                        Diketahui kalor pembakaran CH₃OH(l) adalah -726 kJ/mol, kalor pembentukan CO₂(g) dan H₂O(l)
                        masing-masing adalah -393,5 kJ/mol dan -285,83 kJ/mol. Berdasarkan data tersebut, pernyataan berikut
                        yang benar adalah...
                        <br><strong>(Ar C = 12; H = 1; O = 16)</strong>
                        <ol class="list-decimal list-inside ml-5 mt-2">
                            <li>Pembakaran 224 gram CH₃OH(l) melepaskan kalor sebesar 5082 kJ/mol</li>
                            <li>Penguraian 4,48 liter CO₂(g) pada keadaan standar menjadi unsur-unsurnya membutuhkan kalor
                                sebesar 78,7 kJ/mol</li>
                            <li>Pembentukan 2H₂O(l) dari unsur-unsurnya melepaskan kalor sebesar 571,66 kJ/mol</li>
                            <li>Kalor pembentukan metanol sebesar -239,16 kJ/mol</li>
                        </ol>
                        <strong>Pilihlah pernyataan yang benar:</strong>
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. 1, 2 dan 3</li>
                            <li>b. 1 dan 3 benar</li>
                            <li>c. 2 dan 4 benar</li>
                            <li>d. Semua pertanyaan benar</li>
                        </ul>
                    </li>
                    <li id="soal-8">
                        Proses fotosintesis mengubah karbon dioksida dan air menjadi glukosa dan oksigen. Reaksi ini
                        membutuhkan energi cahaya.
                        Berdasarkan informasi ini, manakah pernyataan yang benar mengenai perubahan entalpi (ΔH) reaksi
                        fotosintesis?
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. ΔH bernilai negatif, reaksi bersifat eksoterm</li>
                            <li>b. ΔH bernilai positif, reaksi bersifat endoterm</li>
                            <li>c. ΔH bernilai nol, tidak ada perubahan energi</li>
                            <li>d. ΔH tidak dapat ditentukan karena melibatkan energi cahaya</li>
                        </ul>
                    </li>
                    <li id="soal-9">
                        Termokimia merupakan cabang ilmu kimia yang mempelajari mengenai…
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Kalor reaksi</li>
                            <li>b. Kinetika reaksi</li>
                            <li>c. Kemolaran reaksi</li>
                            <li>d. Kesetimbangan reaksi</li>
                        </ul>
                    </li>
                    <li id="soal-10">
                        Dalam sebuah proyek, siswa diminta menyusun persamaan termokimia untuk reaksi pembakaran gas metana
                        (CH₄).
                        Persamaan yang tepat untuk reaksi ini, termasuk perubahan entalpi adalah…
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. CH₄ + 2O₂ → CO₂ + 2H₂O ΔH = + 890 kJ/mol</li>
                            <li>b. CH₄ + 2O₂ → CO₂ + 2H₂O ΔH = - 890 kJ/mol</li>
                            <li>c. CH₄ + 2O₂ ΔH = + 890 kJ/mol → CO₂ + 2H₂O</li>
                            <li>d. CH₄ + 2O₂ → CO₂ + 2H₂O</li>
                        </ul>
                    </li>
                    <li id="soal-11">
                        Dari persamaan reaksi berikut:
                        <ol class="list-decimal list-inside ml-5 mt-2">
                            <li>CH₄(g) + 2O₂(g) → CO₂(g) + 2H₂O(l) ΔH = -802 kJ/mol</li>
                            <li>H₂(g) + ½ O₂(g) → H₂O(l) ΔH = -241,82 kJ/mol</li>
                            <li>NO(g) → ½ N₂(g) + ½ O₂(g) ΔH = -90,25 kJ/mol</li>
                            <li>½ N₂(g) + 2H₂(g) + ½ Cl₂(g) → NH₄Cl(s) ΔH = -314,4 kJ/mol</li>
                        </ol>
                        Yang merupakan reaksi pembentukan adalah...
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. 1 dan 2</li>
                            <li>b. 1 dan 3</li>
                            <li>c. 2 dan 3</li>
                            <li>d. 2 dan 4</li>
                        </ul>
                    </li>
                    <li id="soal-12">
                        Diketahui data entalpi pembentukan standar berikut:
                        <ul class="list-disc list-inside ml-5">
                            <li>CO₂(g): -393,5 kJ/mol</li>
                            <li>H₂O(l): -285,8 kJ/mol</li>
                            <li>CH₄(g): -74,8 kJ/mol</li>
                        </ul>
                        Hitunglah perubahan entalpi pembakaran sempurna 1 mol metana (CH₄) berdasarkan data di atas jika
                        diketahui persamaan reaksi pembakaran metana:<br />
                        CH₄(g) + 2O₂(g) → CO₂(g) + 2H₂O(l)
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. -890,3 kJ/mol</li>
                            <li>b. -789,1 kJ/mol</li>
                            <li>c. +890,3 kJ/mol</li>
                            <li>d. +789,1 kJ/mol</li>
                        </ul>
                    </li>
                    <li id="soal-13">
                        Manakah pernyataan berikut yang benar mengenai entalpi pembentukan standar?
                        <ol class="list-decimal list-inside ml-5">
                            <li>Entalpi pembentukan standar suatu unsur dalam keadaan stabil adalah nol.</li>
                            <li>Entalpi pembentukan standar selalu bernilai negatif.</li>
                            <li>Entalpi pembentukan standar merupakan perubahan entalpi ketika 1 mol senyawa terbentuk dari
                                unsur-unsurnya dalam keadaan standar.</li>
                        </ol>
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Hanya (i) benar</li>
                            <li>b. Hanya (ii) benar</li>
                            <li>c. Hanya (i) dan (iii) benar</li>
                            <li>d. Hanya (ii) dan (iii) benar</li>
                        </ul>
                    </li>
                    <li id="soal-14">
                        Cara yang digunakan untuk menentukan perubahan entalpi melalui pengukuran kalor reaksi dengan
                        kalorimeter disebut?
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Energi</li>
                            <li>b. Kalorimeter</li>
                            <li>c. Kalorimetri</li>
                            <li>d. Kapasitas kalor</li>
                        </ul>
                    </li>
                    <li id="soal-15">
                        Dalam sebuah percobaan kalorimetri, 50 mL larutan HCl 1 M direaksikan dengan 50 mL larutan NaOH 1 M
                        dalam kalorimeter. Suhu larutan naik dari 25°C menjadi 32°C.
                        Jika kalor jenis larutan dianggap sama dengan kalor jenis air (4,18 J/g°C) dan kalorimeter
                        diabaikan, maka perubahan entalpi netralisasi reaksi tersebut per mol adalah ...
                        <br />
                        Jika diketahui (Ar H = 1, O = 16, Na = 23, Cl = 35,5)
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. -58520 J/mol</li>
                            <li>b. -2780 J/mol</li>
                            <li>c. +5560 J/mol</li>
                            <li>d. +2780 J/mol</li>
                        </ul>
                    </li>
                    <li id="soal-16">
                        Dalam industri petrokimia, proses pengolahan minyak mentah menghasilkan berbagai produk seperti
                        bensin dan diesel. Tim siswa melakukan penelitian dan menemukan bahwa pengubahan energi dalam proses
                        tersebut melibatkan reaksi eksoterm. Apa yang dimaksud dengan reaksi eksoterm dalam konteks ini?
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. Reaksi yang menyerap energi dari lingkungan</li>
                            <li>b. Reaksi yang menghasilkan energi ke lingkungan</li>
                            <li>c. Reaksi yang tidak melibatkan perubahan energi</li>
                            <li>d. Reaksi yang terjadi pada suhu rendah</li>
                        </ul>
                    </li>
                    <li id="soal-17">
                        Diketahui data energi ikatan:
                        <table class="table-auto border-collapse border border-gray-400 w-full my-4">
                            <thead>
                                <tr>
                                    <th class="border border-gray-400 px-4 py-2">Ikatan</th>
                                    <th class="border border-gray-400 px-4 py-2">Energi Ikatan (kJ/mol)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">C–C</td>
                                    <td class="border px-4 py-2">347 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">C=C</td>
                                    <td class="border px-4 py-2">612 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">C–Cl</td>
                                    <td class="border px-4 py-2">331 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">C–H</td>
                                    <td class="border px-4 py-2">414 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Cl–Cl</td>
                                    <td class="border px-4 py-2">242 kJ/mol</td>
                                </tr>
                            </tbody>
                        </table>
                        Berdasarkan pada data energi ikatan, perubahan entalpi reaksi adisi dari 2 mol etena adalah:<br />
                        H₂C=CH₂(g) + Cl₂(g) → ClH₂C–CH₂Cl
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. -508 kJ</li>
                            <li>b. +310 kJ</li>
                            <li>c. -128 kJ</li>
                            <li>d. +354 kJ</li>
                        </ul>
                    </li>
                    <li id="soal-18">
                        Besarnya perubahan entalpi pembentukan <strong>14 gram CO</strong> berdasarkan diagram berikut ini
                        adalah... kkal<br />
                        (Ar C = 12; O = 16)
                        <img src="{{ asset('assets/images/no-18.png') }}" alt="">
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. -13</li>
                            <li>b. +13</li>
                            <li>c. -26</li>
                            <li>d. -13</li>
                        </ul>
                    </li>
                    <li id="soal-19">
                        Dalam sebuah percobaan, 200 cm³ larutan NaOH 1 M dinetralkan dengan 200 cm³ larutan HCl 1 M.
                        Data percobaan yang diperoleh adalah sebagai berikut:
                        <table class="table-auto border-collapse border border-gray-400 w-full my-4">
                            <thead>
                                <tr>
                                    <th class="border border-gray-400 px-4 py-2">No</th>
                                    <th class="border border-gray-400 px-4 py-2">Besaran yang diamati</th>
                                    <th class="border border-gray-400 px-4 py-2">Data pengamatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">Suhu NaOH</td>
                                    <td class="border px-4 py-2">27 °C</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">2</td>
                                    <td class="border px-4 py-2">Suhu HCl</td>
                                    <td class="border px-4 py-2">27 °C</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">3</td>
                                    <td class="border px-4 py-2">Suhu NaOH + HCl (dalam kalorimeter)</td>
                                    <td class="border px-4 py-2">35.5 °C</td>
                                </tr>
                            </tbody>
                        </table>
                        Jika larutan dianggap sama dengan air, perubahan entalpi reaksi (ΔH) netralisasi adalah...
                        kJ/mol.<br />
                        Diketahui:
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>Massa jenis larutan = 1 g/cm³</li>
                            <li>Kapasitas panas jenis air = 4,2 J/g·°C</li>
                            <li>Kapasitas panas kalorimeter = 2.740 J/°C</li>
                        </ul>
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. +14,28</li>
                            <li>b. +37,57</li>
                            <li>c. -37,57</li>
                            <li>d. -187,85</li>
                        </ul>
                    </li>

                    <li id="soal-20">
                        Disajikan data energi ikatan dan entalpi pembentukan standar:
                        <table class="table-auto border-collapse border border-gray-400 w-full my-4">
                            <thead>
                                <tr>
                                    <th class="border border-gray-400 px-4 py-2">Data energi ikatan</th>
                                    <th class="border border-gray-400 px-4 py-2">Data ΔH<sub>f</sub></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">C–H = 413 kJ mol⁻¹</td>
                                    <td class="border px-4 py-2">CH₄(g) = -74,8 kJ mol⁻¹</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">O=O = 495 kJ mol⁻¹</td>
                                    <td class="border px-4 py-2">CO₂(g) = -393,5 kJ mol⁻¹</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">O–H = 463 kJ mol⁻¹</td>
                                    <td class="border px-4 py-2">H₂O(g) = -241,82 kJ mol⁻¹</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2">H₂O(l) = -285,83 kJ mol⁻¹</td>
                                </tr>
                            </tbody>
                        </table>
                        Diketahui reaksi pembakaran metana sebagai berikut:<br />
                        CH₄(g) + O₂(g) → CO₂(g) + H₂O(l) (reaksi belum setara)<br />
                        Energi yang dibebaskan pada pembakaran <strong>16 gram</strong> gas metana adalah…
                        <ul class="list-disc list-inside ml-5 mt-2">
                            <li>a. 445,15 kJ (berdasarkan data ΔH<sub>f</sub>); 377 kJ (berdasarkan data energi ikatan)</li>
                            <li>b. 445,15 kJ (berdasarkan data ΔH<sub>f</sub>); 445,15 kJ (berdasarkan data energi ikatan)
                            </li>
                            <li>c. 604,5 kJ (berdasarkan data ΔH<sub>f</sub>); 580 kJ (berdasarkan data energi ikatan)</li>
                            <li>d. 890,36 kJ (berdasarkan data ΔH<sub>f</sub>); 624 kJ (berdasarkan data energi ikatan)</li>
                        </ul>
                    </li>
                </ol>
                <section id="soal-esai">
                    <h2 class="text-lg font-bold mt-6 mb-2">SOAL ESAI:</h2>
                    <ol class="list-decimal space-y-4 ml-5">
                        <li id="soal-esai-1" class="transition duration-300">
                            Ketika larutan asam klorida (HCl) dicampurkan dengan larutan natrium hidroksida (NaOH) dalam
                            jumlah yang setara, terjadi reaksi yang sangat cepat dan melepaskan kalor (panas). Pada saat
                            reaksi berlangsung, suhu larutan meningkat, menunjukkan bahwa reaksi tersebut adalah eksotermik.
                            Jelaskan reaksi kimia yang terjadi antara asam klorida (HCl) dan natrium hidroksida (NaOH) dan
                            apa jenis reaksi kimia yang terjadi?
                        </li>
                        <li id="soal-esai-2" class="transition duration-300">
                            Suatu ketika, siswa melakukan sebuah eksperimen di rumah dengan mencampurkan asam asetat
                            (CH₃COOH) dan baking soda/natrium bikarbonat (NaHCO₃) dalam sebuah botol plastik. Tiba-tiba,
                            botol tersebut mengembang dan mulai mengeluarkan banyak gas karbon dioksida (CO₂), yang
                            menyebabkan botol tersebut hampir meledak jika tidak segera dibuka. Jelaskan reaksi kimia yang
                            terjadi antara cuka dan baking soda dan tuliskan reaksi kimianya?
                        </li>
                        <li id="soal-esai-3" class="transition duration-300">
                            Bandingkan reaksi HCl dengan NaOH dan reaksi Mg dengan HCl dalam konteks energi yang terlibat.
                            Apa perbedaan utama dalam cara kedua reaksi tersebut melepaskan energi? Untuk membandingkan
                            reaksi antara HCl dengan NaOH dan reaksi antara Mg dengan HCl dalam konteks energi yang
                            terlibat, kita perlu memahami sifat masing-masing reaksi dan bagaimana energi dilepaskan.
                        </li>
                    </ol>
                </section>

            </div>
        </div>
    </div>

    <!-- Tambahkan Script -->
    <script>
        document.querySelectorAll('a[data-target]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('data-target');
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });
        });
    </script>
@endsection
