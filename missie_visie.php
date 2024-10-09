<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Missie & Visie - Elhouri Foundation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php include_once 'header.php'; ?>

    <section class="hero">
        <div class="hero-text">
            <h2>Missie & Visie</h2>
            <p>Onze drijfveer en toekomstbeeld.</p>
        </div>
    </section>

    <section class="mission">
    <h2>Onze Missie</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat.</p>
</section>

<section class="vision">
    <h2>Onze Visie</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat.</p>
</section>


<section class="call-to-action">
    <div class="container">
        <h2>Wil je helpen onze missie te ondersteunen?</h2>
        <p>Doe mee met onze inspanningen om een betere toekomst te bouwen.</p>
        <a href="contact.html" class="cta-button">Doe Mee</a>
    </div>
</section>



    <footer>
        <div class="footer-text">
            <h2>Footer Titel</h2>
            <p>Hier kun je wat tekst toevoegen voor de footer.</p>
        </div>
        
        <div class="footer-links">
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
        
        <div class="footer-photos">
            <img src="photo1.jpg" alt="Photo 1">
            <img src="photo2.jpg" alt="Photo 2">
            <img src="photo3.jpg" alt="Photo 3">
        </div>
        
        <div class="footer-copyright">
            <p>&copy; 2024 Elhouri Foundation. All rights reserved.</p>
        </div>
    </footer>

    <button id="backToTop">naar boven</button>

    <script>
        const backToTopButton = document.getElementById('backToTop');

        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };

        backToTopButton.onclick = function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        };
    </script>
</body>
</html>
