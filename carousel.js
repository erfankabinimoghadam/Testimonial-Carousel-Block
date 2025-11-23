/**
 * Vanilla JS Carousel
 * ------------------
 * Controls sliding between content blocks with fade animation.
 * Handles desktop and mobile arrows, prevents rapid clicks.
 */

document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;
    let isTransitioning = false;

    if (totalSlides <= 1) {
        document.querySelectorAll('.carousel-arrow-left, .carousel-arrow-right')
            .forEach(el => el.style.display = 'none');
        return;
    }

    function switchSlide(nextIndex) {
        if (isTransitioning) return;
        isTransitioning = true;

        const currentSlide = slides[currentIndex];
        const nextSlide = slides[nextIndex];

        currentSlide.style.transition = 'opacity 0.3s ease-in-out';
        currentSlide.style.opacity = '0';

        setTimeout(() => {
            currentSlide.classList.add('d-none');
            nextSlide.classList.remove('d-none');
            nextSlide.style.transition = 'opacity 0.3s ease-in-out';
            nextSlide.style.opacity = '0';

            setTimeout(() => {
                nextSlide.style.opacity = '1';
                setTimeout(() => { isTransitioning = false; }, 300);
            }, 10);
        }, 300);

        currentIndex = nextIndex;
    }

    function setupArrowListeners() {
        const leftArrows = document.querySelectorAll('.carousel-arrow-left');
        const rightArrows = document.querySelectorAll('.carousel-arrow-right');

        rightArrows.forEach(arrow => arrow.addEventListener('click', () => {
            if (!isTransitioning) switchSlide((currentIndex + 1) % totalSlides);
        }));

        leftArrows.forEach(arrow => arrow.addEventListener('click', () => {
            if (!isTransitioning) switchSlide((currentIndex - 1 + totalSlides) % totalSlides);
        }));
    }

    slides.forEach((slide, index) => slide.style.opacity = index === 0 ? '1' : '0');
    setupArrowListeners();
});
