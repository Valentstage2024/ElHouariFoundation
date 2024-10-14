<?php
$apiUrl = "http://api.aladhan.com/v1/timingsByCity?city=Amersfoort&country=Netherlands&method=2";
$prayerTimesJson = file_get_contents($apiUrl);
$prayerTimesArray = json_decode($prayerTimesJson, true);

if ($prayerTimesArray && $prayerTimesArray['code'] == 200) {
    $timings = $prayerTimesArray['data']['timings'];
    $fajr = $timings['Fajr'];
    $dhuhr = $timings['Dhuhr'];
    $asr = $timings['Asr'];
    $maghrib = $timings['Maghrib'];
    $isha = $timings['Isha'];
} else {
    $fajr = "N/A";
    $dhuhr = "N/A";
    $asr = "N/A";
    $maghrib = "N/A";
    $isha = "N/A";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - El Houari Foundation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   
</head>
<body>

<header>
    <div class="logo">
        <a href="php/login.php">
            <img src="img/logo.png" alt="Logo" class="logo">
        </a>
    </div>
    <button class="menu-toggle" aria-label="Open Menu">&#9776;</button>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>El Houari Foundation</h2>
            <p>Bij ons gaat het om geven, delen en helpen.</p>
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
                
        </div>
        <div class="footer-section footer-legal">
            <a href="php/privacy.php">Privacy Policy</a>
            <a href="php/voorwaarden.php">Algemene Voorwaarden</a>
            <a href="php/missievisie.php">Missie & Visie</a>
            <a href="php/newsfeed.php">Nieuwsfeed</a>

        </div>
        <div class="footer-section footer-contact">
            <p>Contact: 06-50405030</p>
            <p>info@elhouarifoundation.nl</p>
            <p>www.elhouarifoundation.nl</p>
        </div>
        <div class="footer-section footer-prayer-times">
        
            <p>Fajr: <span id="fajr-time"></span></p>
            <p>Dhuhr: <span id="dhuhr-time"></span></p>
            <p>Asr: <span id="asr-time"></span></p>
            <p>Maghrib: <span id="maghrib-time"></span></p>
            <p>Isha: <span id="isha-time"></span></p>
            <p>Volgende gebed in: <span id="countdown"></span></p>
        </div>
        <div class="footer-section footer-socials">
            <a href="https://www.instagram.com" target="_blank">
            <i class="fab fa-instagram social-icon"></i>
            </a>
            <a href="https://www.tiktok.com" target="_blank">
            <i class="fab fa-tiktok social-icon"></i>
            </a>
            <a href="https://www.youtube.com" target="_blank">
            <i class="fab fa-youtube social-icon"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
            <i class="fab fa-facebook social-icon"></i>
            </a>
        </div>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2024 Elhouari Foundation. All rights reserved.</p>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop">naar boven</button>

<script src="js/hamburgerMenu.js"></script>
<script src="js/scrollToTop.js"></script>
<script src="js/prayerTimes.js"></script>

</body>
</html>