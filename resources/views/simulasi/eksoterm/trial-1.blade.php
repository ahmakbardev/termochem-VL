@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 h-full flex justify-center items-center flex-col">
        <h2 class="text-center text-3xl font-bold mb-8">Simulasi Percobaan Reaksi Eksoterm dan Endoterm</h2>



        <!-- Simulation Area -->
        <div id="simulationArea" class="bg-[#e6eb8c] p-6 rounded-lg gap-10 shadow-md flex items-center space-y-8 relative">
            <!-- Chemical Containers -->
            <div class="flex flex-col">
                <h4 class="bg-[#ffd51e] text-center mb-3 rounded-md text-[#037940]">Bahan</h1>
                    <div class="flex flex-col items-center space-y-4 p-4 rounded-md bg-white">
                        <!-- HCl -->
                        <img src="{{ asset('assets/images/simulasi/HCl.png') }}" alt="HCl"
                            class="w-32 cursor-pointer hover:scale-110 transition" onclick="addSubstance('hcl')" />
                        <!-- NaOH -->
                        <img src="{{ asset('assets/images/simulasi/NaOH.png') }}" alt="NaOH"
                            class="w-32 cursor-pointer hover:scale-110 transition" onclick="addSubstance('naoh')" />
                        <!-- NaHCO3 -->
                        <img src="{{ asset('assets/images/simulasi/nahco3.webp') }}" alt="NaHCO3"
                            class="w-32 cursor-pointer hover:scale-110 transition" onclick="addSubstance('nahco3')" />
                        <!-- H2O -->
                        <img src="{{ asset('assets/images/simulasi/h2o.webp') }}" alt="H2O"
                            class="w-32 cursor-pointer hover:scale-110 transition" onclick="addSubstance('h2o')" />
                    </div>
            </div>

            {{-- <div class="flex flex-col">

            </div> --}}

            <!-- Thermometer Display -->
            <div class="flex flex-col">
                <div class="flex gap-5">
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="text-lg font-semibold">Suhu: <span id="temperatureDisplay">25</span>°C</div>
                            <div id="thermometerContainer"
                                class="relative h-64 w-6 bg-gray-200 rounded-full overflow-hidden">
                                <div
                                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-red-500 rounded-full">
                                </div>
                                <div id="mercury"
                                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-3 bg-red-500 transition-all duration-700"
                                    style="height: 40%;"></div>
                                <div class="absolute inset-0 flex flex-col items-center">
                                    <div class="scale-75 flex flex-col items-center space-y-1 mt-2 text-xs">
                                        <span>50°C</span>
                                        <div class="w-2 h-0.5 bg-black"></div>
                                        <span>40°C</span>
                                        <div class="w-2 h-0.5 bg-black"></div>
                                        <span>30°C</span>
                                        <div class="w-2 h-0.5 bg-black"></div>
                                        <span>20°C</span>
                                        <div class="w-2 h-0.5 bg-black"></div>
                                        <span>10°C</span>
                                        <div class="w-2 h-0.5 bg-black"></div>
                                        <span>0°C</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="relative w-32 h-40 bg-white border-4 border-gray-400 rounded-b-lg overflow-hidden"
                                id="mainBeaker">
                                <div id="reactionLiquid" class="absolute bottom-0 w-full h-0 transition-all duration-700">
                                </div>
                                <div id="reactionBubbles"
                                    class="hidden absolute inset-0 flex justify-center items-center flex-wrap space-x-2 space-y-2">
                                </div>
                                <div id="smoke"
                                    class="hidden absolute inset-0 flex justify-center items-center opacity-0">
                                    <div class="smoke-particle"></div>
                                    <div class="smoke-particle"></div>
                                    <div class="smoke-particle"></div>
                                </div>
                            </div>

                            <!-- Molecule Tooltip -->
                            {{-- <div id="moleculeInfo"
                                class="hidden absolute left-3/4 -translate-x-2/3 bg-white p-4 rounded-lg shadow-lg text-sm text-gray-700 border border-gray-300 w-48 h-44">
                                <div class="relative h-[80%]">
                                    <p id="moleculeText" class="text-center"></p>
                                    <div id="ionContainer" class="absolute inset-0"></div>
                                    <div
                                        class="absolute top-1/2 left-[-6px] transform -translate-y-1/2 w-3 h-3 bg-white border-r border-t border-gray-300 rotate-45">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <!-- Prosedur Panel -->
                    <div class="flex flex-col items-center">
                        <h4 class="bg-[#ffd51e] text-center mb-3 px-5 rounded-md text-[#037940]">Prosedur</h4>
                        <ul class="bg-white p-4 rounded-md space-y-2 text-sm text-[#037940]">
                            <li>• Masukkan larutan yang akan diuji ke dalam gelas kimia</li>
                            <li>• Amati perubahan suhu awal larutan</li>
                            <li>• Tambahkan larutan berikutnya</li>
                            <li>• Amati perubahan suhu akhir yang terjadi</li>
                        </ul>
                        <!-- Reset Button -->
                        <button class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                            onclick="resetSimulation()">Mulai Lagi</button>
                    </div>
                </div>


                <!-- Steps -->
                <div class="text-center mt-4" id="instructions">
                    <p id="stepText" class="p-3 rounded-sm bg-green-500 max-w-xl text-white"><b>Langkah 1:</b> <br> Klik
                        gelas HCl
                        untuk
                        menuangkannya ke dalam gelas utama.</p>

                </div>

            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;
        let temperature = 25;
        let hclAdded = false;
        let naohAdded = false;

        let experimentType = 'hcl_water';
        let initialTemperature = 22;
        let finalTemperature = 29;

        let firstSubstance = null;
        let secondSubstance = null;

        function addSubstance(type) {
            const beaker = document.getElementById('reactionLiquid');
            const tempDisplay = document.getElementById('temperatureDisplay');
            const mercury = document.getElementById('mercury');

            if (!firstSubstance) {
                firstSubstance = type;
                temperature = getInitialTemperature(type);
                tempDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;
                beaker.style.height = '25%';

                updateStepText(`<b>Langkah 2:</b> Tambahkan zat kedua untuk memulai reaksi.`);

                if (type === 'hcl') addIon('H<sup>+</sup>', 'h-plus'), addIon('Cl<sup>-</sup>', 'cl-minus');
                if (type === 'naoh') addIon('Na<sup>+</sup>', 'na-plus'), addIon('OH<sup>-</sup>', 'oh-minus');
                if (type === 'nahco3') addIon('Na<sup>+</sup>', 'na-plus'), addIon('HCO<sub>3</sub><sup>-</sup>',
                    'oh-minus');
                if (type === 'h2o') addIon('H<sup>+</sup>', 'h-plus'), addIon('OH<sup>-</sup>', 'oh-minus');

            } else if (!secondSubstance && firstSubstance !== type) {
                secondSubstance = type;
                const combo = [firstSubstance, secondSubstance].sort().join('_');
                const result = getReactionResult(combo);

                temperature = result.final;
                tempDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;
                beaker.style.height = '50%';
                beaker.classList.add(result.color);
                updateStepText(`${result.message}`);

                // Tambahkan ion dari zat kedua
                if (type === 'hcl') {
                    addIon('H<sup>+</sup>', 'h-plus');
                    addIon('Cl<sup>-</sup>', 'cl-minus');
                }
                if (type === 'naoh') {
                    addIon('Na<sup>+</sup>', 'na-plus');
                    addIon('OH<sup>-</sup>', 'oh-minus');
                }
                if (type === 'nahco3') {
                    addIon('Na<sup>+</sup>', 'na-plus');
                    addIon('HCO<sub>3</sub><sup>-</sup>', 'oh-minus');
                }
                if (type === 'h2o') {
                    addIon('H<sup>+</sup>', 'h-plus');
                    addIon('OH<sup>-</sup>', 'oh-minus');
                }

                showBubblesAndSmoke();
            }
        }

        function getInitialTemperature(substance) {
            if (substance === 'hcl') return 22;
            if (substance === 'naoh') return 29;
            if (substance === 'nahco3') return 28;
            if (substance === 'h2o') return 22;
            return 25;
        }

        function getReactionResult(combo) {
            const reactions = {
                'h2o_hcl': {
                    final: 29,
                    message: 'Amati perubahan yang terjadi Ketika HCl dilarutkan dalam air, terjadi pelepasan panas, yang berarti energi dilepaskan ke lingkungan. Ini disebabkan oleh interaksi antara ion H⁺ dan Cl⁻ dengan molekul air, yang membantu memecah ikatan dalam asam dan memfasilitasi pembentukan ion.',
                    color: 'bg-blue-500'
                },
                'hcl_naoh': {
                    final: 32,
                    message: 'Amati perubahan yang terjadi ketika HCl dan NaOH dicampurkan bereaksi melalui proses netralisasi. Proses pembentukan ikatan baru ini melepaskan energi dalam bentuk panas. Hal ini menyebabkan suhu larutan meningkat dan dinding gelas kimia terasa panas',
                    color: 'bg-purple-500'
                },
                'h2o_naoh': {
                    final: 31,
                    message: 'Amati perubahan yang terjadi antara Reaksi natrium hidroksida (NaOH) dan H2O dimana dalam proses ini energi dilepaskan ke lingkungan saat NaOH terdisosiasi menjadi ion Na⁺ dan OH⁻ dalam larutan. Proses ini menghasilkan panas, yang menyebabkan peningkatan suhu larutan.',
                    color: 'bg-green-400'
                },
                'hcl_nahco3': {
                    final: 25,
                    message: 'Amati perubahan yang terjadi antara Reaks asam klorida (HCl) dan natrium bikarbonat (NaHCO₃) adalah reaksi yang menghasilkan gas karbon dioksida (CO₂), air (H₂O), dan natrium klorida (NaCl), meskipun ada pelepasan gas, reaksi ini juga melepaskan sejumlah kecil energi dalam bentuk panas ke lingkungan.',
                    color: 'bg-yellow-400'
                },
                'nahco3_naoh': {
                    final: 25,
                    message: 'Amati perubahan yang terjadi antara Reaksi natrium hidroksida (NaOH) dan natrium bikarbonat (NaHCO₃) adalah reaksi yang melibatkan asam dan basa. Ketika keduanya dicampurkan, NaOH dapat bereaksi dengan NaHCO₃ untuk menghasilkan natrium karbonat (Na₂CO₃), air (H₂O), dan gas karbon dioksida (CO₂) yang terlepas, pembentukan produk baru dapat menyerap sejumlah energi dari lingkungan.',
                    color: 'bg-indigo-400'
                },
                'h2o_nahco3': {
                    final: 26,
                    message: 'Amati perubahan yang terjadi antara Reaksi natrium bikarbonat (NaHCO₃) dan air (H₂O) biasanya tidak menghasilkan reaksi kimia yang signifikan. Namun, ketika NaHCO₃ dilarutkan dalam air, proses ini dapat mempengaruhi suhu. Ini berarti bahwa energi diserap dari lingkungan, yang dapat menyebabkan sedikit penurunan suhu pada larutan.',
                    color: 'bg-cyan-400'
                }
            };


            return reactions[combo] || {
                final: temperature,
                message: 'Reaksi tidak diketahui.',
                color: 'bg-gray-400'
            };
        }



        function selectExperiment(type) {
            experimentType = type;

            if (type === 'hcl_water') {
                initialTemperature = 22;
                finalTemperature = 29;
            } else if (type === 'hcl_naoh') {
                initialTemperature = 22;
                finalTemperature = 32;
            } else if (type === 'naoh_water') {
                initialTemperature = 29;
                finalTemperature = 31;
            }

            resetSimulation(); // reset ulang simulasi dengan data suhu baru
        }


        // Perbarui langkah dengan HTML dan tetap menjaga logika ion
        function updateStepText(stepHTML) {
            const stepText = document.getElementById('stepText');
            stepText.innerHTML = stepHTML; // Perbarui tampilan langkah
        }

        // Tambahkan HCl ke dalam gelas kimia
        function addHCl() {
            if (currentStep === 1) {
                const hclContainer = document.getElementById('hclContainer');
                const reactionLiquid = document.getElementById('reactionLiquid');
                const temperatureDisplay = document.getElementById('temperatureDisplay');
                const mercury = document.getElementById('mercury');
                const moleculeText = document.getElementById('moleculeText');

                // Visualisasi cairan HCl
                hclContainer.classList.add('opacity-50', 'pointer-events-none');
                reactionLiquid.classList.add('bg-blue-500');
                reactionLiquid.style.height = '25%';

                // Tampilkan ion H⁺ dan Cl⁻ di tooltip secara statis

                // Animasi ion di gelas kimia
                addIon('H<sup>+</sup>', 'h-plus');
                addIon('Cl<sup>-</sup>', 'cl-minus');

                // Perubahan suhu
                temperature -= 3;
                temperatureDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;

                // Update langkah
                updateStepText(
                    '<b>Langkah 2:</b> <br> Amati dan catat perubahan suhu awal pada larutan HCl. Jika sudah, tambahkan larutan NaOH.'
                );

                hclAdded = true;
                currentStep++;
            }
        }


        function addNaOH() {
            if (currentStep === 2 && hclAdded) {
                const naohContainer = document.getElementById('naohContainer');
                const reactionLiquid = document.getElementById('reactionLiquid');
                const temperatureDisplay = document.getElementById('temperatureDisplay');
                const mercury = document.getElementById('mercury');
                const moleculeText = document.getElementById('moleculeText');

                // Visualisasi cairan NaOH
                naohContainer.classList.add('opacity-50', 'pointer-events-none');
                reactionLiquid.classList.remove('bg-blue-500');
                reactionLiquid.classList.add('bg-purple-500');
                reactionLiquid.style.height = '50%';


                // Animasi ion di gelas kimia
                addIon('Na<sup>+</sup>', 'na-plus');
                addIon('OH<sup>-</sup>', 'oh-minus');

                // Perubahan suhu
                temperature += 0;
                temperatureDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;

                // Update langkah
                updateStepText('<b>Langkah 3:</b> <br> Reaksi eksoterm terjadi, suhu meningkat, dan gelembung muncul.');

                naohAdded = true;
                currentStep++;
                startReaction();
            }
        }


        let ionIndex = 0;
        const minDistance = 50; // Minimal jarak antar ion untuk mencegah tumpang tindih
        const ionPositions = []; // Array untuk menyimpan posisi ion yang sudah digunakan

        let ions = []; // Array untuk menyimpan semua ion yang telah dibuat

        function addIon(symbol, className) {
            const ionContainer = document.getElementById('ionContainer');
            const ion = document.createElement('div');
            ion.className = `ion ${className}`;
            ion.innerHTML = symbol;

            const positions = [{
                    x: -120,
                    y: -50
                },
                {
                    x: 120,
                    y: -50
                },
                {
                    x: -50,
                    y: 50
                },
                {
                    x: 50,
                    y: 50
                }
            ];
            const position = positions[ionIndex % positions.length];
            ion.style.position = 'absolute';
            ion.style.transform = `translate(${position.x}%, ${position.y}%)`;

            ionContainer.appendChild(ion);
            ionIndex++;

            // Speed config per ion type
            const speedMap = {
                'h-plus': 1.2,
                'cl-minus': 0.8,
                'na-plus': 1.0,
                'oh-minus': 0.9,
                'reaction': 1.5,
                'default': 0.55
            };

            const speedFactor = speedMap[className] || speedMap['default'];
            let dx = (Math.random() < 0.5 ? 1 : -1) * speedFactor;
            let dy = (Math.random() < 0.5 ? 1 : -1) * speedFactor;

            const ionData = {
                element: ion,
                dx,
                dy
            };
            ions.push(ionData);

            function moveIon() {
                const containerRect = ionContainer.getBoundingClientRect();
                const ionRect = ion.getBoundingClientRect();

                if (ionRect.left <= containerRect.left) ionData.dx = Math.abs(ionData.dx);
                if (ionRect.right >= containerRect.right) ionData.dx = -Math.abs(ionData.dx);
                if (ionRect.top <= containerRect.top) ionData.dy = Math.abs(ionData.dy);
                if (ionRect.bottom >= containerRect.bottom) ionData.dy = -Math.abs(ionData.dy);

                ion.style.left = `${ion.offsetLeft + ionData.dx}px`;
                ion.style.top = `${ion.offsetTop + ionData.dy}px`;

                for (let i = 0; i < ions.length; i++) {
                    if (ions[i].element !== ion) {
                        const otherRect = ions[i].element.getBoundingClientRect();
                        if (checkCollision(ionRect, otherRect)) {
                            ionData.dx *= -1;
                            ionData.dy *= -1;
                            ions[i].dx *= -1;
                            ions[i].dy *= -1;
                        }
                    }
                }

                requestAnimationFrame(moveIon);
            }

            requestAnimationFrame(moveIon);
        }


        // Fungsi untuk mengecek tabrakan antara dua kotak
        function checkCollision(rect1, rect2) {
            return !(
                rect1.right < rect2.left ||
                rect1.left > rect2.right ||
                rect1.bottom < rect2.top ||
                rect1.top > rect2.bottom
            );
        }


        function startReaction() {
            if (hclAdded && naohAdded) {
                const reactionBubbles = document.getElementById('reactionBubbles');
                const smoke = document.getElementById('smoke');
                const mercury = document.getElementById('mercury');
                const temperatureDisplay = document.getElementById('temperatureDisplay');

                reactionBubbles.classList.remove('hidden');
                smoke.classList.remove('hidden');
                smoke.classList.add('opacity-100');
                temperature = finalTemperature;
                temperatureDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;


                for (let i = 0; i < 8; i++) {
                    const bubble = document.createElement('div');
                    bubble.className = 'bubble bg-white opacity-70 rounded-full';
                    bubble.style.width = `${Math.random() * 6 + 4}px`;
                    bubble.style.height = bubble.style.width;
                    bubble.style.left = `${Math.random() * 80}%`;
                    reactionBubbles.appendChild(bubble);
                }

                setTimeout(() => {
                    mercury.style.height = `${((temperature - 19) / (50 - 20)) * 90 + 10}%`;
                    temperatureDisplay.innerText = temperature;
                    document.getElementById('stepText').innerText =
                        'Percobaan selesai. Suhu akhir menunjukkan peningkatan karena reaksi eksoterm.';

                    setTimeout(() => {
                        reactionBubbles.innerHTML = '';
                        reactionBubbles.classList.add('hidden');
                        smoke.classList.add('hidden');
                        smoke.classList.remove('opacity-100');
                    }, 3000);
                }, 2000);
            }
        }

        document.getElementById('mainBeaker').addEventListener('mouseenter', function() {
            document.getElementById('moleculeInfo').classList.remove('hidden');
        });
        document.getElementById('mainBeaker').addEventListener('mouseleave', function() {
            document.getElementById('moleculeInfo').classList.add('hidden');
        });

        function resetSimulation() {
            // Reset semua status
            currentStep = 1;
            temperature = 25;
            firstSubstance = null;
            secondSubstance = null;

            // Reset tampilan suhu dan thermometer
            document.getElementById('temperatureDisplay').innerText = temperature;
            document.getElementById('mercury').style.height = `${(temperature / 50) * 100}%`;

            // Reset cairan di gelas
            const reactionLiquid = document.getElementById('reactionLiquid');
            reactionLiquid.className = 'absolute bottom-0 w-full h-0 transition-all duration-700';
            reactionLiquid.style.height = '0%';

            // Reset bubble dan asap
            document.getElementById('reactionBubbles').classList.add('hidden');
            document.getElementById('reactionBubbles').innerHTML = '';
            document.getElementById('smoke').classList.add('hidden');
            document.getElementById('smoke').classList.remove('opacity-100');

            // Reset ion
            document.getElementById('ionContainer').innerHTML = '';
            ions = [];

            // Reset tooltip
            document.getElementById('moleculeText').innerText = "";

            // Reset langkah
            updateStepText('<b>Langkah 1:</b> <br> Klik salah satu bahan untuk memulai percobaan.');
        }
    </script>

    <style>
        .bubble {
            position: absolute;
            bottom: 0;
            animation: bubbleRise 3s infinite ease-out, bubbleWobble 3s infinite ease-in-out;
            opacity: 0.8;
        }

        @keyframes bubbleRise {
            0% {
                transform: translateY(0);
                opacity: 0.8;
            }

            100% {
                transform: translateY(-80px);
                opacity: 0;
            }
        }

        @keyframes bubbleWobble {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(5px);
            }
        }


        #thermometerContainer {
            background-color: #e2e8f0;
            /* Warna abu-abu termometer */
            border-radius: 20px;
            /* Untuk bentuk lonjong */
            position: relative;
            width: 25px;
            /* Lebar tabung */
            height: 150px;
            /* Tinggi termometer */
            overflow: hidden;
        }

        #thermometerContainer .absolute {
            position: absolute;
        }

        #mercury {
            background-color: #ff4d4d;
            /* Warna merah untuk mercury */
            width: 100%;
            /* Sesuai lebar tabung */
            transition: height 1s ease;
            /* Animasi perubahan tinggi yang lebih halus */
        }


        #thermometerContainer .absolute.bottom-0 {
            bottom: 0;
        }

        #thermometerContainer div.w-12 {
            width: 12px;
            /* Lebar lingkaran bawah */
            height: 12px;
            /* Tinggi lingkaran bawah */
        }


        @keyframes bubbleAnimation {
            0% {
                transform: translateY(0);
                opacity: 0.8;
            }

            100% {
                transform: translateY(-40px);
                opacity: 0;
            }
        }

        @keyframes scaleAnimation {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.3);
            }
        }

        /* Animasi Asap */
        .smoke-particle {
            width: 20px;
            height: 20px;
            background: rgba(200, 200, 200, 0.5);
            border-radius: 50%;
            position: absolute;
            animation: smokeAnimation 3s infinite;
            filter: blur(5px);
        }

        @keyframes smokeAnimation {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }

            100% {
                transform: translateY(-50px) scale(1.5);
                opacity: 0;
            }
        }

        /* Styling untuk reaksi ion di dalam tooltip */
        #moleculeInfo p {
            color: #333;
        }

        #moleculeInfo b {
            color: inherit;
        }

        /* Styling untuk cairan reaksi */
        #reactionLiquid.bg-blue-500 {
            background-color: #abc7ffa4;
        }

        #reactionLiquid.bg-purple-500 {
            background-color: #4d90f5b9;
        }

        #ionContainer {
            position: relative;
            width: 100%;
            height: 100%;
            /* overflow: hidden; */
            /* Menyembunyikan elemen yang keluar dari batas */
        }

        .ion {
            position: absolute;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            font-weight: bold;
            color: white;
            border-radius: 50%;
        }

        .ion.h-plus {
            background-color: #1c64f2;
        }

        .ion.cl-minus {
            background-color: #f21cb9;
        }

        .ion.na-plus {
            background-color: #16a34a;
        }

        .ion.oh-minus {
            background-color: #a39a16;
        }

        .ion.hcl {
            background-color: #1c64f2;
            /* Biru untuk HCl */
            color: white;
        }

        .ion.naoh {
            background-color: #16a34a;
            /* Hijau untuk NaOH */
            color: white;
        }

        .ion.reaction {
            background-color: #9333ea;
            /* Ungu untuk reaksi campuran */
            color: white;
        }

        /* Bubble styling and animations */
        .bubble {
            position: absolute;
            bottom: 10px;
            animation: bubbleAnimation 2s infinite alternate ease-in-out, scaleAnimation 2s infinite alternate ease-in-out;
        }

        @keyframes bubbleAnimation {
            0% {
                transform: translateY(0);
                opacity: 0.8;
            }

            100% {
                transform: translateY(-40px);
                opacity: 0;
            }
        }

        @keyframes scaleAnimation {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.3);
            }
        }

        /* Tooltip styling */
        #moleculeInfo {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 0.875rem;
            line-height: 1.25;
            border-radius: 8px;
            text-align: center;
            width: 220px;
            z-index: 10;
            position: absolute;
        }

        /* Styling untuk balon percakapan */
        #moleculeInfo .bubble-tail {
            position: absolute;
            top: 50%;
            left: -6px;
            transform: translateY(-50%);
            width: 12px;
            height: 12px;
            background: white;
            border-right: 1px solid #ddd;
            border-top: 1px solid #ddd;
            transform: rotate(45deg);
        }

        /* Styling untuk tampilan ion */
        .ion-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 8px;
        }

        .ion {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            font-weight: bold;
            color: white;
            border-radius: 50%;
        }


        /* Warna hijau untuk OH- */
    </style>
@endsection
