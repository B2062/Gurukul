@extends('frontend.layouts.main')
@section('main-content')

<!-- Gallery Banner Section -->
<section class="history-banner mb-4">
    <div class="container-custom position-relative">
        <img src="{{ asset('assets/img/Gurukul/half.jpg') }}" alt="इतिहास Section" class="img-fluid rounded w-100">
        <div class="overlay-text"> दान</div>
    </div>
</section>

<section class="py-5" style="background-color: #d28c8c;">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">सदस्य विवरण तालिका</h2>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead style="background-color: #a83232; color: white;">
                    <tr>
                        <th>क्र.संख्या</th>
                        <th>नाम</th>
                        <th>ठेगाना</th>
                        <th>दान रकम</th>
                    </tr>
                </thead>
                <tbody style="background-color:white; color: black;">
                    @for ($i = 0; $i < 7; $i++)
                    <tr>
                        <td>1</td>
                        <td>रमेश शर्मा</td>
                        <td>काठमाडौं</td>
                        <td>रु. ५०००</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
