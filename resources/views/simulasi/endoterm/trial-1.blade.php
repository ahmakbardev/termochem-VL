@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 h-full flex justify-center items-center flex-col">
        <h2 class="text-center text-3xl font-bold mb-8">Simulasi Percobaan Reaksi Endoterm</h2>

        <!-- Simulation Area -->
        <div id="simulationArea"
            class="bg-blue-50 p-6 rounded-lg w-4/5 shadow-md flex flex-col items-center space-y-8 relative">
            <!-- Chemical Containers -->
            <div class="flex justify-center space-x-8">
                <div id="ch3coohContainer"
                    class="relative w-36 h-36 rounded-b-lg overflow-hidden flex flex-col cursor-pointer hover:scale-105 transform transition duration-300"
                    onclick="addCH3COOH()">
                    <img src="{{ asset('assets/images/cuka_2.png') }}" class="object-contain h-[80%]" alt="">
                    <p class="text-xs transform text-gray-700 font-semibold text-center">Cuka
                        (CH<sup>3</sup>COOH)</p>
                </div>

                <div id="nahco3Container"
                    class="relative w-36 h-36 rounded-b-lg overflow-hidden flex flex-col cursor-pointer hover:scale-105 transform transition duration-300"
                    onclick="addNaHCO3()">
                    <img src="{{ asset('assets/images/soda_2.png') }}" class="object-contain h-[80%]" alt="">
                    <p class="text-xs text-gray-700 font-semibold">Baking
                        Soda (NaHCO<sup>3</sup>)</p>
                </div>
            </div>

            <!-- Thermometer Display -->
            <div class="flex items-center space-x-4 mb-4">
                <div class="text-lg font-semibold">Suhu: <span id="temperatureDisplay">25</span>°C</div>
                <div id="thermometerContainer" class="relative h-64 w-6 bg-gray-200 rounded-full overflow-hidden">
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-red-500 rounded-full">
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
                    <div id="reactionLiquid" class="absolute bottom-0 w-full h-0 transition-all duration-700"></div>
                    <div id="reactionBubbles"
                        class="hidden absolute inset-0 flex justify-center items-center flex-wrap space-x-2 space-y-2">
                    </div>
                    <div id="smoke" class="hidden absolute inset-0 flex justify-center items-center opacity-0">
                        <div class="smoke-particle"></div>
                        <div class="smoke-particle"></div>
                        <div class="smoke-particle"></div>
                    </div>
                </div>

                <!-- Molecule Tooltip -->
                <div id="moleculeInfo"
                    class="hidden absolute left-3/4 -translate-x-2/3 bg-white p-4 rounded-lg shadow-lg text-sm text-gray-700 border border-gray-300 w-48 h-52">
                    <div class="relative h-[80%]">
                        <p id="moleculeText" class="text-center">Tidak ada larutan di dalam gelas kimia.</p>
                        <div id="ionContainer" class="absolute inset-0 *:text-xs"></div>
                        <div
                            class="absolute top-1/2 left-[-6px] transform -translate-y-1/2 w-3 h-3 bg-white border-r border-t border-gray-300 rotate-45">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Steps -->
            <div class="text-center text-gray-700 mt-4" id="instructions">
                <p id="stepText" class="p-3 rounded-sm bg-green-500 text-white">Langkah 1: Klik gelas CH3COOH untuk menuangkannya ke dalam gelas utama.</p>

                <!-- Reset Button -->
                <button class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                    onclick="resetSimulation()">Mulai Lagi</button>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;
        let temperature = 25;
        let ch3coohAdded = false;
        let nahco3Added = false;

        function resetSimulation() {
            // Reset variables
            currentStep = 1;
            temperature = 25;
            ch3coohAdded = false;
            nahco3Added = false;

            // Reset thermometer display
            document.getElementById('temperatureDisplay').innerText = temperature;
            document.getElementById('mercury').style.height = '40%';

            // Reset liquid colors and heights
            document.getElementById('reactionLiquid').classList.remove('bg-blue-500', 'bg-purple-500');
            document.getElementById('reactionLiquid').style.height = '0%';

            // Reset chemical container opacity and pointer events
            document.getElementById('ch3coohContainer').classList.remove('opacity-50', 'pointer-events-none');
            document.getElementById('nahco3Container').classList.remove('opacity-50', 'pointer-events-none');

            // Reset ions in the container
            document.getElementById('ionContainer').innerHTML = '';
            ions = []; // Clear the ions array

            // Reset molecule text
            document.getElementById('moleculeText').innerText = "Tidak ada larutan di dalam gelas kimia.";

            // Reset instruction text
            document.getElementById('stepText').innerText =
                'Langkah 1: Klik gelas CH3COOH untuk menuangkannya ke dalam gelas utama.';
        }

        function addCH3COOH() {
            if (currentStep === 1) {
                const ch3coohContainer = document.getElementById('ch3coohContainer');
                const reactionLiquid = document.getElementById('reactionLiquid');
                const stepText = document.getElementById('stepText');
                const moleculeText = document.getElementById('moleculeText');
                const temperatureDisplay = document.getElementById('temperatureDisplay');
                const mercury = document.getElementById('mercury');

                // Peningkatan suhu
                temperature += 4;
                temperatureDisplay.innerText = temperature;

                // Update tinggi mercury (0°C = 0%, 50°C = 100%)
                const thermometerHeight = 70; // Tinggi container thermometer dalam piksel
                mercury.style.height = `${(temperature / 30) * thermometerHeight}px`;

                // Visualisasi CH3COOH
                ch3coohContainer.classList.add('opacity-50', 'pointer-events-none');
                reactionLiquid.classList.add('bg-blue-500');
                reactionLiquid.style.height = '29%';

                // Tambahkan ion
                moleculeText.innerText = '';
                addIon('H+', 'h-plus');
                addIon('CH3COO-', 'ch3coo-minus');

                // Update langkah berikutnya
                stepText.innerText = 'Langkah 2: Klik gelas NaHCO3 untuk menambahkannya ke dalam gelas utama.';
                ch3coohAdded = true;
                currentStep++;
            }
        }


        function addNaHCO3() {
            if (currentStep === 2 && ch3coohAdded) {
                const nahco3Container = document.getElementById('nahco3Container');
                const reactionLiquid = document.getElementById('reactionLiquid');
                const stepText = document.getElementById('stepText');
                const moleculeText = document.getElementById('moleculeText');

                nahco3Container.classList.add('opacity-50', 'pointer-events-none');
                reactionLiquid.classList.remove('bg-blue-500');
                reactionLiquid.classList.add('bg-purple-500');
                reactionLiquid.style.height = '50%';

                moleculeText.innerText = "";
                addIon("Na+", "na-plus");
                addIon("HCO3-", "hco3-minus");
                stepText.innerText = 'Reaksi endoterm terjadi, suhu menurun, dan ion-ion bergerak.';
                nahco3Added = true;
                startReaction();
            }
        }

        function startReaction() {
            if (ch3coohAdded && nahco3Added) {
                const temperatureDisplay = document.getElementById('temperatureDisplay');
                const mercury = document.getElementById('mercury');

                temperature -= 4; // Adjust temperature for endothermic reaction
                mercury.style.height = `${(temperature - 10) / 40 * 100}%`;
                temperatureDisplay.innerText = temperature;
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
            ion.innerText = symbol;

            // Menentukan posisi ion berdasarkan index dengan transformasi dari titik tengah
            const positions = [{
                    x: -120,
                    y: -50
                }, // Kiri atas
                {
                    x: 120,
                    y: -50
                }, // Kanan atas
                {
                    x: -50,
                    y: 50
                }, // Kiri bawah
                {
                    x: 50,
                    y: 50
                } // Kanan bawah
            ];

            const position = positions[ionIndex % positions.length];
            ion.style.position = 'absolute';
            ion.style.transform = `translate(${position.x}%, ${position.y}%)`;

            // Tambahkan elemen ion ke dalam ionContainer
            ionContainer.appendChild(ion);
            ionIndex++;

            // Menyimpan data posisi dan kecepatan ion
            const speedFactor = 0.55; // Mengatur faktor kecepatan lebih kecil untuk gerakan lebih lambat
            let dx = (Math.random() < 0.5 ? 1 : -1) * speedFactor;
            let dy = (Math.random() < 0.5 ? 1 : -1) * speedFactor;
            const ionData = {
                element: ion,
                dx,
                dy
            };

            ions.push(ionData); // Tambahkan ion ke array ions

            function moveIon() {
                const containerRect = ionContainer.getBoundingClientRect();
                const ionRect = ion.getBoundingClientRect();

                // Deteksi tabrakan dengan dinding container
                if (ionRect.left <= containerRect.left) ionData.dx = Math.abs(ionData.dx);
                if (ionRect.right >= containerRect.right) ionData.dx = -Math.abs(ionData.dx);
                if (ionRect.top <= containerRect.top) ionData.dy = Math.abs(ionData.dy);
                if (ionRect.bottom >= containerRect.bottom) ionData.dy = -Math.abs(ionData.dy);

                // Update posisi ion
                ion.style.left = `${ion.offsetLeft + ionData.dx}px`;
                ion.style.top = `${ion.offsetTop + ionData.dy}px`;

                // Cek tabrakan dengan ion lain
                for (let i = 0; i < ions.length; i++) {
                    if (ions[i].element !== ion) {
                        const otherRect = ions[i].element.getBoundingClientRect();
                        if (checkCollision(ionRect, otherRect)) {
                            // Balikkan arah kedua ion saat bertabrakan
                            ionData.dx *= -1;
                            ionData.dy *= -1;
                            ions[i].dx *= -1;
                            ions[i].dy *= -1;
                        }
                    }
                }

                requestAnimationFrame(moveIon);
            }

            // Mulai gerakan ion
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

        document.getElementById('mainBeaker').addEventListener('mouseenter', function() {
            document.getElementById('moleculeInfo').classList.remove('hidden');
        });
        document.getElementById('mainBeaker').addEventListener('mouseleave', function() {
            document.getElementById('moleculeInfo').classList.add('hidden');
        });
    </script>

    <style>
        .ion.h-plus {
            background-color: #f21c1c;

        }

        .ion.ch3coo-minus {
            background-color: #1c64f2;
        }

        .ion.na-plus {
            background-color: #97a316;

        }

        .ion.hco3-minus {
            background-color: #16a34a;
        }
    </style>

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
            width: fit-content;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* font-size: 0.875rem; */
            font-weight: bold;
            color: white;
            border-radius: 50%;
        }

        /* .ion.h-plus {
                        background-color: #1c64f2;
                    }

                    .ion.cl-minus {
                        background-color: #1c64f2;
                    }

                    .ion.na-plus {
                        background-color: #16a34a;
                    }

                    .ion.oh-minus {
                        background-color: #16a34a;
                    } */

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
            width: auto;
            min-width: 40px;
            /* Minimal 40px */
            max-width: fit-content;
            /* Menyesuaikan sesuai konten */
            height: 40px;
            padding: 0 10px;
            /* Memberikan ruang horizontal */
            display: flex;
            align-items: center;
            justify-content: center;
            /* font-size: 0.875rem; */
            font-weight: bold;
            color: white;
            background-color: blue;
            /* Atur warna sesuai kebutuhan */
            border-radius: 20px;
            /* Memberikan bentuk elips */
        }

        /* Warna hijau untuk OH- */
    </style>
@endsection
