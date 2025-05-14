<!-- resources/views/layouts/partials/navbar.blade.php -->
<nav class="bg-white shadow-md py-4 px-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo on the left -->
        <div class="flex-shrink-0">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-pink-600">
                Dearbaby
            </a>
        </div>

        <!-- Spacer to push menu items to the right -->
        <div class="flex-grow"></div>

        <!-- Menu items centered and spaced evenly -->
        <div class="hidden md:flex space-x-8 justify-center flex-grow max-w-3xl">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                Homepage
            </a>
            <a href="{{ route('diary') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('diary') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                Diary
            </a>
            <a href="{{ route('belajar') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('belajar') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                Belajar
            </a>
            <a href="{{ route('gejala') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('gejala') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                Gejala
            </a>
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('about') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                About Us
            </a>
            <a href="{{ route('bu-clara') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('bu-clara') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                Bu Clara
            </a>
            <!-- Add your 7th menu item here -->
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'text-pink-600 border-b-2 border-pink-600' : '' }}">
                Contact
            </a>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button type="button" class="text-gray-500 hover:text-pink-600 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu (hidden by default) -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-pink-600 hover:bg-gray-50">
                Homepage
            </a>
            <a href="{{ route('diary') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-pink-600 hover:bg-gray-50">
                Diary
            </a>
            <a href="{{ route('belajar') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-pink-600 hover:bg-gray-50">
                Belajar
            </a>
            <a href="{{ route('gejala') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-pink-600 hover:bg-gray-50">
                Gejala
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-pink-600 hover:bg-gray-50">
                About Us
            </a>
            <a href="{{ route('bu-clara') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-pink-600 hover:bg-gray-50">
                Bu Clara
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-pink-600 hover:bg-gray-50">
                Contact
            </a>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
@endpush