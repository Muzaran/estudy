<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
</head>
<body>
    <!-- Navbar section with Alpine.js for interactivity -->
    {{-- ini akan memanggil dari components > Navbar> navbar.blade.php 
    <x-navbar></x-navbar> --}}
    <x-navbar></x-navbar>
    <x-header>{{$title}}</x-header>
   
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{$slot}}
        </div>
    </main>
    
    

    <script src="js/script.js"></script>
</body>
</html>
