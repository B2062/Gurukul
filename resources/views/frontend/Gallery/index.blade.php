@extends('frontend.layouts.main')
@section('main-content')

<!-- Gallery Banner Section -->
<section class="history-banner mb-4">
    <div class="container-custom position-relative">
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
    
</section>
<script>
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>


@endsection
