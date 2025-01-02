@extends('layouts.layout')

@section('content')
    <div class="mx-auto px-4 flex gap-5 pb-8 pt-24">
        <!-- Sticky Aside -->
        <aside class="w-1/3 pl-4 h-fit sticky top-24 mt-16">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-4">Navigasi Soal</h3>
                <ul class="list-none gap-4 grid grid-cols-4">
                    @foreach (range(1, 23) as $number)
                        <li>
                            <a href="#soal-{{ $number }}" data-target="soal-{{ $number }}"
                                class="text-white bg-blue-500 w-10 flex justify-center items-center aspect-square rounded-lg hover:bg-blue-400 hover:scale-95 hover:underline transition-all ease-in-out">
                                {{ $number }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>


        <div class="">
            <h2 class="text-3xl font-bold text-center mb-6">Soal Pre-test dan Post-test</h2>

            <!-- Pre-test and Post-test Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-8">
                <ol class="list-decimal list-inside space-y-4">
                    <li id="soal-1">
                        Seorang siswa sedang melakukan percobaan mencampurkan asam klorida (HCl) dengan larutan natrium
                        hidroksida (NaOH) dalam sebuah kalorimeter, siswa tersebut mengamati kenaikan suhu campuran.
                        Berdasarkan
                        fenomena ini, manakah pernyataan yang paling tepat menggambarkan konsep termokimia?
                    </li>
                    <li id="soal-2">
                        Kegiatan pramuka atau peminat kegiatan alam bebas sering membuat api unggun sewaktu berkemah atau
                        melakukan kegiatan di alam terbuka. Api unggun membuat keadaan sekitar akan menjadi lebih hangat
                        dari
                        sebelumnya. Namun, saat api unggun mulai padam keadaan sekitar kembali dingin seperti keadaan
                        semula.
                        <ul>
                            <li class="list-decimal list-inside ml-5">Kalor dihasilkan dari perubahan energi kimia yang
                                tersimpan
                                pada kayu saat dibakar.</li>
                            <li class="list-decimal list-inside ml-5">Saat api unggun padam, kalor musnah dengan sendirinya.
                            </li>
                            <li class="list-decimal list-inside ml-5">Kalor berpindah dari suhu tinggi ke suhu yang lebih
                                rendah.
                            </li>
                            <li class="list-decimal list-inside ml-5">Kalor tidak musnah tetapi diserap oleh molekul-molekul
                                di
                                udara dan menjadi energi kinetik.</li>
                            <li class="list-decimal list-inside ml-5">Kalor hanya dapat dihasilkan dari pembakaran.</li>
                        </ul>
                        Merujuk pada hukum kekekalan energi, manakah pernyataan yang benar?
                    </li>
                    <li id="soal-3">
                        Suatu reaksi berlangsung pada tekanan tetap disertai pelepasan kalor sebanyak 100 kkal dan sistem
                        melakukan kerja sebesar 5 kkal. Maka...
                    </li>
                    <li id="soal-4">
                        Sifat apa yang ditunjukkan apabila dari fakta bahwa bila kristal KNO₃ di dalam tabung reaksi
                        ditetesi
                        dengan air menyebabkan dasar tabung reaksi akan dingin?
                    </li>
                    <li id="soal-5">
                        Seorang siswa mendemonstrasikan lampu senter yang bisa menyala tanpa baterai, namun menggunakan
                        energi
                        panas tubuh. Energi panas tubuh diperoleh dari perbedaan suhu udara dalam ruangan dengan suhu tubuh.
                        Kalor yang dihasilkan dialirkan ke plat senter untuk menyalakan lampu dalam senter. Perbedaan suhu
                        tubuh
                        dan suhu ruangan diperlukan minimal 5°C. Jika kurang dari itu, kemungkinan lampu senter itu tidak
                        akan
                        menyala atau menyala namun kurang terang.
                        <p>Buatlah pernyataan yang tidak sesuai dengan fenomena di atas.</p>
                    </li>
                    <li id="soal-6">
                        Reaksi antara larutan P dan larutan Q adalah reaksi eksoterm. Seorang siswa ingin membuktikan hal
                        ini di
                        laboratorium. Buatlah langkah percobaan yang tepat dilakukan siswa tersebut.
                    </li>
                    <li id="soal-7">
                        Metanol (CH₃OH) adalah suatu senyawa alkohol yang dapat digunakan sebagai bahan bakar. Diketahui
                        kalor
                        pembakaran CH₃OH(l) adalah -726 kJ/mol, kalor pembentukan CO₂(g) dan H₂O(l) masing-masing adalah
                        -393,5
                        kJ/mol dan -285,83 kJ/mol. Berdasarkan data tersebut, tuliskan pernyataan berikut yang benar:
                        <ul>
                            <li class="list-decimal list-inside ml-5">Pembakaran 224 gram CH₃OH(l) melepaskan kalor sebesar
                                5082
                                kJ</li>
                            <li class="list-decimal list-inside ml-5">Penguraian 4,48 liter CO₂(g) pada keadaan standar
                                menjadi
                                unsur-unsurnya membutuhkan kalor
                                sebesar 78,7 kJ/mol</li>
                            <li class="list-decimal list-inside ml-5">Pembentukan 2H₂O(l) dari unsur-unsurnya melepaskan
                                kalor
                                sebesar 571,66 kJ/mol</li>
                            <li class="list-decimal list-inside ml-5">Kalor pembentukan metanol sebesar -239,16 Kj/mol</li>
                        </ul>
                    </li>
                    <li id="soal-8">
                        Proses fotosintesis mengubah karbon dioksida dan air menjadi glukosa dan oksigen. Reaksi ini
                        membutuhkan
                        energi cahaya. Berdasarkan informasi ini, manakah pernyataan yang benar mengenai perubahan entalpi
                        (ΔH)
                        pada reaksi fotosintesis?
                    </li>
                    <li id="soal-9">
                        Jelaskan pengertian termokimia cabang ilmu kimia yang mempelajari mengenai?
                    </li>
                    <li id="soal-10">
                        Dalam sebuah proyek, siswa diminta untuk menyusun persamaan termokimia untuk reaksi pembakaran gas
                        metana (CH4). Persamaan yang tepat untuk reaksi ini, termasuk perubahan entalpi, yaitu...
                    </li>
                    <li id="soal-11">
                        Dari persamaan reaksi berikut:
                        <ul>
                            <li class="list-decimal list-inside ml-5">CH₄(g) + 2O₂(g) → CO₂(g) + 2H₂O(l) ΔH = -802 kJ</li>
                            <li class="list-decimal list-inside ml-5">H₂(g) + ½ O₂(g) → H₂O(l) ΔH = -241,82 kJ</li>
                            <li class="list-decimal list-inside ml-5">NO(g) → ½ N₂(g) + ½ O₂(g) ΔH = -90,25 kJ</li>
                            <li class="list-decimal list-inside ml-5">½ N₂(g) + 2H₂(g) + ½ Cl₂(g) → NH₄Cl(s) ΔH = -314,4 kJ
                            </li>
                        </ul>
                        Tuliskan kembali yang merupakan reaksi pembentukan.
                    </li>
                    <li id="soal-12">
                        Diketahui data entalpi pembentukan standar berikut:
                        <ul>
                            <li class="list-disc list-inside ml-5">CO₂(g): -393,5 kJ/mol</li>
                            <li class="list-disc list-inside ml-5">H₂O(l): -285,8 kJ/mol</li>
                            <li class="list-disc list-inside ml-5">CH₄(g): -74,8 kJ/mol</li>
                        </ul>
                        Hitunglah perubahan entalpi pembakaran sempurna 1 mol metana (CH₄) berdasarkan data di atas jika
                        diketahui persamaan reaksi pembakaran metana:
                        <p>CH₄(g) + 2O₂(g) → CO₂(g) + 2H₂O(l)</p>
                    </li>
                    <li id="soal-13">
                        Buatlah beberapa pernyataan yang benar mengenai entalpi pembentukan standar?
                    </li>
                    <li id="soal-14">
                        Cara yang digunakan untuk menentukan perubahan entalpi melalui pengukuran kalor reaksi dengan
                        kalorimeter disebut?
                    </li>
                    <li id="soal-15">
                        Dalam sebuah percobaan kalorimetri, 50 mL larutan HCl 1 M direaksikan dengan 50 mL larutan NaOH 1 M
                        dalam kalorimeter. Suhu larutan naik dari 25°C menjadi 32°C. Jika kalor jenis larutan dianggap sama
                        dengan kalor jenis air (4,18 J/g°C) dan kalorimeter diabaikan, maka perubahan entalpi netralisasi
                        reaksi
                        tersebut per mol adalah...
                        <p>Jika diketahui (Ar H = 1, O = 16, Na = 23, Cl = 35,5)</p>
                    </li>
                    <li id="soal-16">
                        Dalam industri petrokimia, proses pengolahan minyak mentah menghasilkan berbagai produk seperti
                        bensin
                        dan diesel. Siswa melakukan penelitian dan menemukan bahwa pengubahan energi dalam proses tersebut
                        melibatkan reaksi eksoterm. Apa yang dimaksud dengan reaksi eksoterm dalam konteks ini, jelaskan?
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
                                    <td class="border border-gray-400 px-4 py-2">C-C</td>
                                    <td class="border border-gray-400 px-4 py-2">347 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">C=C</td>
                                    <td class="border border-gray-400 px-4 py-2">612 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">C-Cl</td>
                                    <td class="border border-gray-400 px-4 py-2">331 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">C-H</td>
                                    <td class="border border-gray-400 px-4 py-2">414 kJ/mol</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Cl-Cl</td>
                                    <td class="border border-gray-400 px-4 py-2">242 kJ/mol</td>
                                </tr>
                            </tbody>
                        </table>
                        Berdasarkan pada data energi ikatan, perubahan entalpi reaksi adisi dari 2 mol etena adalah...
                    </li>

                    <li id="soal-18">
                        H₂C = CH₂(g) + Cl₂(g) → ClH₂C - CH₂Cl. Hitunglah besaran perubahan entalpi pembentukan 14 gram CO
                        berdasarkan diagram berikut ini adalah... (Ar C=12; O=16).
                        <img src="{{ asset('assets/images/no-18.png') }}" alt="">
                    </li>
                    <li id="soal-19">
                        Dalam sebuah percobaan, 200 cm³ larutan NaOH 1 M dinetralkan dengan 200 cm³ larutan HCl 1 M. Data
                        percobaan yang diperoleh adalah sebagai berikut:
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
                                    <td class="border border-gray-400 px-4 py-2">1</td>
                                    <td class="border border-gray-400 px-4 py-2">Suhu NaOH</td>
                                    <td class="border border-gray-400 px-4 py-2">27°C</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">2</td>
                                    <td class="border border-gray-400 px-4 py-2">Suhu HCl</td>
                                    <td class="border border-gray-400 px-4 py-2">27°C</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">3</td>
                                    <td class="border border-gray-400 px-4 py-2">Suhu NaOH + HCl (dalam kalorimeter)</td>
                                    <td class="border border-gray-400 px-4 py-2">35.5°C</td>
                                </tr>
                            </tbody>
                        </table>
                        Jika larutan dianggap sama dengan air, berapa perubahan entalpi reaksi (ΔH) netralisasi dalam
                        kJ/mol.
                        Diketahui:
                        <ul>
                            <li class="list-disc list-inside ml-5">Massa jenis larutan = 1 g/cm³</li>
                            <li class="list-disc list-inside ml-5">Kapasitas panas jenis air = 4,2 J/g°C</li>
                            <li class="list-disc list-inside ml-5">Kapasitas panas kalorimeter = 2.740 J/°C</li>
                        </ul>
                    </li>

                    <li id="soal-20">
                        Disajikan data energi ikatan dan entalpi pembentukan standar:
                        <div class="grid grid-cols-2 gap-4">
                            <table class="table-auto border-collapse border border-gray-400 w-full my-4">
                                <thead>
                                    <tr>
                                        <th class="border border-gray-400 px-4 py-2">Data Energi Ikatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">C-H = 413 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">O-O = 164 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">O=O = 495 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">C-O = 358 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">C=O = 799 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">O-H = 463 kJ mol⁻¹</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table-auto border-collapse border border-gray-400 w-full my-4">
                                <thead>
                                    <tr>
                                        <th class="border border-gray-400 px-4 py-2">Data ΔHr</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">CH₄(g) = -74,8 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">CO₂(g) = -393,5 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">H₂O(g) = -241,82 kJ mol⁻¹</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">H₂O(l) = -285,83 kJ mol⁻¹</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>Diketahui reaksi pembakaran metana sebagai berikut:</p>
                        <p>CH₄(g) + O₂(g) → CO₂(g) + H₂O(l) (reaksi belum setara)</p>
                        <p>Berapa energi yang dibebaskan pada pembakaran 16 gram gas metana?</p>
                    </li>

                    <li id="soal-21">
                        "Ketika larutan asam klorida (HCl) dicampurkan dengan larutan natrium hidroksida (NaOH) dalam jumlah
                        yang setara, terjadi reaksi yang sangat cepat dan melepaskan kalor (panas). Pada saat reaksi
                        berlangsung, suhu larutan meningkat, menunjukkan bahwa reaksi tersebut adalah eksotermik".
                        <p>Jelaskan reaksi kimia yang terjadi antara asam klorida (HCl) dan natrium hidroksida (NaOH). dan
                            apa
                            jenis reaksi kimia yang terjadi?</p>
                    </li>
                    <li id="soal-22">
                        Suatu ketika, siswa melakukan sebuah eksperimen di rumah dengan mencampurkan asam asetat (CH₃COOH)
                        dan
                        baking soda/natrium bikarbonat (NaHCO₃) dalam sebuah botol plastik. Tiba-tiba, botol tersebut
                        mengembang
                        dan mulai mengeluarkan banyak gas karbon dioksida (CO₂), yang menyebabkan botol tersebut hampir
                        meledak
                        jika tidak segera dibuka.
                        <p>Jelaskan reaksi kimia yang terjadi antara cuka dan baking soda. Berikan persamaan reaksi
                            kimianya?
                        </p>
                    </li>
                    <li id="soal-23">
                        Bandingkan reaksi HCl dengan NaOH dan reaksi Mg dengan HCl dalam konteks energi yang terlibat. Apa
                        perbedaan utama dalam cara kedua reaksi tersebut melepaskan energi?
                    </li>
                </ol>
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
{{-- @extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center mb-6">Soal Pre-test dan Post-test</h2>

        <!-- Pre-test and Post-test Section -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-8">
            <div class="grid grid-cols-5 gap-4 text-center">
                @for ($i = 1; $i <= 5; $i++)
                    <button
                        class="bg-blue-500 text-white font-semibold py-2 rounded-lg shadow hover:bg-blue-600 focus:outline-none transition duration-200"
                        onclick="openModal({{ $i }})">
                        {{ $i }}
                    </button>
                @endfor
            </div>
        </div>

        <!-- Modal -->

    </div>

    <script>
        const questions = {
            1: "Seorang siswa sedang melakukan percobaan mencampurkan asam klorida (HCl) dengan larutan natrium hidroksida (NaOH) dalam sebuah kalorimeter, siswa tersebut mengamati kenaikan suhu campuran. Berdasarkan fenomena ini, manakah pernyataan yang paling tepat menggambarkan konsep termokimia?",
            2: "Kegiatan pramuka atau peminat kegiatan alam bebas sering membuat api unggun sewaktu berkemah atau melakukan kegiatan di alam terbuka. Api unggun membuat keadaan sekitar akan menjadi lebih hangat dari sebelumnya. Namun, saat api unggun mulai padam keadaan sekitar kembali dingin seperti keadaan semula. Manakah pernyataan yang benar?",
            3: "Suatu reaksi berlangsung pada tekanan tetap disertai pelepasan kalor sebanyak 100 kkal dan sistem melakukan kerja sebesar 5 kkal. Maka...",
            4: "Sifat apa yang ditunjukkan apabila dari fakta bahwa bila kristal KNO₃ di dalam tabung reaksi ditetesi dengan air menyebabkan dasar tabung reaksi akan dingin?",
            5: "Seorang siswa mendemonstrasikan lampu senter yang bisa menyala tanpa baterai, namun menggunakan energi panas tubuh. Energi panas tubuh diperoleh dari perbedaan suhu udara dalam ruangan dengan suhu tubuh. Kalor yang dihasilkan dialirkan ke plat senter untuk menyalakan lampu dalam senter. Perbedaan suhu tubuh dan suhu ruangan diperlukan minimal 5°C. Jika kurang dari itu, kemungkinan lampu senter itu tidak akan menyala atau menyala namun kurang terang. Buatlah pernyataan yang tidak sesuai dengan fenomena di atas.",
        };

        function openModal(questionNumber) {
            console.log('Opening modal for question:', questionNumber); // Debug log
            const modalHTML = `
        <div id="questionModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
            <div class="bg-white w-full max-w-xl rounded-lg shadow-lg p-6 transform transition-transform duration-300 scale-90">
                <h3 id="modalTitle" class="text-2xl font-bold mb-4 text-center">Soal ${questionNumber}</h3>
                <p id="modalQuestion" class="mb-6 text-gray-700 text-justify">${questions[questionNumber]}</p>
                <textarea 
                    id="answerTextarea" 
                    class="w-full h-32 p-3 border border-gray-300 rounded-lg mb-4 focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none bg-gray-50 text-gray-900 shadow-inner" 
                    placeholder="Tulis jawaban Anda di sini..."></textarea>
                <div class="flex justify-end space-x-4">
                    <button 
                        onclick="closeModal()" 
                        class="px-5 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition duration-200">Tutup</button>
                    <button 
                        onclick="submitAnswer()" 
                        class="px-5 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200">Kirim</button>
                </div>
            </div>
        </div>
    `;

            document.body.insertAdjacentHTML('beforeend', modalHTML);

            setTimeout(() => {
                const modal = document.getElementById('questionModal');
                modal.querySelector('.transform').classList.remove('scale-90');
            }, 10);
        }

        function closeModal() {
            console.log('Closing modal'); // Debug log
            const modal = document.getElementById('questionModal');

            if (modal) {
                modal.querySelector('.transform').classList.add('scale-90');
                setTimeout(() => {
                    modal.remove();
                }, 300);
            }
        }


        function submitAnswer() {
            const answer = document.getElementById('answerTextarea').value;
            if (!answer.trim()) {
                alert('Harap tulis jawaban sebelum mengirim.');
                return;
            }
            closeModal();
            alert('Jawaban Anda telah dikirim.');
        }
    </script>
@endsection --}}
