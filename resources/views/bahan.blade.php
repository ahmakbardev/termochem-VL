@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-12 flex flex-col items-center">
        <h2 class="text-center text-3xl font-bold mb-8">Alat dan Bahan Percobaan</h2>

        <!-- Table Layout -->
        <div class="bg-gray-200 p-8 rounded-lg shadow-lg w-full max-w-4xl relative">
            <!-- Tooltip -->
            <div id="tooltip" class="hidden fixed bg-gray-900 text-white text-xs rounded py-1 px-3 opacity-90"></div>

            <!-- Alat Section -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold mb-4 text-center">Alat</h3>
                <div class="bg-gray-100 p-8 rounded-lg grid grid-cols-4 gap-8">
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
                </div>
            </div>

            <!-- Bahan Section -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-center">Bahan</h3>
                <div class="bg-gray-100 p-8 rounded-lg grid grid-cols-4 gap-8">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/NaCl.png') }}" alt="NaCl 1 M"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'NaCl 1 M')" onmouseout="hideTooltip()" />
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/images/NaOH.png') }}" alt="NaOH 1 M"
                            class="object-contain w-20 h-20 hover:scale-110 transition transform duration-200 cursor-pointer"
                            onmouseover="showTooltip(event, 'NaOH 1 M')" onmouseout="hideTooltip()" />
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
        <div class="text-center mt-6">
            <a href="{{ route('simulasi') }}"
                class="bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700 transition duration-200">Pilih Percobaan</a>
        </div>
    </div>

    <script>
        function showTooltip(event, text) {
            const tooltip = document.getElementById('tooltip');
            tooltip.innerText = text;
            tooltip.style.left = `${event.pageX}px`;
            tooltip.style.top = `${event.pageY + 20}px`; // Position 20px below the cursor
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
            z-index: 10;
            pointer-events: none;
            font-size: 0.875rem;
            transform: translateX(-50%);
        }

        /* Table and item styling */
        .bg-gray-200 {
            background-color: #f0f0f0;
            padding: 16px;
            border-radius: 12px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .bg-gray-100 {
            padding: 16px;
            border-radius: 8px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }
    </style>
@endsection
