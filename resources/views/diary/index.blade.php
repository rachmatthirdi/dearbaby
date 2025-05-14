


@extends('home')

@php
    $bulanSekarang = date('F'); // Mengambil bulan dalam format bahasa Inggris
    $tahunSekarang = date('Y'); // Mengambil tahun
    $bulanIndonesia = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    ];

    $bulanAngka = date('n'); // Mendapatkan angka bulan (1-12)


    // Mendapatkan jumlah hari dalam bulan ini
    $jumlahHari = cal_days_in_month(CAL_GREGORIAN, $bulanAngka, $tahunSekarang);


    // Menentukan hari pertama bulan ini (0 = Minggu, 6 = Sabtu)
    $hariPertama = date('w', strtotime("$tahunSekarang-$bulanAngka-01"));


    // Array untuk menyimpan tanggal
    $tanggalGrid = [];
    $index = 0;

    // Tambahkan hari kosong sebelum tanggal pertama
    for ($i = 0; $i < $hariPertama; $i++) {
        $tanggalGrid[] = null;
        $index++;
    }

    // Tambahkan tanggal bulan ini
    for ($tanggal = 1; $tanggal <= $jumlahHari; $tanggal++) {
        $tanggalGrid[] = $tanggal;
        $index++;
    }

    // Tambahkan hari kosong setelah tanggal terakhir jika belum penuh
    while ($index % 7 !== 0) {
        $tanggalGrid[] = null;
        $index++;
    }

    $emotNames = ['sangat_senang', 'senang', 'biasa', 'bete', 'sedih', 'marah'];
    
    $activeMood = request('mood') ?? 'Sedih'; // Mood default yang aktif
@endphp

@section('content')
    <div class="bg-purple-500 justify-center rounded-xl max_h-screen p-4 m-10">

        <h1 class="text-2xl font-bold  text-white">Mood Check Hari Ini</h1>
        <p class="text-white">Bagaimana perasaan bunda hari ini?</p>


        <!-- Grid dengan gambar pilihan -->
        <div class="grid grid-cols-3 grid-rows-2 place-items-center gap-4 mt-4">

            @foreach($emotNames as $emot)
                <img src="{{ asset("images/emot/{$emot}_0.png") }}" class="w-20 h-20 cursor-pointer emot-image" 
                    alt="{{ ucfirst($emot) }} Emot" data-default="{{ asset("images/emot/{$emot}_0.png") }}" 
                    data-active="{{ asset("images/emot/{$emot}_1.png") }}">
            @endforeach
        </div>


    </div>

    <div class="flex items-center border border-purple-500 justify-center max_h-screen p-4 m-10 rounded-xl">
        <!-- Input text -->
        <input type="text" placeholder="Tulis pesan bunda sesuai mood hari ini" 
            class="w-full text-lg font-semibold text-gray-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        
        <!-- Emoticon Button -->
        <button class="ml-2 p-2 rounded-full focus:outline-none hover:scale-110 transition">
            <img src="{{ asset('images/kirim-pesan.png') }}" class="w-8 h-8" alt="Send">
        </button>
    </div>

    <div class="flex items-center border border-purple-500 justify-center max_h-screen p-4 m-10 rounded-xl">

        <div class="flex justify-between ">
            <div class="me-20">
                <h1 class="text-xl font-bold text-purple-500">Kalender Mood Bunda</h1>
                <h2 class="text-3xl font-bold text-purple-700">{{ $bulanIndonesia[$bulanSekarang] }} {{ $tahunSekarang }}</h2>
            </div>

            <div class="ms-20">
                <img src="{{ asset('images/emot/senang_1.png') }}" class="w-[100px] " alt="Logo">
            </div>

        </div>

    </div>

 <div class="grid grid-cols-7 grid-rows-5 shadow-lg border-b-4 border-e-4 border-gray-300 m-4  max-w-lg mx-auto">
    @foreach ($tanggalGrid as $tanggal)
        <div class="{{ $tanggal ? 'bg-gray-100 border border-gray-400' : 'bg-gray-200 border border-gray-400' }} 
                    text-lg font-bold relative w-20 h-20 flex items-center justify-center">
            @if ($tanggal)
                <span class="absolute top-1 left-1 text-sm">{{ $tanggal }}</span>
            @endif
        </div>
    @endforeach
</div>

<div>
    <h2 class="text-3xl font-bold text-purple-700 text-center mb-4">Mood Check Bulanan</h2>

    <div class="max-w-lg mx-auto bg-gray-100 p-4 rounded-lg shadow-md">
        <canvas id="moodChart"></canvas>
    </div>
</div>

<div class="max-w-lg mx-auto bg-gray-100 m-6 rounded-lg shadow-md">
    <h2 class="text-xl font-bold text-gray-700">Riwayat Diary Mood Bunda</h2>
    <p class="text-gray-600">Filter berdasarkan mood bunda:</p>

    <!-- Filter Mood -->
    <div class="grid grid-cols-3 grid-rows-2 gap-2 mt-2">

        @foreach ($emotNames as $mood)
            <a href="{{ route('diary', ['mood' => $mood]) }}"
               class="px-4 py-2 rounded-md font-semibold {{ $activeMood === $mood ? 'bg-purple-500 text-white' : 'bg-gray-300 text-gray-700 hover:bg-gray-400' }}">
                {{ $mood }}
            </a>
        @endforeach
    </div>
</div>

<div class="max-w-lg mx-auto m-6 rounded-lg">
    <p class="text-purple-500 font-bold text-lg">{{ date('d F Y') }}</p>

        <div class="flex justify-between max-w-lg mx-auto bg-gray-100 m-6 rounded-lg shadow-md border-l-4 p-4">
            <div>
                
            <h2 class="text-purple-700 font-semibold text-xl">Cerita Bunda</h2>
            <p class="text-gray-800 text-lg font-bold">Kekecewaan karna tidak dikabari abang ganteng</p>
            </div>

            <div class="">
                <img src="{{ asset('images/emot/senang_1.png') }}" class="w-[60px]" alt="Logo">
            </div>
        </div>
</div>




    <!-- JavaScript untuk mengubah gambar -->
    <script>
        document.querySelectorAll('.emot-image').forEach(img => {
            img.addEventListener('click', function() {
                // Reset semua gambar ke default (_0)
                document.querySelectorAll('.emot-image').forEach(i => {
                    i.src = i.getAttribute('data-default');
                });

                // Ganti hanya gambar yang diklik ke _1
                this.src = this.getAttribute('data-active');
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('moodChart').getContext('2d');
            const moodChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["😊 Bahagia", "😆 Tertawa", "🙂 Senang", "😢 Sedih", "😘 Cinta", "😡 Marah"],
                    datasets: [{
                        label: "Jumlah Hari Mood",
                        data: [12, 18, 7, 5, 8, 3], // Contoh data, bisa diganti dari database
                        backgroundColor: [
                            "rgba(75, 192, 192, 0.6)",  
                            "rgba(255, 159, 64, 0.6)",  
                            "rgba(255, 99, 132, 0.6)",  
                            "rgba(54, 162, 235, 0.6)",  
                            "rgba(153, 102, 255, 0.6)",  
                            "rgba(255, 0, 0, 0.6)"      
                        ],
                        borderColor: "rgba(0, 0, 0, 0.8)",
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    </script>
@endsection




