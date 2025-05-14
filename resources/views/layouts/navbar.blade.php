<nav class="bg-white shadow-lg w-max-full">
    <div class="container mx-auto px-0.25 py-3">
        <div class="flex items-center justify-start">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="{{ asset('images/logo.png') }}" class="w-[150px] h-50" alt="Logo">
            </div>
            
            <!-- Spacer untuk memberikan ruang di tengah -->
            <div class="flex-grow"></div>

            <!-- Menu Navigasi -->
            <div class="hidden md:flex space-x-8 justify-end flex-grow max-w-400">
                <a href="{{ url('/home') }}" class="text-gray-700 hover:text-pink-600 px-0.5 py-2 text-sm font-medium 
                    {{ request()->routeIs('home') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                    Homepage
                </a>
                <a href="{{ url('/diary') }}" class="text-gray-700 hover:text-pink-600 px-0.5 py-2 text-sm font-medium 
                    {{ request()->routeIs('diary') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                    Diary
                </a>
                <a href="{{ url('/home') }}" class="text-gray-700 hover:text-pink-600 px-0.5 py-2 text-sm font-medium 
                    {{ request()->routeIs('belajar') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                    Belajar
                </a>
                <a href="{{ url('/home') }}" class="text-gray-700 hover:text-pink-600 px-0.5 py-2 text-sm font-medium 
                    {{ request()->routeIs('gejala') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                    Gejala
                </a>
                <a href="{{ url('/home') }}" class="text-gray-700 hover:text-pink-600 px-0.5 py-2 text-sm font-medium 
                    {{ request()->routeIs('about') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                    About Us
                </a>
                <a href="{{ url('/home') }}" class="text-gray-700 hover:text-pink-600 px-0.5 py-2 text-sm font-medium 
                    {{ request()->routeIs('bu-clara') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                    Bu Clara
                </a>
                <a href="{{ url('/home') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium 
                    {{ request()->routeIs('contact') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                    Contact
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden mt-4" id="mobile-menu">
            <div class="flex flex-col space-y-2">
                <a href="{{ route('home') }}" class="nav-link-mobile {{ request()->routeIs('home') ? 'nav-active-mobile' : '' }}">
                    Homepage
                </a>
                <!-- Tambahkan menu mobile lainnya dengan pola yang sama -->
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
@endpush