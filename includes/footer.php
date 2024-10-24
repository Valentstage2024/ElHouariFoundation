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

// Footer HTML met gebedstijden
echo "
<footer>
        <div class='footer-container'>
            <div class='footer-section footer-logo'>
                <img id='a-imgfooter' src='../img/logo.png' alt='Elhouari Foundation Logo'>
            </div>
            <div class='footer-section footer-legal'>
                <a href='aboutus.php'>Over ons</a>
                <a href='project.php'>Projecten</a>
                <a href='doneer.php'>Doneren</a>
                <a href='agenda.php'>Agenda</a>
            </div>
            <div class='footer-section footer-legal'>
                <a href='privacy.php'>Privacy Policy</a>
                <a href='voorwaarden.php'>Algemene Voorwaarden</a>
                <a href='missievisie.php'>Missie & Visie</a>
                <a href='newsfeed.php'>Nieuwsfeed</a>
            </div>
            <div class='footer-section footer-contact'>
                <p><a href='tel:+31650405030'>Contact: 06-50405030</a></p>
                <p><a href='mailto:info@elhouarifoundation.nl'>info@elhouarifoundation.nl</a></p>
                <p><a href='https://www.elhouarifoundation.nl' target='_blank'>www.elhouarifoundation.nl</a></p>
            </div>

            <div class='footer-section footer-prayer-times'>
                <p>Fajr: <span id='fajr-time'>{$fajr}</span></p>
                <p>Dhuhr: <span id='dhuhr-time'>{$dhuhr}</span></p>
                <p>Asr: <span id='asr-time'>{$asr}</span></p>
                <p>Maghrib: <span id='maghrib-time'>{$maghrib}</span></p>
                <p>Isha: <span id='isha-time'>{$isha}</span></p>
                <p>Volgende gebed in: <span id='countdown'></span></p>
            </div>

            <div class='footer-section footer-hadith'>
                <blockquote>
                    “Jullie zullen het paradijs niet binnengaan als jullie niet geloven en jullie zullen geen gelovigen zijn als jullie elkaar niet liefhebben.”
                    <cite>(Muslim, Iman, 93; Tirmidhī, Sifaat al-Qiyāma, 56.)</cite>
                </blockquote>
            </div>

            <div class='footer-section footer-socials'>
                <a href='https://www.instagram.com' target='_blank'>
                    <i class='fab fa-instagram social-icon'></i>
                </a>
                <a href='https://www.tiktok.com' target='_blank'>
                    <i class='fab fa-tiktok social-icon'></i>
                </a>
                <a href='https://www.youtube.com' target='_blank'>
                    <i class='fab fa-youtube social-icon'></i>
                </a>
                <a href='https://www.facebook.com' target='_blank'>
                    <i class='fab fa-facebook social-icon'></i>
                </a>
            </div>
        </div>
        <div class='footer-copyright'>
            <p>&copy; 2024 Elhouari Foundation. All rights reserved.</p>
        </div>
</footer>";
?>
<script src="../js/gebedstijden. js"></script>