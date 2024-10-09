<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Elhouri Foundation</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

<?php include_once 'header.php'; ?>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>El Houari Foundation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
    </section>

    <section class="photo-section">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="text-box left">
                <p>Dit is het linker tekstvak. Voeg hier je tekst toe.</p>
            </div>
            <img src="https://i0.wp.com/najiba.nl/wp-content/uploads/2024/04/WhatsApp-Image-2024-04-13-at-16.04.59_c09030e1.jpg?fit=768%2C768&ssl=1" alt="Main Photo" class="smaller-photo">
            <div class="text-box right">
                <p>Waterputten bouwen in Marroko zod</p>
            </div>
        </div>
    </section>

    <!-- Three Small Photos and Text -->
    <section class="small-photos-text">
        <div class="container">
            <div class="small-photo-block">
                <a href="waterput.html" class="image-button">
                    <img src="https://storage.googleapis.com/steunactie-prod/img/actions/23590/md/03cf0aa24cd13ed0e25185f3863b25ca-waterput.png?1690599076" alt="Main Photo" class="smaller-photo">
                </a>
                <h1>Waterputten in Marroko</h1>
                <p>Waterputten zijn essentieel in Marokko voor schoon drinkwater. Ze verminderen ziektes en besparen tijd. Toegang tot water ondersteunt landbouw en economie. Onderhoud en training zijn cruciaal voor duurzaamheid.<p>
            
            </div>
            <div class="small-photo-block">
                <img src="small-photo2.jpg" alt="Small Photo 2">
                <p>Text about the second image. Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="small-photo-block">
                <img src="small-photo3.jpg" alt="Small Photo 3">
                <p>Text about the third image. Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </section>

    <!-- Inline Three Photos with Text -->
    <section class="three-inline-photos">
        <div class="container">
            <div class="inline-photo">
                <img src="inline-photo1.jpg" alt="Inline Photo 1">
                <p>Description 1</p>
            </div>
            <div class="inline-photo">
                <img src="inline-photo2.jpg" alt="Inline Photo 2">
                <p>Description 2</p>
            </div>
            <div class="inline-photo">
                <img src="inline-photo3.jpg" alt="Inline Photo 3">
                <p>Description 3</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Back to Top Button -->
    <button id="backToTop">naar boven</button>

    <!-- Scroll to Top Script -->
    <script>
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
    </script>

</body>
</html>