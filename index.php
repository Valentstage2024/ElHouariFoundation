<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Elhouri Foundation</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>

<header>
    <div class="logo">
        <a href="php/login.php">
            <img src="img/logo.png" alt="Logo" class="logo">
        </a>
    </div>
    <nav id="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="php/newsfeed.php">Nieuws</a></li>
            <li><a href="php/project.php">Projecten</a></li>
            <li><a href="php/aboutus.php">Over ons</a></li>
            <li><a href="php/agenda.php">Agenda</a></li>
            <li><a href="php/koran.php">Koran</a></li>
            <li><a href="php/doneer.php">Doneer</a></li>
            <li><a href="php/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<script src="js/hamburgerMenu.js"></script>




    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>El Houari Foundation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
    </section>

    <section class="photo-section">
    <div class="container">
        <div class="text-box left">
            <p>Dit is het linker tekstvak. Voeg hier je tekst toe.</p>
        </div>
        <img src="https://i0.wp.com/najiba.nl/wp-content/uploads/2024/04/WhatsApp-Image-2024-04-13-at-16.04.59_c09030e1.jpg?fit=768%2C768&ssl=1" alt="Main Photo" class="smaller-photo">
        <div class="text-box right">
            <p>Waterputten bouwen in Marokko.</p>
        </div>
    </div>
</section>

<section class="small-photos-text">
    <div class="container">
        <div class="small-photo-block">
            <a href="php/project1.php" class="image-button">
                <img src="https://storage.googleapis.com/steunactie-prod/img/actions/23590/md/03cf0aa24cd13ed0e25185f3863b25ca-waterput.png?1690599076" alt="Waterputten in Marokko">
            </a>
            <h2>Waterputten in Marokko</h2>
            <p>Waterputten zijn essentieel in Marokko voor schoon drinkwater. Ze verminderen ziektes en besparen tijd. Toegang tot water ondersteunt landbouw en economie.</p>
        </div>
        <div class="small-photo-block">
            <img src="small-photo2.jpg" alt="Small Photo 2">
            <h2>Titel van de tweede foto</h2>
            <p>Text about the second image. Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="small-photo-block">
            <img src="small-photo3.jpg" alt="Small Photo 3">
            <h2>Titel van de derde foto</h2>
            <p>Text about the third image. Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
</section>

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


    <footer>
    <div class="footer-container">
        <div class="footer-section footer-logo">
            <img id="a-imgfooter" src="img/logo.png" alt="Elhouari Foundation Logo">
        </div>
        <div class="footer-section footer-legal">
                <a href="php/aboutus.php">Over ons</a>
                <a href="php/project.php">Projecten</a>
                <a href="php/doneer.php">Doneren</a>
                <a href="php/agenda.php">Agenda</a>
                <a href="php/newsfeed.php">Nieuwsfeed</a>
        </div>
        <div class="footer-section footer-legal">
            <a href="#">Disclaimer</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Algemene Voorwaarden</a>
        </div>
        <div class="footer-section footer-contact">
            <p>Contact: 06-50405030</p>
            <p>info@elhouarifoundation.nl</p>
            <p>www.elhouarifoundation.nl</p>
        </div>
        <div class="footer-section footer-socials">
            <a href="https://www.instagram.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="Instagram" class="social-icon">
            </a>
            <a href="https://www.tiktok.com" target="_blank">
                <img src="https://cdn.pixabay.com/photo/2021/01/30/06/42/tiktok-5962992_1280.png" alt="TikTok" class="social-icon">
            </a>
        </div>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2024 Elhouari Foundation. All rights reserved.</p>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop">naar boven</button>

<script src="js/scrollToTop.js"></script>
<script src="js/hamburger.js"></script>

</body>
</html>