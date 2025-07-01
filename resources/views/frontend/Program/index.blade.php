@extends('frontend.layouts.main')
@section('main-content')

<!-- Gallery Banner Section -->
<section class="history-banner mb-4">
    <div class="container-custom position-relative">
        <img src="{{ asset('assets/img/Gurukul/half.jpg') }}" alt="इतिहास Section" class="img-fluid rounded w-100">
        <div class="overlay-text">कार्यक्रमहरू</div>
    </div>
</section>



<!-- Gallery Images Section -->
<section class="gallery-grid container">
    <div class="row g-3">
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <a href="{{route('program')}}" class="d-block text-decoration-none">
                <img src="{{ asset('assets/img/Gurukul/guru1.png') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
                <div class="text">पूजा–आराधना</div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <a href="https://example.com/adhyatmik" class="d-block text-decoration-none">
                <img src="{{ asset('assets/img/Gurukul/guru1.png') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
                <div class="text">आध्यात्मिक–प्रवचन</div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-item">
            <a href="https://example.com/sant-sewa" class="d-block text-decoration-none">
                <img src="{{ asset('assets/img/Gurukul/guru1.png') }}" class="gallery-img img-fluid rounded w-100" alt="Image 1">
                <div class="text">सन्त–सेवा</div>
            </a>
        </div>
    </div>
</section>

<style>
    .text{
        text-align:center;
        font-size:15px;
        color:black;
    }
</style>
@endsection
