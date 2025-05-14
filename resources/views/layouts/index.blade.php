<!-- resources/views/layouts/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <!-- head content -->
</head>
<body>
    @include('layouts.partials.navbar')
    
    <main>
        @yield('content')
    </main>
    
    <!-- footer content -->
</body>
</html>