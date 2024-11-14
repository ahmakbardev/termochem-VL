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
                <ul class="list-disc list-inside text-gray-700 *:mt-2">
                    <li><img src="{{ asset('assets/images/kalorimeter.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Kalorimeter</li>
                    <li><img src="{{ asset('assets/images/termometer.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Termometer</li>
                    <li><img src="{{ asset('assets/images/gelas_ukur.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Gelas ukur</li>
                    <li><img src="{{ asset('assets/images/pipet_tetes.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">Pipet tetes</li>
                    <li><img src="{{ asset('assets/images/NaNO.png') }}"
                            class="inline-block object-contain w-8 h-8 mr-2">NaNO₃ (natrium nitrat)</li>
                </ul>
            </div>

            <!-- Steps Section -->
            <div class="text-center text-gray-700 mt-4" id="instructions">
                <p id="stepText">Langkah 1: Tambahkan NaNO₃ ke dalam air di dalam kalorimeter dan amati reaksi.</p>
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
                <div class="relative w-36 h-36 bg-white border-4 border-gray-400 rounded-b-lg overflow-hidden"
                    id="mainBeaker">
                    <div id="reactionLiquid" class="absolute bottom-0 w-full h-0 transition-all duration-700 bg-blue-200">
                    </div>

                    <!-- Molecule Interaction Display -->
                    <div id="ionContainer"
                        class="absolute inset-0 flex flex-wrap justify-center items-center space-x-4 hidden">
                        <div class="ion bg-blue-500 p-2 rounded-full text-white font-semibold">Na⁺</div>
                        <div class="ion bg-red-500 p-2 rounded-full text-white font-semibold">NO₃⁻</div>
                        <div class="ion bg-gray-300 p-2 rounded-full text-blue-600 font-semibold">H₂O</div>
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

        function resetSimulation() {
            currentStep = 1;
            temperature = 25;

            document.getElementById('temperatureDisplay').innerText = temperature;
            document.getElementById('mercury').style.height = '30%';
            document.getElementById('reactionLiquid').style.height = '0%';
            document.getElementById('reactionLiquid').classList.remove('bg-purple-500');
            document.getElementById('stepText').innerText =
                'Langkah 1: Tambahkan NaNO₃ ke dalam air di dalam kalorimeter dan amati reaksi.';
            document.getElementById('ionContainer').classList.add('hidden');
        }

        function nextStep() {
            const stepText = document.getElementById('stepText');
            const reactionLiquid = document.getElementById('reactionLiquid');
            const temperatureDisplay = document.getElementById('temperatureDisplay');
            const mercury = document.getElementById('mercury');
            const ionContainer = document.getElementById('ionContainer');

            if (currentStep === 1) {
                // Step 1: Tambahkan NaNO₃ ke dalam air
                reactionLiquid.style.height = '25%';
                stepText.innerText =
                'Langkah 2: Ion Na⁺ dan NO₃⁻ terbentuk, molekul air berinteraksi dengan kristal NaNO₃.';
                ionContainer.classList.remove('hidden');
                currentStep++;
            } else if (currentStep === 2) {
                // Step 2: Visualisasi ion dan suhu menurun
                temperature -= 3;
                temperatureDisplay.innerText = temperature;
                mercury.style.height = `${(temperature / 50) * 100}%`;
                stepText.innerText = 'Reaksi endoterm terjadi, suhu larutan menurun.';
                currentStep++;
            }
        }
    </script>

    <style>
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

        .ion {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
        }
    </style>
@endsection
