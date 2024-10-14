document.querySelector('.menu-toggle').addEventListener('click', function() {
    const navbar = document.getElementById('navbar');
    
    if (navbar.classList.contains('open')) {
        // Menu sluiten
        navbar.classList.remove('open');
        navbar.classList.add('closing');
        
        // Verwijder de closing class na de animatie
        setTimeout(() => {
            navbar.classList.remove('closing');
        }, 300); // 300ms is de duur van de animatie
    } else {
        // Menu openen
        navbar.classList.remove('closing'); // Verwijder closing class bij het openen
        navbar.classList.add('open');
    }
});
