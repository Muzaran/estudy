<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
   
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
</head>
<body>
    <!-- Navbar section with Alpine.js for interactivity -->
    {{-- ini akan memanggil dari components > Navbar> navbar.blade.php 
    <x-navbar></x-navbar> --}}
    <x-navbar></x-navbar>
    
    <x-header>
        
        
        {{$title}}
    
    </x-header>
   
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{$slot}}
        </div>
    </main>
    
    
    <x-footer></x-footer>
    <script src="js/script.js"></script>
</body>
</html>
