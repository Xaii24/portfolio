let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    const isMobile = window.innerWidth <= 425;

    if (isMobile) {
        // Mobile: Show 1 slide at a time
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }

        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === currentSlide) {
                slide.classList.add('active');
            }
        });

        const sliderContainer = document.querySelector('.slider-container');
        sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
    } else {
        // Desktop: Show 3 slides at a time
        if (index + 3 > slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = Math.max(0, slides.length - 3);
        } else {
            currentSlide = index;
        }

        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i >= currentSlide && i < currentSlide + 3) {
                slide.classList.add('active');
            }
        });

        const sliderContainer = document.querySelector('.slider-container');
        sliderContainer.style.transform = `translateX(-${
            (currentSlide * 100) / 3
        }%)`;
    }
}

function moveSlide(direction) {
    currentSlide += direction;
    showSlide(currentSlide);
}

// Listen for window resize and adjust slides accordingly
window.addEventListener('resize', () => showSlide(currentSlide));

// Initialize
showSlide(currentSlide);
