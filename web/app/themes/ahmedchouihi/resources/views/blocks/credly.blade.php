<?php
$display = $fields['display'] ?? true;
$section_title = $fields['section_title'] ?? 'Certifications & Badges';
$section_description = $fields['section_description'] ?? 'Professional certifications and achievements earned through continuous learning and skill development.';
$credly_profile_url = $fields['credly_profile_url'] ?? 'https://www.credly.com/users/ahmed-chouihi';
$badges = $fields['badges'] ?? [];
$carousel_settings = $fields['carousel_settings'] ?? [
    'slidesToShow' => 3,
    'autoplay' => true,
    'autoplaySpeed' => 3000
];

// Generate unique ID for this carousel instance
$carousel_id = 'credly-carousel-' . uniqid();
?>

@if($display)
<section id="credly-section" class="py-16 px-4 bg-white dark:bg-gray-800">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $section_title }}</h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">{{ $section_description }}</p>
    </div>

    @if(!empty($badges))
    <div class="relative">
      <!-- Carousel Container -->
      <div id="{{ $carousel_id }}" class="credly-carousel overflow-hidden">
        <div class="flex transition-transform duration-500 ease-in-out" style="width: {{ count($badges) * (100 / $carousel_settings['slidesToShow']) }}%;">
          @foreach($badges as $badge)
          <div class="credly-slide px-4" style="width: {{ 100 / count($badges) }}%;">
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6 text-center h-full transform transition-transform duration-300 hover:scale-105">
              <div class="mb-4">
                <img src="{{ $badge['image'] ?? '' }}" 
                     alt="{{ $badge['title'] ?? 'Certification Badge' }}"
                     class="w-24 h-24 mx-auto rounded-lg object-cover shadow-md"
                     onerror="this.style.display='none'" loading="lazy">
              </div>
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2 line-clamp-2">
                {{ $badge['title'] ?? 'Certificate Title' }}
              </h3>
              <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                {{ $badge['issuer'] ?? 'Issuing Organization' }}
              </p>
              <p class="text-xs text-gray-500 dark:text-gray-400 mb-4">
                {{ $badge['issuedDate'] ?? 'Date' }}
              </p>
              @if(!empty($badge['credentialUrl']))
              <a href="{{ $badge['credentialUrl'] }}" 
                 target="_blank" 
                 rel="noopener noreferrer"
                 class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-lg transition-colors duration-200">
                View Credential
              </a>
              @endif
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Navigation Arrows -->
      @if(count($badges) > $carousel_settings['slidesToShow'])
      <button class="credly-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-white dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 text-gray-800 dark:text-white p-2 rounded-full shadow-lg transition-colors duration-200 z-10" 
              onclick="moveCredlyCarousel('{{ $carousel_id }}', -1)">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      <button class="credly-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-white dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 text-gray-800 dark:text-white p-2 rounded-full shadow-lg transition-colors duration-200 z-10" 
              onclick="moveCredlyCarousel('{{ $carousel_id }}', 1)">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
      @endif

      <!-- Dots Indicator -->
      @if(count($badges) > $carousel_settings['slidesToShow'])
      <div class="flex justify-center mt-6 space-x-2">
        @for($i = 0; $i < ceil(count($badges) / $carousel_settings['slidesToShow']); $i++)
        <button class="credly-dot w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600 hover:bg-gray-400 dark:hover:bg-gray-500 transition-colors duration-200 {{ $i === 0 ? 'bg-blue-600 dark:bg-blue-400' : '' }}"
                onclick="goToCredlySlide('{{ $carousel_id }}', {{ $i }})">
        </button>
        @endfor
      </div>
      @endif
    </div>

    <!-- View All Badges Link -->
    <div class="text-center mt-8">
      <a href="{{ $credly_profile_url }}" 
         target="_blank" 
         rel="noopener noreferrer"
         class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 transform hover:scale-105 shadow-lg">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
        </svg>
        View all badges on Credly
      </a>
    </div>
    @else
    <div class="text-center py-12">
      <div class="text-gray-400 dark:text-gray-500 mb-4">
        <svg class="w-16 h-16 mx-auto" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <p class="text-gray-600 dark:text-gray-400">No badges added yet. Add your first certification badge!</p>
    </div>
    @endif
  </div>
