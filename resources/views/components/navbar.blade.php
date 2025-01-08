@vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">


    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<nav class="nav" id="nav-menu">
    <div class="nav-toggle" id="nav-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <a href="/" class="logo">
        <img src="/img/universitas.png" alt="Logo Konoha" class="logo-img" />
    </a>

    <ul class="nav-bar">
        <li class="nav-item">
            <img src="/img/akademik.png" class="nav-icon" />
            <a href="/posts">Menu</a>
        </li>
        <li class="nav-item">
            <img src="/img/keuaangan.png" class="nav-icon" />
            <a href="/profile">About</a>
        </li>
        <li class="nav-item">
            <img src="/img/organisasi.png" class="nav-icon" />
            <a href="/contact">Contact</a>
        </li>
    </ul>

    <div class="user-info">
        <img src="/img/zaky.jpeg" alt="Profile" class="profile-pic" />
        <div class="user-details">
            <span class="user-name">Muhamad Zaky nugraha A R</span>
            <span class="time">{{ now()->format('d F Y, H:i') }} WIB</span>
        </div>
    </div>

    
</nav>

    <ul class="nav-mobile" id="nav-mobile">
        <li class="nav-item">
            <img src="img/akademik.png"  class="nav-icon" />
            <a href="/posts">Menu</a>
        </li>
        <li class="nav-item">
            <img src="img/keuaangan.png"  class="nav-icon" />
            <a href="/profile">About</a>
        </li>
        <li class="nav-item">
            <img src="img/organisasi.png"  class="nav-icon" />
            <a href="/contact">Contact</a>
        </li>
    </ul>
    
    <script src="js/script.js"></script>