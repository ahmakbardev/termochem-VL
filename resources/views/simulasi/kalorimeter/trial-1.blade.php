@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 h-full flex justify-center items-center flex-col">
        <h2 class="text-center text-3xl font-bold mb-8">Simulasi Percobaan Kalorimeter Sederhana</h2>

        <!-- Simulation Area -->
        <div id="simulationArea"
            class="bg-gray-50 p-6 rounded-lg w-4/5 shadow-md flex flex-col items-center space-y-8 relative">

            <!-- Alat dan Bahan Section -->
            <div class="bg-white p-4 rounded-lg shadow-lg w-full max-w-3xl">
                <h3 class="text-xl font-semibold mb-4">Alat dan Bahan</h3>
                <ul class="list-disc list-inside text-gray-700">
                    <li><img src="{{ asset('assets/images/kalorimeter.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Kalorimeter
                    </li>
                    <li><img src="{{ asset('assets/images/termometer.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Termometer
                    </li>
                    <li><img src="{{ asset('assets/images/gelas_ukur.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Gelas ukur
                    </li>
                    <li><img src="{{ asset('assets/images/pipet_tetes.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Pipet tetes</li>
                    <li><img src="{{ asset('assets/images/batang_pengaduk.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Batang
                        Pengaduk</li>
                    <li><img src="{{ asset('assets/images/NaCl.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">NaCl 1 M</li>
                    <li><img src="{{ asset('assets/images/NaOH.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">NaOH 1 M</li>
                </ul>
            </div>

            <!-- Steps Section -->
            <div class="text-center text-gray-700 mt-4" id="instructions">
                <p id="stepText">Langkah 1: Ukur 100 ml air menggunakan gelas ukur dan tuangkan ke dalam gelas kimia. Catat
                    suhu awal.</p>
            </div>

            <!-- Measurement and Reaction Area -->
            <div class="flex flex-col items-center space-y-4">
                <!-- Thermometer Display -->
                <div class="flex items-center space-x-4">
                    <div class="text-lg font-semibold">Suhu: <span id="temperatureDisplay">25</span>°C</div>
                    <div id="thermometerContainer" class="relative h-64 w-6 bg-gray-200 rounded-full overflow-hidden">
                        <div
                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-red-500 rounded-full">
                        </div>
                        <div id="mercury"
                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-3 bg-red-500 transition-all duration-700"
                            style="height: 30%;"></div>
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

                <!-- Reaction Container -->
                <div class="flex justify-center space-x-8">
                    <div id="mainBeaker"
                        class="relative w-36 h-36 bg-white border-4 border-gray-400 rounded-b-lg overflow-hidden">
                        <div id="reactionLiquid" class="absolute bottom-0 w-full h-0 transition-all duration-700"></div>
                        <!-- Ion Display Area -->
                        <div id="ionDisplay" class="absolute inset-0 flex flex-wrap justify-center items-center"></div>
                    </div>
                </div>
            </div>

            <!-- Control Buttons -->
            <div class="flex space-x-4">
                <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700" onclick="nextStep()">Langkah
                    Selanjutnya</button>
                <button class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700" onclick="resetSimulation()">Mulai
                    Lagi</button>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;
        let temperature = 25;
        let isNaClAdded = false;
        let isNaOHAdded = false;

        function resetSimulation() {
            currentStep = 1;
            temperature = 25;
            isNaClAdded = false;
            isNaOHAdded = false;

            document.getElementById('temperatureDisplay').innerText = temperature;
            document.getElementById('mercury').style.height = '30%';
            document.getElementById('reactionLiquid').style.height = '0%';
            document.getElementById('reactionLiquid').classList.remove('bg-blue-500', 'bg-green-500', 'bg-purple-500');
            document.getElementById('stepText').innerText =
                'Langkah 1: Ukur 100 ml air menggunakan gelas ukur dan tuangkan ke dalam gelas kimia. Catat suhu awal.';
            document.getElementById('ionDisplay').innerHTML = ''; // Reset ions
        }

        function nextStep() {
            const stepText = document.getElementById('stepText');
            const reactionLiquid = document.getElementById('reactionLiquid');
            const temperatureDisplay = document.getElementById('temperatureDisplay');
            const mercury = document.getElementById('mercury');
            const ionDisplay = document.getElementById('ionDisplay');

            if (currentStep === 1) {
                // Step 1: Ukur air dan catat suhu awal
                stepText.innerText =
                    'Langkah 2: Timbang 5 gram NaCl, larutkan dalam 50 ml air, dan tambahkan ke dalam gelas kimia.';
                reactionLiquid.classList.add('bg-blue-500');
                reactionLiquid.style.height = '25%';
                currentStep++;
            } else if (currentStep === 2) {
                // Step 2: Tambahkan NaCl dan catat suhu, tampilkan ion Na⁺ dan Cl⁻
                temperature += 2;
                temperatureDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;
                stepText.innerText = 'Langkah 3: Catat suhu akhir setelah menambahkan NaCl.';
                addIon('Na⁺', 'ion-na');
                addIon('Cl⁻', 'ion-cl');
                currentStep++;
            } else if (currentStep === 3) {
                // Step 3: Persiapan Larutan NaOH
                stepText.innerText =
                    'Langkah 4: Timbang 5 gram NaOH, larutkan dalam 50 ml air, dan tambahkan ke dalam gelas kimia.';
                reactionLiquid.classList.add('bg-green-500');
                reactionLiquid.style.height = '50%';
                currentStep++;
            } else if (currentStep === 4) {
                // Step 4: Tambahkan NaOH dan catat suhu akhir, tampilkan ion Na⁺ dan OH⁻
                temperature += 5;
                temperatureDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;
                stepText.innerText = 'Langkah 5: Catat suhu akhir setelah menambahkan NaOH.';
                addIon('Na⁺', 'ion-na');
                addIon('OH⁻', 'ion-oh');
                currentStep++;
            } else if (currentStep === 5) {
                // Step 5: Analisis Data
                stepText.innerText =
                    'Langkah 6: Hitung perubahan suhu untuk masing-masing percobaan (ΔT = suhu akhir - suhu awal).';
                alert(`Perubahan suhu akhir: ΔT = ${temperature - 25}°C`);
                currentStep++;
            }
        }

        function addIon(symbol, className) {
            const ionDisplay = document.getElementById('ionDisplay');
            const ion = document.createElement('div');
            ion.className = `ion ${className}`;
            ion.innerText = symbol;
            ionDisplay.appendChild(ion);
        }
    </script>

    <style>
        /* Thermometer styling */
        #thermometerContainer {
            background-color: #e2e8f0;
            border-radius: 20px;
            position: relative;
            width: 25px;
            height: 150px;
            overflow: hidden;
        }

        #mercury {
            background-color: #ff4d4d;
            width: 100%;
            transition: height 1s ease;
        }

        /* Reaction liquid */
        #reactionLiquid {
            background-color: #1c64f2;
        }

        /* Ion styling */
        .ion {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            border-radius: 50%;
            margin: 4px;
            animation: moveIon 3s infinite alternate ease-in-out;
        }

        .ion-na {
            background-color: #3498db;
        }

        .ion-cl {
            background-color: #e74c3c;
        }

        .ion-oh {
            background-color: #2ecc71;
        }

        @keyframes moveIon {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-10px);
            }
        }
    </style>
@endsection
