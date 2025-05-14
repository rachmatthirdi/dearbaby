<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Gejala Page</title>
</head>
<body>
    @include('layouts.partials.navbar')
    <main class="p-6">
        <div class="flex gap-4 mb-6" id="filter-chips">
            <button class="chip active">Semua Gejala</button>
            <button class="chip">Ringan</button>
            <button class="chip">Sedang</button>
            <button class="chip">Serius</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ([
                ['name' => 'Sakit Punggung', 'image' => asset('img/sakit-punggung.jpeg')],
                ['name' => 'Mual di pagi hari', 'image' => asset('images/gejala/mual-pagi.jpg')],
                ['name' => 'Sering buang air kecil', 'image' => asset('images/gejala/sering-buang-air.jpg')],
                ['name' => 'Kelelahan', 'image' => asset('images/gejala/kelelahan.jpg')],
                ['name' => 'Sembelit', 'image' => asset('images/gejala/sembelit.jpg')],
                ['name' => 'Mulas', 'image' => asset('images/gejala/mulas.jpg')],
                ['name' => 'Keputihan', 'image' => asset('images/gejala/keputihan.jpg')],
                ['name' => 'Gatal-gatal', 'image' => asset('images/gejala/gatal.jpg')],
                ['name' => 'Sakit Kepala', 'image' => asset('images/gejala/sakit-kepala.jpg')],
                ['name' => 'Kram Perut', 'image' => asset('images/gejala/kram-perut.jpg')],
                ['name' => 'Pembengkakan', 'image' => asset('images/gejala/pembengkakan.jpg')],
                ['name' => 'Insomnia', 'image' => asset('images/gejala/insomnia.jpg')],
                ['name' => 'Nyeri panggul', 'image' => asset('images/gejala/nyeri-panggul.jpg')],
                ['name' => 'Pendarahan Ringan', 'image' => asset('images/gejala/pendarahan-ringan.jpg')],
            ] as $index => $gejala)
                <a href="{{ route('gejala.detail', $index) }}" class="block p-4 border-2 border-purple-700 rounded-lg hover:shadow-lg">
                    <img src="{{ $gejala['image'] }}" alt="{{ $gejala['name'] }}" class="w-full h-32 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">{{ $gejala['name'] }}</h3>
                    <p class="text-gray-600 mt-2">Klik untuk melihat detail lebih lanjut.</p>
                </a>
            @endforeach
        </div>
    </main>

    <style>
        .chip {
            padding: 0.5rem 1rem;
            border: 2px solid #7c3aed;
            border-radius: 9999px;
            background-color: white;
            color: #7c3aed;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .chip.active {
            background-color: #7c3aed;
            color: white;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const chips = document.querySelectorAll('.chip');
            chips.forEach(chip => {
                chip.addEventListener('click', () => {
                    chips.forEach(c => c.classList.remove('active'));
                    chip.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>