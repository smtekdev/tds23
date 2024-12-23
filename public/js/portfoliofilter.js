let currentIndex = 0;
let images = [];
let lightbox = document.getElementById('lightbox');
let lightboxImg = document.getElementById('lightbox-img');

window.onload = function() {
    filterPortfolio('graphic'); // Show the first tab by default
};

function filterPortfolio(category) {
    const items = document.getElementsByClassName('portfolio-item');
    for (let i = 0; i < items.length; i++) {
        if (items[i].classList.contains(category) || category === 'all') {
            items[i].style.display = 'block';
        } else {
            items[i].style.display = 'none';
        }
    }

    // Update the active button
    const buttons = document.querySelectorAll('.portfolio-menu button');
    buttons.forEach(button => button.classList.remove('active'));
    document.querySelector(`.portfolio-menu button[onclick="filterPortfolio('${category}')"]`).classList.add('active');
}

function openLightbox(src) {
    images = Array.from(document.querySelectorAll('.portfolio-item img'));
    currentIndex = images.findIndex(img => img.src === src);
    lightboxImg.src = src;
    lightbox.style.display = 'block';
}

function closeLightbox() {
    lightbox.style.display = 'none';
}

function showSlide(index) {
    if (index >= images.length) index = 0;
    if (index < 0) index = images.length - 1;
    currentIndex = index;
    lightboxImg.src = images[currentIndex].src;
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

// Close lightbox on click outside of image
lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
});
