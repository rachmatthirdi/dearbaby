<!-- resources/views/layouts/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    @include('layouts.partials.navbar')
    
    <main>
        @yield('content')
    </main>
    
    <!-- footer content -->
</body>
</html>