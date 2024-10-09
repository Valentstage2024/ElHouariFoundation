// Scroll to top button
const backToTopButton = document.getElementById('backToTop');

window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = "block"; // Show the button
    } else {
        backToTopButton.style.display = "none"; // Hide the button
    }
};

backToTopButton.onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'}); // Smooth scroll to the top
};
