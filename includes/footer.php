<?php
// Initialize prayer time variables with "N/A" as default
$fajr = $dhuhr = $asr = $maghrib = $isha = "N/A";

// Check if latitude and longitude are provided via GET parameters
if (isset($_GET['latitude']) && isset($_GET['longitude'])) {
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $today = date("Y-m-d"); // Get today's date in YYYY-MM-DD format

    // Build the API URL with latitude and longitude
    $apiUrl = "https://api.aladhan.com/v1/timings/$today?latitude=$latitude&longitude=$longitude&method=2";

    // Fetch prayer times from the API
    $prayerTimesJson = @file_get_contents($apiUrl);

    // Check if the API response is valid
    if ($prayerTimesJson) {
        $prayerTimesArray = json_decode($prayerTimesJson, true);

        // Ensure response has the expected data structure
        if ($prayerTimesArray && $prayerTimesArray['code'] == 200) {
            $timings = $prayerTimesArray['data']['timings'];
            $fajr = $timings['Fajr'];
            $dhuhr = $timings['Dhuhr'];
            $asr = $timings['Asr'];
            $maghrib = $timings['Maghrib'];
            $isha = $timings['Isha'];
        } else {
            echo "<p>Error: Unable to retrieve prayer times. Please try again later.</p>";
        }
    } else {
        echo "<p>Error: Failed to connect to the prayer times API.</p>";
    }
}

echo "
<footer>
    <div class='footer-container'>
        <div class='footer-section footer-logo'>
            <img id='a-imgfooter' src='../img/logo.png' alt='Elhouari Foundation Logo'>
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

        <div class='footer-section footer-hadith'>
            <blockquote>
                “Jullie zullen het paradijs niet binnengaan als jullie niet geloven en jullie zullen geen gelovigen zijn als jullie elkaar niet liefhebben.”
                <cite>(Muslim, Iman, 93; Tirmidhī, Sifaat al-Qiyāma, 56.)</cite>
            </blockquote>
        </div>

        <div class='footer-section footer-socials'>
            <a href='https://www.instagram.com/elhouarifoundation/' target='_blank'>
                <i class='fab fa-instagram social-icon'></i>
            </a>
            <a href='https://www.tiktok.com/@elhouarifoundation' target='_blank'>
                <i class='fab fa-tiktok social-icon'></i>
            </a>
            <a href='https://www.youtube.com/channel/UCdoLXRlW4tfK4yL4OYEQjaA' target='_blank'>
                <i class='fab fa-youtube social-icon'></i>
            </a>
            <a href='https://www.facebook.com/profile.php?id=61568426848799' target='_blank'>
                <i class='fab fa-facebook social-icon'></i>
            </a>
        </div>
    </div>
    <div class='footer-copyright'>
        <p>&copy; 2024 Elhouari Foundation. All rights reserved.</p>
    </div>
</footer>";
?>


<script src="../js/gebedstijden.js"></script>
