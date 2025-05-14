<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Detail Gejala</title>
</head>
<body>
    @include('layouts.partials.navbar')
    <main class="p-6">
        <div class="max-w-3xl mx-auto space-y-8">
            @php
                $gejalaList = [
                    ['name' => 'Sakit Punggung', 'image' => asset('img/sakit-punggung.jpeg'), 'description' => 'Sakit punggung adalah keluhan umum yang dialami ibu hamil, terutama di trimester ketiga. Ini terjadi karena perubahan fisik dan hormonal yang mempengaruhi tubuh.', 'causes' => [
                        ['icon' => asset('images/icons/pertumbuhan-janin.png'), 'text' => 'Pertumbuhan janin: Perut yang semakin membesar memberikan tekanan pada tulang belakang.'],
                        ['icon' => asset('images/icons/perubahan-postur.png'), 'text' => 'Perubahan postur: Berat badan tambahan mengubah pusat gravitasi tubuh, membuat punggung bekerja lebih keras.'],
                        ['icon' => asset('images/icons/hormon-relaksin.png'), 'text' => 'Hormon relaksin: Hormon ini menyebabkan sendi dan ligamen di area panggul melemas, membuat punggung rentan terhadap nyeri.']
                    ], 'solutions' => [
                        ['icon' => asset('images/icons/olahraga.png'), 'text' => 'Olahraga ringan seperti yoga atau peregangan untuk memperkuat otot punggung.'],
                        ['icon' => asset('images/icons/postur-duduk.png'), 'text' => 'Perhatikan postur duduk dan berdiri yang benar untuk mengurangi tekanan pada punggung.'],
                        ['icon' => asset('images/icons/kompres-hangat.png'), 'text' => 'Gunakan kompres hangat atau dingin untuk meredakan nyeri.']
                    ]],
                ];
                $gejala = $gejalaList[$id];
            @endphp

            <!-- Card 1: Title, Image, and Description -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="text-center mb-6">
                    <img src="{{ $gejala['image'] }}" alt="{{ $gejala['name'] }}" class="w-32 h-32 mx-auto rounded-full border-4 border-purple-700 mb-4">
                    <h1 class="text-3xl font-bold text-gray-800">{{ $gejala['name'] }}</h1>
                </div>
                <p class="text-gray-700 text-center">
                    {{ $gejala['description'] }}
                </p>
            </div>

            <!-- Card 2: Causes -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Penyebab</h2>
                <div class="space-y-4">
                    @foreach ($gejala['causes'] as $cause)
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-purple-700">
                                <img src="{{ $cause['icon'] }}" alt="Icon" class="w-8 h-8">
                            </div>
                            <p class="text-gray-700">{{ $cause['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Card 3: Solutions -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Cara Mengatasi</h2>
                <div class="space-y-4">
                    @foreach ($gejala['solutions'] as $solution)
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-purple-700">
                                <img src="{{ $solution['icon'] }}" alt="Icon" class="w-8 h-8">
                            </div>
                            <p class="text-gray-700">{{ $solution['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center">
                <a href="{{ route('gejala') }}" class="block w-full bg-purple-700 text-white text-lg py-4 rounded-full">Kembali</a>
            </div>
        </div>
    </main>
</body>
</html>
