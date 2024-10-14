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

echo '<footer>
    <div class="footer-container">
        <div class="footer-section footer-logo">
            <img id="a-imgfooter" src="../img/logo.png" alt="Elhouari Foundation Logo">
        </div>
        <div class="footer-section footer-legal">
            <a href="aboutus.php">Over ons</a>
            <a href="project.php">Projecten</a>
            <a href="doneer.php">Doneren</a>
            <a href="agenda.php">Agenda</a>
            <a href="newsfeed.php">Nieuwsfeed</a>
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
        <div class="footer-section footer-prayer-times">
        
            <p>Fajr: ' . $fajr . ' <span id="fajr-time"></span></p>
            <p>Dhuhr: ' . $dhuhr . ' <span id="dhuhr-time"></span></p>
            <p>Asr: ' . $asr . ' <span id="asr-time"></span></p>
            <p>Maghrib: ' . $maghrib . ' <span id="maghrib-time"></span></p>
            <p>Isha: ' . $isha . ' <span id="isha-time"></span></p>
            <p>Volgende gebed in: <span id="countdown"></span></p>
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
</footer>';
?>

<script src="../js/prayerTimes.js"></script>