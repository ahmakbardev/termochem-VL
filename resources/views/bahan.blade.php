@extends('layouts.layout')

@section('content')
    <div class="containe mx-auto px-4 py-12 flex flex-col relative items-center h-screen overflow-hidden">
        <h2 class="text-center text-3xl font-bold mb-8">Alat dan Bahan Percobaan</h2>

        <!-- Table Layout -->
        <img src="{{ asset('assets/images/papan_alat.png') }}" alt="Papan Alat dan Bahan"
            class="object-contain w-1/3 absolute top-1/3 z-[1] -translate-y-1/2 right-20" />

        <!-- Scientist Image -->
        <img src="{{ asset('assets/images/scientist.png') }}" alt="Scientist"
            class="object-contain w-1/3 absolute top-1/2 -translate-y-1/2 peer" />

        <!-- Speech Bubble -->
        <div id="speechBubble"
            class="hidden absolute top-[-100px] left-[150px] bg-white text-gray-900 p-4 rounded-lg shadow-lg w-72 z-[50] peer-hover:inline">
            <p class="text-center">Ayo simak...alat dan bahan yang akan kita gunakan untuk praktikum TERMOKIMIA</p>
            <!-- Arrow -->
            <div
                class="absolute top-full left-[15%] w-4 h-4 bg-white rotate-45 transform translate-y-[-50%] shadow-md border border-gray-300">
            </div>
        </div>

        <img src="{{ asset('assets/images/meja.png') }}" alt="Meja" class="object-contain w-2/3 absolute top-[65%]" />
        <div class="absolute top-2/3 -translate-y-1/2 w-full flex justify-center">
            <div class="p-8 mt-36 rounded-lg max-w-md relative">
                <!-- Alat Section -->
                <div class="mb-8 grid grid-cols-5 gap-4">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/termometer.png') }}" alt="Termometer"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'Termometer')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/gelas_ukur.png') }}" alt="Gelas Ukur"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'Gelas Ukur')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/pipet_tetes.png') }}" alt="Pipet Tetes"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'Pipet Tetes')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/batang_pengaduk.png') }}" alt="Batang Pengaduk"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'Batang Pengaduk')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/kalorimeter_1.png') }}" alt="Kalorimeter"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'Kalorimeter')" onmouseout="hideTooltip()" />
                    </div>
                </div>

                <!-- Bahan Section -->
                <div class="grid grid-cols-4 gap-4">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/HCl.png') }}" alt="HCl 1 M"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'HCl 0,1 M')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/NaOH.png') }}" alt="NaOH 1 M"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'NaOH 0,1 M')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/cuka.png') }}" alt="Cuka"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'Cuka')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/soda_kue.png') }}" alt="Soda Kue"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'Soda Kue')" onmouseout="hideTooltip()" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Tooltip -->
        <div id="tooltip" class="hidden bg-gray-900 text-white text-xs rounded py-1 px-3 opacity-90 fixed z-50"></div>

        <div class="text-center mt-6">
            <a href="{{ route('simulasi') }}"
                class="bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700 transition duration-200">Pilih
                Percobaan</a>
        </div>
    </div>

    <script>
        function showTooltip(event, text) {
            const tooltip = document.getElementById('tooltip');
            tooltip.innerText = text;
            tooltip.style.left = `${event.clientX + 10}px`; // Slight adjustment to the right
            tooltip.style.top = `${event.clientY + 10}px`; // Slight adjustment below cursor
            tooltip.classList.remove('hidden');
        }

        function hideTooltip() {
            const tooltip = document.getElementById('tooltip');
            tooltip.classList.add('hidden');
        }
    </script>

    <style>
        /* Tooltip styling */
        #tooltip {
            position: fixed;
            z-index: 50;
            pointer-events: none;
            font-size: 0.875rem;
            transform: translateX(-50%);
        }

        /* General styling for items and layout */
        .bg-gray-200 {
            background-color: #f0f0f0;
            padding: 16px;
            border-radius: 12px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
