<!-- resources/views/layouts/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    @include('layouts.navbar')
    
    <main>
        @yield('content')
    </main>
    
    <!-- footer content -->
</body>
</html>