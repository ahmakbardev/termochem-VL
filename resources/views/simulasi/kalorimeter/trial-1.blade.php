@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 h-full flex justify-center items-center flex-col">
        <h2 class="text-center text-3xl font-bold mb-8">Simulasi Percobaan Kalorimeter</h2>

        <!-- Simulation Area -->
        <div id="simulationArea"
            class="bg-blue-50 p-6 rounded-lg w-4/5 shadow-md flex flex-col items-center space-y-8 relative">
            <!-- Chemical Containers -->
            <div class="flex justify-center space-x-8">
                <div id="hclContainer"
                    class="relative w-36 h-36 rounded-b-lg overflow-hidden flex flex-col cursor-pointer hover:scale-105 transform transition duration-300"
                    onclick="addHCl()">
                    <img src="{{ asset('assets/images/larutan_hcl.png') }}" class="object-contain h-[80%]" alt="">
                    <p class="text-xs transform text-gray-700 font-semibold text-center">HCl (Asam)</p>
                </div>

                <div id="naohContainer"
                    class="relative w-36 h-36 rounded-b-lg overflow-hidden flex flex-col cursor-pointer hover:scale-105 transform transition duration-300"
                    onclick="addNaOH()">
                    <img src="{{ asset('assets/images/larutan_naoh.png') }}" class="object-contain h-[80%]" alt="">
                    <p class="text-xs text-gray-700 font-semibold">NaOH (Basa)</p>
                </div>
            </div>

            <!-- Thermometer Display -->
            <div class="flex items-center space-x-4 mb-4">
                <div class="text-lg font-semibold">Suhu: <span id="temperatureDisplay">25</span>°C</div>
                <div id="thermometerContainer" class="relative h-64 w-6 bg-gray-200 rounded-full overflow-hidden">
                    <div id="mercury"
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-3 bg-red-500 transition-all duration-700"
                        style="height: 40%;"></div>
                </div>
            </div>

            <div class="relative w-32 h-40 bg-white border-4 border-gray-400 rounded-b-lg overflow-hidden" id="mainBeaker">
                <div id="reactionLiquid" class="absolute bottom-0 w-full h-0 transition-all duration-700"></div>
                <div id="stirrer" class="absolute top-0 left-1/2 transform -translate-x-1/2 w-2 h-40 bg-gray-600 hidden">
                </div>
                <div id="reactionBubbles"
                    class="hidden absolute inset-0 flex justify-center items-center flex-wrap space-x-2 space-y-2">
                </div>
            </div>

            <!-- Steps -->
            <div class="text-center text-gray-700 mt-4" id="instructions">
                <p id="stepText" class="p-3 rounded-sm bg-green-500 text-white">Langkah 1: Klik gelas HCl untuk
                    menuangkannya ke dalam kalorimeter.</p>

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
        let stirred = false;

        function resetSimulation() {
            // Reset variables
            currentStep = 1;
            temperature = 25;
            hclAdded = false;
            naohAdded = false;
            stirred = false;

            // Reset thermometer display
            document.getElementById('temperatureDisplay').innerText = temperature;
            document.getElementById('mercury').style.height = '40%';

            // Reset liquid colors and heights
            document.getElementById('reactionLiquid').classList.remove('bg-blue-500', 'bg-purple-500');
            document.getElementById('reactionLiquid').style.height = '0%';

            // Reset chemical container opacity and pointer events
            document.getElementById('hclContainer').classList.remove('opacity-50', 'pointer-events-none');
            document.getElementById('naohContainer').classList.remove('opacity-50', 'pointer-events-none');

            // Hide stirrer
            document.getElementById('stirrer').classList.add('hidden');

            // Reset instruction text
            document.getElementById('stepText').innerText =
                'Langkah 1: Klik gelas HCl untuk menuangkannya ke dalam kalorimeter.';
        }

        function addHCl() {
            if (currentStep === 1) {
                const hclContainer = document.getElementById('hclContainer');
                const reactionLiquid = document.getElementById('reactionLiquid');

                hclContainer.classList.add('opacity-50', 'pointer-events-none');
                reactionLiquid.classList.add('bg-blue-500');
                reactionLiquid.style.height = '29%';

                document.getElementById('stepText').innerText =
                    'Langkah 2: Klik gelas NaOH untuk menambahkannya ke dalam kalorimeter.';
                hclAdded = true;
                currentStep++;
            }
        }

        function addNaOH() {
            if (currentStep === 2 && hclAdded) {
                const naohContainer = document.getElementById('naohContainer');
                const reactionLiquid = document.getElementById('reactionLiquid');

                naohContainer.classList.add('opacity-50', 'pointer-events-none');
                reactionLiquid.classList.remove('bg-blue-500');
                reactionLiquid.classList.add('bg-purple-500');
                reactionLiquid.style.height = '50%';

                document.getElementById('stepText').innerText = 'Langkah 3: Aduk larutan untuk melanjutkan reaksi.';
                naohAdded = true;
                currentStep++;
            }
        }

        function stirSolution() {
            if (currentStep === 3 && naohAdded) {
                const stirrer = document.getElementById('stirrer');
                stirrer.classList.remove('hidden');

                let direction = 1;
                let angle = 0;

                const stirInterval = setInterval(() => {
                    angle += 2 * direction;
                    if (angle > 30 || angle < -30) direction *= -1;
                    stirrer.style.transform = `translate(-50%, 0) rotate(${angle}deg)`;
                }, 50);

                setTimeout(() => {
                    clearInterval(stirInterval);
                    stirred = true;
                    document.getElementById('stepText').innerText = 'Langkah 4: Reaksi selesai! Suhu meningkat.';
                    startReaction();
                }, 3000);
            }
        }

        function startReaction() {
            if (hclAdded && naohAdded && stirred) {
                const temperatureDisplay = document.getElementById('temperatureDisplay');
                const mercury = document.getElementById('mercury');

                temperature += 10; // Adjust temperature for exothermic reaction
                mercury.style.height = `${(temperature - 20) / 30 * 100}%`;
                temperatureDisplay.innerText = temperature;
            }
        }

        document.getElementById('mainBeaker').addEventListener('click', stirSolution);
    </script>

    <style>
        .ion.h-plus {
            background-color: #f21c1c;
        }

        .ion.oh-minus {
            background-color: #1c64f2;
        }

        .ion.reaction {
            background-color: #9333ea;
            color: white;
        }

        #thermometerContainer {
            background-color: #e2e8f0;
            border-radius: 20px;
            width: 25px;
            height: 150px;
            overflow: hidden;
        }

        #mercury {
            background-color: #ff4d4d;
            width: 100%;
            transition: height 1s ease;
        }

        #reactionLiquid.bg-blue-500 {
            background-color: #abc7ffa4;
        }

        #reactionLiquid.bg-purple-500 {
            background-color: #b19cd9;
        }

        #stirrer {
            position: absolute;
            top: 10%;
            left: 50%;
            width: 2px;
            height: 60%;
            background: #888;
            transform-origin: top center;
        }
    </style>
@endsection
