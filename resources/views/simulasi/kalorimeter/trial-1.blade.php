@extends('layouts.layout')

@section('content')
    <div class="container mx-auto px-4 py-8 h-full flex justify-center items-center flex-col">
        <h2 class="text-center text-3xl font-bold mb-8">Simulasi Percobaan Kalorimeter Sederhana</h2>

        <!-- Simulation Area -->
        <div class="bg-gray-50 p-6 rounded-lg w-full max-w-6xl shadow-md flex items-center space-y-8 relative">
            <!-- Step Display -->
            <div class="flex flex-col">
                <h4 class="bg-[#ffd51e] text-center mb-3 rounded-md text-[#037940]">Bahan</h1>
                    <div class="flex flex-col items-center space-y-4 p-4 rounded-md bg-white">
                        <!-- HCl -->
                        <img src="{{ asset('assets/images/simulasi/HCl.png') }}" alt="HCl"
                            class="w-32 cursor-pointer hover:scale-110 transition" onclick="addSubstance('hcl')" />
                        <!-- NaOH -->
                        <img src="{{ asset('assets/images/simulasi/NaOH.png') }}" alt="NaOH"
                            class="w-32 cursor-pointer hover:scale-110 transition" onclick="addSubstance('naoh')" />
                    </div>
            </div>
            <div class="flex flex-1 justify-center">
                <div class="flex flex-col">
                    <div class="kaloriSimulation flex flex-col items-center">
                        <svg viewBox="0 0 200 350" xmlns="http://www.w3.org/2000/svg" class="w-72">
                            <!-- Botol luar -->
                            <rect x="20" y="80" width="160" height="200" rx="20" ry="20" fill="#cceeff"
                                stroke="#000" stroke-width="2" />

                            <!-- Larutan luar (insulator) -->
                            <rect x="40" y="160" width="120" height="100" rx="15" ry="15"
                                fill="#fff3c1" />

                            <!-- Botol dalam -->
                            <rect x="50" y="110" width="100" height="150" rx="15" ry="15" fill="white"
                                stroke="#000" stroke-width="1.5" />

                            <!-- Tutup botol -->
                            <rect x="20" y="60" width="160" height="25" fill="black" rx="5" />

                            <!-- Batang pengaduk -->
                            <g id="stirrer" opacity="0">
                                <line id="stirrer-line" x1="75" y1="75" x2="75" y2="200"
                                    stroke="black" stroke-width="4" />
                                <ellipse id="stirrer-head" cx="100" cy="200" rx="25" ry="6"
                                    stroke="black" stroke-width="3" fill="none" />
                            </g>

                            <!-- Termometer -->
                            <g id="thermometer" opacity="1">
                                <!-- Tabung termometer -->
                                <rect x="110" y="40" width="8" height="150" rx="4" ry="4"
                                    fill="#e6f0ff" stroke="black" stroke-width="0.5" />

                                <!-- Skala dan label -->
                                <g id="thermo-scale">
                                    <line x1="110" y1="180" x2="118" y2="180" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="183" font-size="6" fill="black">25°C</text>

                                    <line x1="110" y1="170" x2="118" y2="170" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="173" font-size="6" fill="black">26°C</text>

                                    <line x1="110" y1="160" x2="118" y2="160" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="163" font-size="6" fill="black">27°C</text>

                                    <line x1="110" y1="150" x2="118" y2="150" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="153" font-size="6" fill="black">28°C</text>

                                    <line x1="110" y1="140" x2="118" y2="140" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="143" font-size="6" fill="black">29°C</text>

                                    <line x1="110" y1="130" x2="118" y2="130" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="133" font-size="6" fill="black">30°C</text>

                                    <line x1="110" y1="120" x2="118" y2="120" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="123" font-size="6" fill="black">31°C</text>

                                    <line x1="110" y1="110" x2="118" y2="110" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="113" font-size="6" fill="black">32°C</text>

                                    <line x1="110" y1="100" x2="118" y2="100" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="103" font-size="6" fill="black">33°C</text>

                                    <line x1="110" y1="90" x2="118" y2="90" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="93" font-size="6" fill="black">34°C</text>

                                    <line x1="110" y1="80" x2="118" y2="80" stroke="black"
                                        stroke-width="1.2" />
                                    <text x="122" y="83" font-size="6" fill="black">35°C</text>
                                </g>

                                <!-- Kolom merkuri (25°C) -->
                                {{-- <path id="mercury" d="
                                                M112 180
                                                v -15
                                                a2 2 0 0 1 4 0
                                                v 15
                                                z
                                                " fill="red" /> --}}
                                <path id="mercury" d="M112 185 v -5 a2 2 0 0 1 4 0 v 5 z" fill="red" />


                            </g>
                        </svg>

                    </div>
                    <div class="flex justify-between">
                        <button class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                            onclick="stirLiquid()">Aduk</button>

                        <button class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                            onclick="resetSimulation()">Mulai Lagi</button>
                    </div>

                </div>
                <!-- Prosedur Panel -->
                <div class="flex flex-col items-center">
                    <h4 class="bg-[#ffd51e] text-center mb-3 px-5 rounded-md text-[#037940]">Prosedur</h4>
                    <ul class="bg-white p-4 rounded-md space-y-2 text-sm text-[#037940]">
                        <li>• Masukkan larutan HCl ke dalam kalorimetri </li>
                        <li>• Amati suhu awal larutan HCl</li>
                        <li>• Masukan larutan NaOH ke dalam klorimetri</li>
                        <li>• Aduk larutan di dalam kalorimetri</li>
                        <li>• Amati perubahan suhu setelah larutan di aduk</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <script>
        let currentStep = 1;
        let temperature = 25;
        let firstSubstance = null;
        let secondSubstance = null;

        function addSubstance(type) {
            const svgContainer = document.querySelector('.kaloriSimulation svg');
            const stepText = document.getElementById('stepText');

            if (currentStep === 1 && type === 'hcl') {
                firstSubstance = type;
                // Warnai botol dalam dengan biru muda (HCl)
                const innerBottle = svgContainer.children[2];
                innerBottle.setAttribute("fill", "#add8e6");

                updateStepText('<b>Langkah 2:</b> Amati suhu awal larutan HCl.');
                currentStep++;
            } else if (currentStep === 2 && type === 'naoh' && firstSubstance === 'hcl') {
                secondSubstance = type;
                // Ganti warna botol jadi hijau muda untuk campuran
                const innerBottle = svgContainer.children[2];
                innerBottle.setAttribute("fill", "#90ee90");

                updateStepText('<b>Langkah 3:</b> Larutan NaOH ditambahkan. Silakan aduk larutan.');
                currentStep++;
            }
        }

        function updateStepText(html) {
            const textBox = document.getElementById("stepText");
            if (textBox) {
                textBox.innerHTML = html;
            } else {
                const newStep = document.createElement('div');
                newStep.id = "stepText";
                newStep.className = "text-sm text-green-700 bg-[#ffd51e] max-w-xl py-4 px-8 rounded-xl mt-4 text-center";
                newStep.innerHTML = html;
                document.querySelector('.kaloriSimulation').appendChild(newStep);
            }
        }

        function stirLiquid() {
            if (currentStep === 3 && firstSubstance === 'hcl' && secondSubstance === 'naoh') {
                const stirrerGroup = document.getElementById('stirrer');
                const line = document.getElementById('stirrer-line');
                const ellipse = document.getElementById('stirrer-head');
                stirrerGroup.setAttribute('opacity', '1');

                let y1 = 25;
                let y2 = 160;
                let ellipseCy = 160;
                let direction = -1;

                let interval = setInterval(() => {
                    y1 += direction * 2;
                    y2 += direction * 2;
                    ellipseCy += direction * 2;

                    if (y1 <= 15 || y1 >= 25) direction *= -1;

                    line.setAttribute('y1', y1);
                    line.setAttribute('y2', y2);
                    ellipse.setAttribute('cy', ellipseCy);
                }, 50);

                setTimeout(() => {
                    clearInterval(interval);
                    line.setAttribute('y1', 25);
                    line.setAttribute('y2', 160);
                    ellipse.setAttribute('cy', 160);

                    // Animasikan suhu naik
                    animateThermometer(25, 40); // dari 25°C ke 40°C

                    updateStepText('<b>Langkah 5:</b> Pengadukan selesai. Amati perubahan suhu setelah reaksi.');
                }, 3000);


                currentStep++;
            }
        }

        function animateThermometer(startTemp, endTemp) {
            const mercury = document.getElementById('mercury');
            const maxTemp = 35;
            const minY = 140; // Y dari suhu 35°C (naik)
            const maxY = 180; // Y dari suhu 25°C (awal)
            const pixelsPerDeg = (maxY - minY) / (maxTemp - 25);

            let temp = startTemp;

            const interval = setInterval(() => {
                if (temp >= endTemp) {
                    clearInterval(interval);
                    return;
                }
                temp++;

                // Hitung posisi dan tinggi merkuri
                const height = (temp - 25) * pixelsPerDeg;
                const topY = maxY - height;
                const bottomY = maxY;

                // Ubah bentuk path dengan nilai baru
                const d = `
            M112 ${bottomY}
            v -${height}
            a2 2 0 0 1 4 0
            v ${height}
            z
        `;
                mercury.setAttribute('d', d.trim());
            }, 100);
        }


        function resetSimulation() {
            currentStep = 1;
            temperature = 25;
            firstSubstance = null;
            secondSubstance = null;

            const svgContainer = document.querySelector('.kaloriSimulation svg');
            const innerBottle = svgContainer.children[2];
            innerBottle.setAttribute("fill", "white");

            updateStepText('<b>Langkah 1:</b> Klik HCl untuk memasukkan ke dalam kalorimeter.');
        }

        window.onload = function() {
            updateStepText('<b>Langkah 1:</b> Klik HCl untuk memasukkan ke dalam kalorimeter.');
        }
    </script>
@endsection