</section>

<!-- Carousel JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize carousel for this instance
    initCredlyCarousel('{{ $carousel_id }}', {{ $carousel_settings['slidesToShow'] }}, {{ $carousel_settings['autoplay'] ? 'true' : 'false' }}, {{ $carousel_settings['autoplaySpeed'] }});
});

// Global carousel state
window.credlyCarousels = window.credlyCarousels || {};

function initCredlyCarousel(carouselId, slidesToShow, autoplay, autoplaySpeed) {
    const carousel = document.getElementById(carouselId);
    if (!carousel) return;

    const slides = carousel.querySelectorAll('.credly-slide');
    const totalSlides = slides.length;
    const maxSlides = Math.ceil(totalSlides / slidesToShow);
    
    window.credlyCarousels[carouselId] = {
        currentSlide: 0,
        totalSlides: maxSlides,
        slidesToShow: slidesToShow,
        autoplay: autoplay,
        autoplaySpeed: autoplaySpeed,
        autoplayInterval: null
    };

    // Start autoplay if enabled
    if (autoplay && maxSlides > 1) {
        startCredlyAutoplay(carouselId);
    }

    // Pause autoplay on hover
    carousel.addEventListener('mouseenter', () => {
        if (autoplay) stopCredlyAutoplay(carouselId);
    });

    carousel.addEventListener('mouseleave', () => {
        if (autoplay) startCredlyAutoplay(carouselId);
    });
}

function moveCredlyCarousel(carouselId, direction) {
    const carousel = window.credlyCarousels[carouselId];
    if (!carousel) return;

    const newSlide = carousel.currentSlide + direction;
    
    if (newSlide >= 0 && newSlide < carousel.totalSlides) {
        carousel.currentSlide = newSlide;
        updateCredlyCarousel(carouselId);
    }
}

function goToCredlySlide(carouselId, slideIndex) {
    const carousel = window.credlyCarousels[carouselId];
    if (!carousel || slideIndex < 0 || slideIndex >= carousel.totalSlides) return;

    carousel.currentSlide = slideIndex;
    updateCredlyCarousel(carouselId);
}

function updateCredlyCarousel(carouselId) {
    const carousel = window.credlyCarousels[carouselId];
    const carouselElement = document.getElementById(carouselId);
    if (!carousel || !carouselElement) return;

    const slideWidth = 100 / carousel.totalSlides;
    const translateX = -carousel.currentSlide * slideWidth;
    
    carouselElement.querySelector('.flex').style.transform = `translateX(${translateX}%)`;

    // Update dots
    const dots = carouselElement.parentElement.querySelectorAll('.credly-dot');
    dots.forEach((dot, index) => {
        dot.classList.toggle('bg-blue-600 dark:bg-blue-400', index === carousel.currentSlide);
        dot.classList.toggle('bg-gray-300 dark:bg-gray-600', index !== carousel.currentSlide);
    });
}

function startCredlyAutoplay(carouselId) {
    const carousel = window.credlyCarousels[carouselId];
    if (!carousel || !carousel.autoplay || carousel.totalSlides <= 1) return;

    carousel.autoplayInterval = setInterval(() => {
        const nextSlide = (carousel.currentSlide + 1) % carousel.totalSlides;
        carousel.currentSlide = nextSlide;
        updateCredlyCarousel(carouselId);
    }, carousel.autoplaySpeed);
}

function stopCredlyAutoplay(carouselId) {
    const carousel = window.credlyCarousels[carouselId];
    if (!carousel || !carousel.autoplayInterval) return;

    clearInterval(carousel.autoplayInterval);
    carousel.autoplayInterval = null;
}
</script>

<style>
.credly-carousel {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.credly-carousel::-webkit-scrollbar {
    display: none;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

@media (max-width: 768px) {
    .credly-carousel .flex {
        width: {{ count($badges) * 100 }}% !important;
    }
    
    .credly-slide {
        width: {{ 100 / count($badges) }}% !important;
    }
}
</style>
@endif 