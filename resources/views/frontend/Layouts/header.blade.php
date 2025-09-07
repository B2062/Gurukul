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
       
    <!-- Logo on the left -->
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
        </a>
    </div>

    <!-- Gurukul name on the right -->
    <div class="text-end">
        <h1 class="mb-0 text-black">श्री परमानन्द स्मृति वैदिक विद्याभवन गुरुकुल
</h1>
    </div>
</div>


<!-- ✅ Desktop Navigation -->
<nav class="main-nav d-none d-lg-block">
  <div class="nav-scroll-wrapper">
    <div class="nav-inner d-flex flex-nowrap justify-content-center text-white py-1 px-3">
      <a href="{{route('home')}}" class="nav-link-item">गृहपृष्ठ</a>
      <a href="{{ route('aboutus') }}" class="nav-link-item">हाम्रो बारेमा</a>
      <a href="{{route('history')}}" class="nav-link-item">इतिहास</a>
      <a href="{{route('gallery')}}" class="nav-link-item">ग्यालेरी</a>
      <a href="{{route('Program')}}" class="nav-link-item">कार्यक्रमहरू</a>
      <a href="{{route('blog')}}" class="nav-link-item">समाचार / ब्लग</a>
      
      <div class="nav-item dropdown">
        <a href="#" class="nav-link-item dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
         पदाधिकारी
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('members1')}}">सम्मान्य संस्थापक 
</a></li>
          <li><a class="dropdown-item" href="{{route('members2')}}">संस्थापक 
</a></li>
          <li><a class="dropdown-item" href="{{route('members3')}}">व्यवस्थापन समिति 
</a></li>
 <li><a class="dropdown-item" href="{{route('members4')}}">सञ्चालक समिति 

</a></li>
 <li><a class="dropdown-item" href="{{route('members5')}}">परामर्श-दातृ मण्डल 

</a></li>
 <li><a class="dropdown-item" href="{{route('members6')}}">लेखा समिति

</a></li>
        </ul>
      </div>

      <!-- ✅ Proper Bootstrap 5 dropdown -->
      <div class="nav-item dropdown">
        <a href="#" class="nav-link-item dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
          विशेष दाता
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('donation1')}}">गुठियार</a></li>
          <li><a class="dropdown-item" href="{{route('donation2')}}">आजीवन अभिभावक</a></li>
          <li><a class="dropdown-item" href="{{route('donation3')}}">अन्य</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- ✅ Mobile Overlay Navigation -->
<div class="overlay-menu" id="overlayMenu">
  <button class="close-btn" id="closeOverlay" aria-label="Close menu">&times;</button>
  <a href="{{route('home')}}">गृहपृष्ठ</a>
  <a href="{{ route('aboutus') }}">हाम्रो बारेमा</a>
  <a href="{{route('history')}}">इतिहास</a>
  <a href="{{route('gallery')}}">ग्यालेरी</a>
  <a href="{{route('Program')}}">कार्यक्रमहरू</a>
  <a href="{{route('blog')}}">समाचार / ब्लग</a>
  
  <div class="mobile-dropdown">
    <a href="#" class="dropdown-toggle">पदाधिकारी ▾</a>
    <div class="dropdown-content">
        <a href="{{route('members1')}}">सम्मान्य संस्थापक
</a>
      <a href="{{route('members2')}}">संस्थापक  
</a>
      <a href="{{route('members3')}}">व्यवस्थापन समिति 
</a>
      <a href="{{route('members4')}}">सञ्चालक समिति</a>
      <a href="{{route('members5')}}">परामर्श-दातृ मण्डल</a>
      <a href="{{route('members6')}}">लेखा समिति
</a>
    </div>
  </div>

  <div class="mobile-dropdown">
    <a href="#" class="dropdown-toggle">विशेष दाता ▾</a>
    <div class="dropdown-content">
      <a href="{{route('donation1')}}">गुठियार</a>
      <a href="{{route('donation2')}}">आजीवन अभिभावक</a>
      <a href="{{route('donation3')}}">अन्य</a>
    </div>
  </div>
</div>

<style>
</style>

<script>
// ✅ Desktop: (optional) programmatic init — helps if other JS interferes
document.addEventListener('DOMContentLoaded', () => {
  if (window.bootstrap) {
    document.querySelectorAll('.dropdown-toggle[data-bs-toggle="dropdown"]').forEach(el => {
      new bootstrap.Dropdown(el);
    });
  }
});

document.addEventListener('DOMContentLoaded', () => {
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const overlayMenu  = document.getElementById('overlayMenu');
  const closeOverlay = document.getElementById('closeOverlay');

  if (!hamburgerBtn || !overlayMenu || !closeOverlay) {
    console.warn('Hamburger menu elements missing');
    return;
  }

  // Open overlay
  hamburgerBtn.addEventListener('click', () => {
    overlayMenu.classList.add('show');
    hamburgerBtn.setAttribute('aria-expanded', 'true');
  });

  // Close overlay (close button)
  closeOverlay.addEventListener('click', () => {
    overlayMenu.classList.remove('show');
    hamburgerBtn.setAttribute('aria-expanded', 'false');
  });

  // Close overlay when clicking outside links area (optional)
  overlayMenu.addEventListener('click', (e) => {
    // if user clicks the overlay background (not the inner content), close it
    if (e.target === overlayMenu) overlayMenu.classList.remove('show');
  });

  // Mobile dropdown toggles inside overlay
  document.querySelectorAll('.mobile-dropdown .dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      toggle.parentElement.classList.toggle('active');
    });
  });
});


</script>

<script>
  if (window.bootstrap) {
  document.querySelectorAll('.dropdown-toggle[data-bs-toggle="dropdown"]').forEach(el => {
    new bootstrap.Dropdown(el);
  });
}

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
