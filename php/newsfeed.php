<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwsbrief - El Houari Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <?php include_once '../includes/header.php'; ?>


  
<main>
        <section class="newsletter-section">
            <h2>Nieuwsbrief</h2>
            <p class="intro-text">
                Welkom bij de nieuwsbrief van de El Houari Foundation! Hier vind je de laatste updates en belangrijke informatie over onze projecten en evenementen.
            </p>
            
            
            <div class="news-feed" id="news-feed">
            <div class="news-feed" id="news-feed">
    <!-- Nieuwsitem 1 -->
    <div class="news-item">
        <a href="news1.php">
            <img src="../img/voetbal.png" class="news-img" alt="Afbeelding van voetbalproject">
        </a>
        <h3>Arme Gezinnen Helpen in Marokko</h3>
        <p>Samen met Dar Al Ousra bieden we ondersteuning aan kwetsbare gezinnen in Marokko.</p>
    </div>

    <!-- Nieuwsitem 2 -->
    <div class="news-item">
        <a href="news2.php">
            <img src="../img/voetbal.png" class="news-img" alt="Afbeelding van educatief project">
        </a>
        <h3>Project Voor Educatie</h3>
        <p>We zijn bezig met een nieuw educatief project voor kinderen in Marokko.</p>
    </div>

    <!-- Nieuwsitem 3 -->
    <div class="news-item">
        <a href="news3.php">
            <img src="../img/voetbal.png" class="news-img" alt="Afbeelding van voedselhulp">
        </a>
        <h3>Voedselhulp in de Winter</h3>
        <p>Onze organisatie verstrekt voedselpakketten aan behoeftigen in de winterperiode.</p>
    </div>
</div>

            </div>
        </section>
    </main>


    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>

    <script src="../js/scrollToTop.js"></script>


</body>

</html>