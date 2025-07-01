<header class="header-area">
    <!-- Top Bar -->
    <div class="top-bar bg-lightblue d-flex justify-content-between align-items-center px-3 py-1">
       <div>
    <h6 style="color: white;">9849679083 &nbsp;&nbsp; gurukul@gmail.com</h6>
</div>

         <div>
        <a href="#" class="top-link me-2">Register</a>
        <span class="mx-1" style="color:#fff">/</span>
        <a href="#" class="top-link">Sign In</a>
    </div>
    </div>

    <!-- Main Header -->
   <!-- ✅ MOBILE HEADER (Only shown on small screens) -->
<div class="container-fluid d-flex d-lg-none align-items-center justify-content-between px-3 py-2">
    <!-- Hamburger -->
    <button class="hamburger" id="hamburgerBtn">
        <i class="fas fa-bars"></i>
    </button>



</div>
    

<div class="container-fluid d-flex align-items-center justify-content-between px-3 py-2">
        <!-- Desktop Hamburger (hidden, just in case) -->
    <button class="hamburger d-none" id="hamburgerBtn">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Logo on the left -->
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
        </a>
    </div>

    <!-- Gurukul name on the right -->
    <div class="text-end">
        <h1 class="mb-0 text-black">परमानन्द वैदिक गुरुकुल</h1>
    </div>
</div>

        
<!-- Desktop Navigation -->
<nav class="main-nav d-none d-lg-block">
    <div class="nav-scroll-wrapper">
        <div class="nav-inner d-flex flex-nowrap justify-content-center text-white py-1 px-3">
            <a href="{{route('home')}}" class="nav-link-item">गृहपृष्ठ</a>
            <a href="{{ route('aboutus') }}" class="nav-link-item">हाम्रो बारेमा</a>
            <a href="{{route('history')}}" class="nav-link-item">इतिहास</a>
            <a href="{{route('gallery')}}" class="nav-link-item">ग्यालेरी</a>
            <a href="{{route('Program')}}" class="nav-link-item">कार्यक्रमहरू</a>
            <a href="{{route('blog')}}" class="nav-link-item">समाचार / ब्लग</a>
            <a href="{{route('members')}}" class="nav-link-item">सञ्चालक समिति सदस्यहरू</a>
            <a href="{{route('Donation')}}" class="nav-link-item">दान</a>
        </div>
    </div>
</nav>


    <!-- Overlay Navigation for Mobile -->
    <div class="overlay-menu" id="overlayMenu">
        <button class="close-btn" id="closeOverlay">&times;</button>
        <a href="#">गृहपृष्ठ</a>
        <a href="#">हाम्रो बारेमा</a>
        <a href="#">इतिहास</a>
        <a href="#">ग्यालेरी</a>
        <a href="#">कार्यक्रमहरू</a>
        <a href="#">समाचार / ब्लग</a>
        <a href="#">दान</a>
    </div>

    <script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const overlayMenu = document.getElementById('overlayMenu');
    const closeOverlay = document.getElementById('closeOverlay');
    const searchToggle = document.getElementById('searchToggle');
    const mobileSearchBar = document.getElementById('mobileSearchBar');

    hamburgerBtn.addEventListener('click', () => {
        overlayMenu.style.display = 'flex';
    });

    closeOverlay.addEventListener('click', () => {
        overlayMenu.style.display = 'none';
    });

    searchToggle.addEventListener('click', () => {
        mobileSearchBar.classList.toggle('show');
    });
</script>

</header>

<style>

/* Sticky header */
.header-area {
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%; /* Add this */
    margin: 0; /* Add this */
}

.main-header{
    padding:0.5rem 1rem;
    background-color:#fff;
}

/* Ensures the search bar remains properly aligned and sticky on mobile */
.mobile-search-bar {
    display: none;
}

.mobile-search-bar.show {
    display: block;
}
</style>
