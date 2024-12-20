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

    <!-- Begin Hero Sectie -->
    <section class="news-heropagina">
        <div class="overlay"></div>
        <div class="hero-text">
            <h2>Nieuwsfeed </h2>
            <br>
            <p>Blijf op de hoogte van het nieuws</p>
            <a href="../php/doneer.php" class="aboutus-donate-button">Doneer Nu</a>
        </div>
    </section>
    <!-- Einde Hero Sectie -->

    <main>
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
             <img src="../img/samenwerkingbibin.jpg" class="news-img" alt="Afbeelding van educatief project" style="width: 330px; height: auto;">

                </a>
                <h3>Samenwerking BIBIN</h3>
                <p>Onze samenwerking stelt ons in staat om gezamenlijke oplossingen voor de mensheid.</p>
            </div>

       
        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>

    <script src="../js/scrollToTop.js"></script>

</body>

</html>
