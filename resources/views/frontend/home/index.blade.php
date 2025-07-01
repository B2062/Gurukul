@extends('frontend.layouts.main')

@section('main-content')
<!-- Add this after your header section -->
<section class="slider-section">
    <div class="slider-container">
        <div class="slider-track">          
            <!-- Slide 1 -->
            <div class="slide">
                <img src="{{ asset('assets/img/Gurukul/slider1.jpg') }}" alt="slider1">
            </div>
            
            <!-- Slide 2 -->
            <div class="slide">
                <img src="{{ asset('assets/img/Gurukul/slider2.jpg') }}" alt="slider2">
            </div>
            
            <!-- Slide 3 -->
            <div class="slide">
                <img src="{{ asset('assets/img/Gurukul/slider3.jpg') }}" alt="slider3">
            </div>
            
            <!-- Slide 4 -->
            <div class="slide">
                <img src="{{ asset('assets/img/Gurukul/slider4.jpg') }}" alt="slider4">
            </div>
        </div>
        
        <!-- Navigation Arrows -->
        <div class="slider-nav">
            <button class="prev-btn" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
            <button class="next-btn" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
        </div>
        
        
    </div>
</section>
<!-- Gurukul Image Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Image 1 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-card hover-up">
                    <img src="{{ asset('assets/img/Gurukul/guru1.png')}}" alt="Guru Teaching" class="img-fluid rounded w-100">
                    <p class="image-caption">गुरु र शिष्यहरू</p>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-card hover-up">
                    <img src="{{ asset('assets/img/Gurukul/guru2.webp') }}" alt="Meditating Students" class="img-fluid rounded w-100">
                    <p class="image-caption">योग ध्यान अभ्यास</p>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="image-card hover-up">
                    <img src="{{ asset('assets/img/Gurukul/guru1.png') }}" alt="Ancient Gurukul" class="img-fluid rounded w-100">
                    <p class="image-caption">प्राचीन वैदिक गुरुकुल</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Gurukul Section -->
<section class="py-5" >
    <div class="container">
        <div class="row align-items-center gy-4">
            <!-- Left: Emblem + Text -->
            <div class="col-md-8 text-white"style="background-color: #de9999;">
                <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-3">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Nepal Emblem" style="width: 90px; height: auto;" class="mb-3 mb-md-0">
                    <div>
                        <h1 class="fw-bold mb-3" style="color: black;">परमानन्द वैदिक गुरुकुल</h1>
                        <p class="mb-0" style="line-height: 1.5; font-size:15px;">
                            परमानन्द वैदिक गुरुकुल एक धार्मिक तथा शैक्षिक संस्था हो जसको उद्देश्य वैदिक शिक्षा,
                            संस्कार, र सनातन धर्मको संरक्षण तथा प्रवर्द्धन गर्नु हो। यहाँ विद्यार्थीहरूलाई वेद,
                            संस्कृत, योग, ध्यान, र नैतिक शिक्षाको माध्यमबाट आध्यात्मिक र चारित्रिक विकास गराइन्छ।
                            गुरुकुल परम्परालाई आधुनिक शिक्षासँग समायोजन गर्दै संस्कारयुक्त जीवनको आधार प्रदान गर्ने
                            यस संस्थाको मूल थ्ये हो।परमानन्द वैदिक गुरुकुल एक धार्मिक तथा शैक्षिक संस्था हो जसको उद्देश्य वैदिक शिक्षा,
                            संस्कार, र सनातन धर्मको संरक्षण तथा प्रवर्द्धन गर्नु हो। यहाँ विद्यार्थीहरूलाई वेद,
                            संस्कृत, योग, ध्यान, र नैतिक शिक्षाको माध्यमबाट आध्यात्मिक र चारित्रिक विकास गराइन्छ।
                            गुरुकुल परम्परालाई आधुनिक शिक्षासँग समायोजन गर्दै संस्कारयुक्त जीवनको आधार प्रदान गर्ने
                            यस संस्थाको मूल थ्ये हो।
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right: Video Embed + Image -->
            <div class="col-md-4 text-center">
                <div class="ratio ratio-16x9 mb-3">
                    <iframe src="https://www.youtube.com/embed/Uo1r6RtI8t4" title="Promo For Gurukul" allowfullscreen></iframe>
                </div>
                <small class="d-block text-end"><a href="#" class=>View More.....</a></small>
                <img src="{{ asset('assets/img/Gurukul/paramguru.jpg') }}" alt="Yogi Image" class="img-fluid rounded-circle mt-3" style="width: 120px;">
            </div>
        </div>
    </div>
</section>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.querySelector('.slider-track');
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        
        let currentIndex = 0;
        let slideInterval;
        const slideCount = slides.length;
        
        // Set up the slider
        function setupSlider() {
            updateSliderPosition();
            startAutoSlide();
            
            // Pause auto-slide on hover
            const sliderContainer = document.querySelector('.slider-container');
            sliderContainer.addEventListener('mouseenter', pauseAutoSlide);
            sliderContainer.addEventListener('mouseleave', startAutoSlide);
        }
        
        // Update slider position
        function updateSliderPosition() {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            // Update active dot
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }
        
        // Go to specific slide
        function goToSlide(index) {
            currentIndex = (index + slideCount) % slideCount;
            updateSliderPosition();
        }
        
        // Next slide
        function nextSlide() {
            goToSlide(currentIndex + 1);
        }
        
        // Previous slide
        function prevSlide() {
            goToSlide(currentIndex - 1);
        }
        
        // Auto-slide functionality
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 5000); // Change every 5 seconds
        }
        
        function pauseAutoSlide() {
            clearInterval(slideInterval);
        }
        
        // Event listeners
        nextBtn.addEventListener('click', () => {
            pauseAutoSlide();
            nextSlide();
        });
        
        prevBtn.addEventListener('click', () => {
            pauseAutoSlide();
            prevSlide();
        });
        
        
        
        // Initialize the slider
        setupSlider();
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') {
                pauseAutoSlide();
                nextSlide();
            } else if (e.key === 'ArrowLeft') {
                pauseAutoSlide();
                prevSlide();
            }
        });
    });
</script>
@endsection
