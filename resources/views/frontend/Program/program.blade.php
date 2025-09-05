@extends('frontend.layouts.main')
@section('main-content')

<!-- Gallery Banner Section -->
<section class="history-banner mb-4">
    <div class="container-custom position-relative">
        <img src="{{ asset('assets/img/Gurukul/half.jpg') }}" alt="इतिहास Section" class="img-fluid rounded w-100">
        <div class="overlay-text">कार्यक्रमहरू</div>
    </div>
</section>
<section class="program-hero py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            {{-- Image --}}
            <div class="col-lg-8">
                <div class="program-hero-img-wrapper ratio ratio-21x9">
                    <img src="{{ asset('assets/img/Gurukul/guru1.png') }}"
                         alt="गुरुकुल कार्यक्रम" class="program-hero-img rounded">
                </div>
            </div>

            {{-- Event Info Card --}}
            <div class="col-lg-4">
                <div class="program-info-card p-4">
                    <h5 class="program-info-title mb-4">
                        कार्यक्रम जानकारी
                    </h5>

                    <div class="info-row">
                        <span class="info-label">मिति:</span>
                        <span class="info-value">०७–मार्च–२०१८</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">समय:</span>
                        <span class="info-value">०५:५६ – ०१:४६</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">स्थान:</span>
                        <span class="info-value">Sint distinctio Ist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Overview copy --}}
<section class="program-overview pb-5">
    <div class="container">
        <h2 class="program-overview-heading mb-3">कार्यक्रम Overview</h2>

        {{-- Main description (your previous text moved here) --}}
        <p class="program-overview-body">
            परमानन्द वैदिक गुरुकुल एक धार्मिक तथा शैक्षिक संस्था हो जसको उद्देश्य वैदिक शिक्षा, संस्कृति,
            र सनातन धर्मको संरक्षण तथा प्रवर्द्धन गर्नु हो । यहाँ विद्यार्थीहरूलाई वेद, संस्कृत, योग, ध्यान,
            र नैतिक शिक्षाको माध्यमबाट आध्यात्मिक र शारीरिक विकास गराइन्छ । गुरुकुल परम्परालाई आधुनिक शिक्षासँग
            समायोजन गर्दै संस्कारयुक्त जीवनको आधार प्रदान गर्ने यस संस्थाको मूल उद्देश्य हो ।परमानन्द वैदिक गुरुकुल एक धार्मिक तथा शैक्षिक संस्था हो जसको उद्देश्य वैदिक शिक्षा, संस्कृति,
            र सनातन धर्मको संरक्षण तथा प्रवर्द्धन गर्नु हो । यहाँ विद्यार्थीहरूलाई वेद, संस्कृत, योग, ध्यान,
            र नैतिक शिक्षाको माध्यमबाट आध्यात्मिक र शारीरिक विकास गराइन्छ । गुरुकुल परम्परालाई आधुनिक शिक्षासँग
            समायोजन गर्दै संस्कारयुक्त जीवनको आधार प्रदान गर्ने यस संस्थाको मूल उद्देश्य हो ।
        </p>
    </div>
</section>

<style>
.program-hero {
    background-color: #D1811B;
}
.program-hero-img-wrapper {
    overflow: hidden;
}
.program-hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.program-info-card {
    background: white;
    border-radius: .5rem;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
    border: 1px solid rgba(0,0,0,.05);
}

.program-info-title {
    position: relative;
    font-weight: 600;
    font-size: 1.25rem;
    padding-left: .75rem;
    margin-bottom: 1.25rem !important;
}
.program-info-title::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0.25rem;
    bottom: 0.25rem;
    width: 3px;
    background: #c48480; /* accent color */
    border-radius: 2px;
}

.program-info-card .info-row {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    padding: .75rem 0;
    border-top: 1px solid #e5e5e5;
    font-size: 1.5rem;
    line-height: 1.2;
}
.program-info-card .info-row:first-of-type {
    border-top: none;
    padding-top: 0;
}

.program-info-card .info-label {
    font-weight: 800;
    color: #444;
    white-space: nowrap;
}
.program-info-card .info-value {
    color: #555;
    text-align: right;
    flex: 1;
}
/* Overview Section */
.program-overview-heading {
    font-size: clamp(2rem, 3vw, 2.75rem); /* Bigger heading */
    font-weight: 700;
    margin-bottom: 1rem;
    color: #111;
}

.program-overview-lead {
    font-size: 1.125rem;
    font-weight: 500;
    color: #666;
    margin-bottom: 1.25rem;
}

.program-overview-body {
    font-size: 1.5rem;
    line-height: 1.75;
    color: #333;
    max-width: 65ch;
}

/* Info Card */
.program-info-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: #222;
}

.program-info-card .info-label {
    font-size: 1.25rem;  /* Increased from 1rem */
    font-weight: 700;
    color: #444;
}

.program-info-card .info-value {
    font-size: 1.25rem;  /* Increased from 1rem */
    font-weight: 600;
    color: #222;
}

/* Optional: Spacing between info rows */
.program-info-card .info-row {
    padding: 1rem 0;
    border-top: 1px solid #eee;
}
.program-info-card .info-row:first-of-type {
    border-top: none;
}

/* Responsive touch-ups */
@media (max-width: 991.98px) {
    .program-info-card {
        margin-top: 1rem;
    }
    .program-info-card .info-row {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }
    .program-info-card .info-value {
        text-align: left;
    }
}

</style>
@endsection
