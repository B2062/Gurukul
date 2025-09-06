@extends('frontend.layouts.main')
@section('main-content')

<!-- Gallery Banner Section -->
<section class="history-banner mb-4">
   <div class="container-fluid px-0 position-relative">
        <img src="{{ asset('assets/img/Gurukul/half.jpg') }}" alt="इतिहास Section" class="img-fluid rounded w-100">
        <div class="overlay-text">ग्यालेरी</div>
    </div>
</section>

<section class="gallery-filters text-center mb-4">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-4">
            <button type="button" class="filter-btn btn active">सबै</button>
            <button type="button" class="filter-btn btn">तस्बिर</button>
            <button type="button" class="filter-btn btn">भिडियो</button>
        </div>
    </div>
</section>



<!-- Gallery Images Section -->
<section class="gallery-grid container">
    <div class="row g-3">
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider3.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider4.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider1.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider3.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider4.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider1.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
                <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider3.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider4.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <img src="{{ asset('assets/img/Gurukul/slider1.jpg') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
        </div>

        
    </div>
    <!-- Image Popup Overlay -->
<div id="image-popup" class="image-popup">
    <span class="popup-close">&times;</span>
    <img class="popup-img" src="" alt="Popup Image">
</div>
</section>
<script>
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>
<style>
    /* Popup overlay */
.image-popup {
    display: none; /* hidden by default */
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    justify-content: center;
    align-items: center;
    overflow: auto;
}

/* Popup image */
.image-popup .popup-img {
    max-width: 90%;
    max-height: 80%;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

/* Zoom on hover */
.image-popup .popup-img:hover {
    transform: scale(1.1);
}

/* Close button */
.popup-close {
    position: absolute;
    top: 20px;
    right: 30px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.popup-close:hover {
    color: goldenrod;
}

</style>

<script>
    
// Select all gallery images
const galleryImages = document.querySelectorAll('.gallery-img');
const popup = document.getElementById('image-popup');
const popupImg = document.querySelector('.popup-img');
const popupClose = document.querySelector('.popup-close');

// Open popup on image click
galleryImages.forEach(img => {
    img.addEventListener('click', () => {
        popup.style.display = 'flex';
        popupImg.src = img.src; // set clicked image
    });
});

// Close popup on close button click
popupClose.addEventListener('click', () => {
    popup.style.display = 'none';
});

// Close popup on clicking outside the image
popup.addEventListener('click', e => {
    if(e.target === popup) {
        popup.style.display = 'none';
    }
});
</script>

@endsection
