@extends('frontend.layouts.main')
@section('main-content')

<!-- Gallery Banner Section -->
<section class="history-banner mb-4">
    <div class="container-custom position-relative">
        <img src="{{ asset('assets/img/Gurukul/half.jpg') }}" alt="इतिहास Section" class="img-fluid rounded w-100">
        <div class="overlay-text">कार्यक्रमहरू</div>
    </div>
</section>

<section class="py-5 ">
    <div class="container">
    <div class="row g-4">
        <div class="col-12 col-sm-6 col-md-4">
            <a href="{{route('program')}}" class="d-block text-decoration-none">
            <div class="image-card hover-up">
                <img src="{{ asset('assets/img/Gurukul/guru1.png')}}" alt="Guru Teaching" class="img-fluid">
                <h3 class="image-caption">पूजा–आराधना</h3>
            </a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <a href="{{route('program')}}" class="d-block text-decoration-none">
            <div class="image-card hover-up">
                <img src="{{ asset('assets/img/Gurukul/guru1.png')}}" alt="Guru Teaching" class="img-fluid">
                <h3 class="image-caption">आध्यात्मिक–प्रवचन</h3>
            </a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <a href="{{route('program')}}" class="d-block text-decoration-none">
            <div class="image-card hover-up">
                <img src="{{ asset('assets/img/Gurukul/guru1.png')}}" alt="Guru Teaching" class="img-fluid">
                <h3 class="image-caption">सन्त–सेवा</h3>
            </a>
            </div>
        </div>
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
