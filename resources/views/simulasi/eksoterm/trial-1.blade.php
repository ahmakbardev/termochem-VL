@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 h-full flex justify-center items-center flex-col">
        <h2 class="text-center text-3xl font-bold mb-8">Simulasi Percobaan Reaksi Eksoterm (Percobaan 1)</h2>



        <!-- Simulation Area -->
        <div id="simulationArea"
            class="bg-blue-50 p-6 rounded-lg w-4/5 shadow-md flex flex-col items-center space-y-8 relative">
            <!-- Chemical Containers -->
            <div class="flex justify-center space-x-8">
                <div id="hclContainer"
                    class="relative w-36 h-36  rounded-b-lg overflow-hidden cursor-pointer hover:scale-105 transform transition duration-300"
                    onclick="addHCl()">
                    <img src="{{ asset('assets/images/HCl_2.png') }}" class="object-contain h-full" alt="">
                </div>

                <div id="naohContainer"
                    class="relative w-36 h-36 rounded-b-lg overflow-hidden cursor-pointer hover:scale-105 transform transition duration-300"
                    onclick="addNaOH()">
                    <img src="{{ asset('assets/images/NaOH_2.png') }}" class="object-contain h-full" alt="">

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
                    class="hidden absolute left-3/4 -translate-x-2/3 bg-white p-4 rounded-lg shadow-lg text-sm text-gray-700 border border-gray-300 w-48 h-44">
                    <div class="relative h-[80%]">
                        <p id="moleculeText" class="text-center">Tidak ada larutan di dalam gelas kimia.</p>
                        <div id="ionContainer" class="absolute inset-0"></div>
                        <div
                            class="absolute top-1/2 left-[-6px] transform -translate-y-1/2 w-3 h-3 bg-white border-r border-t border-gray-300 rotate-45">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Steps -->
            <div class="text-center mt-4" id="instructions">
                <p id="stepText" class="p-3 rounded-sm bg-green-500 text-white"><b>Langkah 1:</b> <br> Klik gelas HCl untuk
                    menuangkannya ke dalam gelas utama.</p>

                <!-- Reset Button -->
                <button class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                    onclick="resetSimulation()">Mulai Lagi</button>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;
        let temperature = 25;
        let hclAdded = false;
        let naohAdded = false;

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
            ion.innerHTML = symbol; // Ganti innerText dengan innerHTML

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


        function startReaction() {
            if (hclAdded && naohAdded) {
                const reactionBubbles = document.getElementById('reactionBubbles');
                const smoke = document.getElementById('smoke');
                const mercury = document.getElementById('mercury');
                const temperatureDisplay = document.getElementById('temperatureDisplay');

                reactionBubbles.classList.remove('hidden');
                smoke.classList.remove('hidden');
                smoke.classList.add('opacity-100');
                temperature += 10;

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
            // Reset variables
            currentStep = 1;
            temperature = 25;
            hclAdded = false;
            naohAdded = false;

            // Reset thermometer display
            document.getElementById('temperatureDisplay').innerText = temperature;
            document.getElementById('mercury').style.height = '25%';

            // Reset liquid colors and heights
            document.getElementById('reactionLiquid').classList.remove('bg-blue-500', 'bg-purple-500');
            document.getElementById('reactionLiquid').style.height = '0%';

            // Reset chemical container opacity and pointer events
            document.getElementById('hclContainer').classList.remove('opacity-50', 'pointer-events-none');
            document.getElementById('naohContainer').classList.remove('opacity-50', 'pointer-events-none');

            // Reset ions in the container
            document.getElementById('ionContainer').innerHTML = '';
            ions = []; // Clear the ions array

            // Reset molecule text
            document.getElementById('moleculeText').innerText = "Tidak ada larutan di dalam gelas kimia.";

            // Reset instruction text
            document.getElementById('stepText').innerHTML =
                '<b>Langkah 1:</b> <br> Klik gelas HCl untuk menuangkannya ke dalam gelas utama.';
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
