document.addEventListener("DOMContentLoaded", function () {
    const fadeElements = document.querySelectorAll('.fade-in');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optional: Stop observing once faded in if you want it to happen only once
                // observer.unobserve(entry.target); 
            }
        });
    }, observerOptions);

    fadeElements.forEach(element => {
        observer.observe(element);
    });

    const menuBtn = document.getElementById('menu-more-btn');
    const menuDetails = document.getElementById('menu-details');
    const closeBtn = document.getElementById('menu-close-btn');

    if (menuBtn && menuDetails) {
        menuBtn.addEventListener('click', function () {
            menuDetails.classList.add('open');
            menuBtn.style.display = 'none'; // Hide "and more" button
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                menuDetails.classList.remove('open');
                menuBtn.style.display = 'block'; // Show "and more" button again
                // Optional: Scroll back to menu top
                document.getElementById('menu').scrollIntoView({ behavior: 'smooth' });
            });
        }
    }
    // Vibe Slideshow
    const vibeImages = document.querySelectorAll('.vibe-img');
    let currentVibeIndex = 0;

    if (vibeImages.length > 0) {
        setInterval(() => {
            vibeImages[currentVibeIndex].classList.remove('active');
            currentVibeIndex = (currentVibeIndex + 1) % vibeImages.length;
            vibeImages[currentVibeIndex].classList.add('active');
        }, 5000); // Change image every 5 seconds
    }
});
