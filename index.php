<?php
// Gebedstijden ophalen met de API
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>


<body>
<header>
    <div class="logo">
        <a href="index.php">
            <img src="img/logo.png" alt="Logo" class="logo">
        </a>
    </div>
    <button class="menu-toggle" aria-label="Open Menu">&#9776;</button>
    <nav id="navbar">
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="php/newsfeed.php"><i class="fas fa-newspaper"></i> Nieuws</a></li>
            <li><a href="php/project.php"><i class="fas fa-briefcase"></i> Projecten</a></li>
            <li><a href="php/aboutus.php"><i class="fas fa-users"></i> Over ons</a></li>
            <li><a href="php/agenda.php"><i class="fas fa-calendar-alt"></i> Agenda</a></li>
            <li><a href="php/koran.php"><i class="fas fa-book"></i> Koran</a></li>
            <li><a href="php/doneer.php"><i class="fas fa-donate"></i> Doneer</a></li>
            <li><a href="php/contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </nav>
</header>



    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            
            <h2>El Houari Foundation</h2>
            <p>Bij ons gaat het om geven, delen en helpen.</p>
            <br>
            <br>
            <a href="php/doneer.php" class="donate-button">Doneer Nu</a>
            
        </div>
        
    </section>

    <section class="flex-container">
        <section class="text-section">
            <h2 class="section-title">Over El Houari Foundation</h2>
            <p class="section-description">
                Wij kregen de vraag waar de naam el Houari Foundation vandaan kwam. Hassan el Houari was een respectvolle, lieve en zorgzame man. Hij wou altijd de kinderen en volwassenen om zich heen gelukkig zien en stond voor iedereen klaar. Als er iemand iets nodig had dan deed hij er alles voor om dit te regelen voor deze persoon.

                Deze prachtige man is onze vader, alhamdoulilah.

                De stichting is daarom ook opgericht als nagedachte van onze vader Hassan El Houari. De stichting heeft als doel zoveel mogelijk mensen helpen met dezelfde intentie zoals onze behulpzame vader dat deed.
            </p>
            <a href="php/aboutus.php" class="read-more-button">Lees ons verhaal</a>
            <a href="php/project.php" class="indexproduct">Onze Projecten</a>
            
        </section>

        <div class="image-container">
            <img src="img/index.jpg" alt="Afbeelding van Stichting RizQ" class="imgrechts" />
        </div>
    </section>

    <!-- Footer -->
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
        <p><a href="tel:+31650405030">Contact: 06-50405030</a></p>
        <p><a href="mailto:info@elhouarifoundation.nl">info@elhouarifoundation.nl</a></p>
        <p><a href="https://www.elhouarifoundation.nl" target="_blank">www.elhouarifoundation.nl</a></p>
        </div>

        <div class="footer-section footer-prayer-times">
    <p>Fajr: <span id="fajr-time"><?php echo $fajr; ?></span></p>
    <p>Dhuhr: <span id="dhuhr-time"><?php echo $dhuhr; ?></span></p>
    <p>Asr: <span id="asr-time"><?php echo $asr; ?></span></p>
    <p>Maghrib: <span id="maghrib-time"><?php echo $maghrib; ?></span></p>
    <p>Isha: <span id="isha-time"><?php echo $isha; ?></span></p>
    <p>Volgende gebed in: <span id="countdown"></span></p>
</div>


        <div class="footer-section footer-hadith">
                <blockquote>
                    “Jullie zullen het paradijs niet binnengaan als jullie niet geloven en jullie zullen geen gelovigen zijn als jullie elkaar niet liefhebben.”
                    <cite>(Muslim, Iman, 93; Tirmidhī, Sifaat al-Qiyāma, 56.)</cite>
                </blockquote>
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


    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop">naar boven</button>

    <script src="js/hamburgerMenu.js"></script>
    <script src="js/scrollToTop.js"></script>
    <script src="js/gebedstijden.js"></script>
</body>

</html>
