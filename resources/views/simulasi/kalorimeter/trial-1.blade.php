@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 h-full flex justify-center items-center flex-col">
        <h2 class="text-center text-3xl font-bold mb-8">Simulasi Percobaan Kalorimeter Sederhana</h2>

        <!-- Simulation Area -->
        <div id="simulationArea"
            class="bg-gray-50 p-6 rounded-lg w-4/5 shadow-md flex flex-col items-center space-y-8 relative">
            <!-- Step Display -->
            <div id="stepDisplay" class="w-full max-w-2xl flex justify-center">
                <img id="stepImage" src="{{ asset('assets/images/kalorimeter_1.png') }}" alt="Langkah 1"
                    class="w-full max-w-xs rounded-lg shadow-lg">
            </div>

            <!-- Instruction Text -->
            <div id="instructions" class="text-center text-gray-700 mt-4">
                <p id="stepText" class="text-sm bg-green-500 text-white p-3 rounded-sm">Langkah 1: Siapkan Kalorimeter.</p>
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

        // Data for each step
        const steps = [{
                image: "{{ asset('assets/images/kalorimeter_1.png') }}",
                text: "Langkah 1: Siapkan Kalorimeter."
            },
            {
                image: "{{ asset('assets/images/step_2.png') }}",
                text: "Langkah 2: Buka Kalorimeter dan masukkan HCl ke dalam kalorimeter."
            },
            {
                image: "{{ asset('assets/images/step_3.png') }}",
                text: "Langkah 3: Masukkan NaOH ke dalam kalorimeter."
            },
            {
                image: "{{ asset('assets/images/step_4-5.png') }}",
                text: "Langkah 4: Aduk larutan di dalam kalorimeter."
            },
            {
                image: "{{ asset('assets/images/step_5-5.png') }}",
                text: "Langkah 5: Amati kenaikan suhu setelah larutan diaduk."
            },
        ];

        // Function to move to the next step
        function nextStep() {
            if (currentStep < steps.length) {
                currentStep++;
                updateStep();
            }
        }

        // Function to reset the simulation
        function resetSimulation() {
            currentStep = 1;
            updateStep();
        }

        // Function to update the step content
        function updateStep() {
            const stepImage = document.getElementById("stepImage");
            const stepText = document.getElementById("stepText");

            stepImage.src = steps[currentStep - 1].image;
            stepText.innerText = steps[currentStep - 1].text;
        }
    </script>

    <style>
        #simulationArea {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #f9fafb;
            border-radius: 8px;
            padding: 24px;
        }

        #stepDisplay img {
            border: 2px solid #d1d5db;
            border-radius: 8px;
        }

        button {
            transition: all 0.3s ease;
        }

        button:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
