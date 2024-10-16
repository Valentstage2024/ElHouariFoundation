<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecten - Elhouri Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include_once '../includes/header.php'; ?>

    <main>
        <section class="projects-section">
            <h2>Onze Projecten</h2>
            <p class="intro-text">We werken momenteel aan nieuwe projecten die binnenkort beschikbaar zullen zijn. Houd deze pagina in de gaten voor updates.</p>

            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <a href="project1.php" class="project-link">
                        <img src="https://images.gofundme.com/o6la6u9oj-YohGO5E-L3c1_ZqZI=/1200x900/https://d2g8igdw686xgo.cloudfront.net/79224099_1711886119835859_r.png" class="project-image">
                        <h3>Waterputten realiseren</h3>
                        <p>Wij hebben onlangs verschillende waterputten gerealiseerd in armere landen.</p>
                    </a>
                </div>

                <!-- Project 2 -->
                <div class="project-card">
                    <a href="liefpakket.php" class="project-link">
                        <img src="../img/liefpakket.png" class="project-image">
                        <h3>Liefdadigheidspakketten voor behoeftigen</h3>
                        <p>Afgelopen september hebben wij de inzamelingsactie “Steun Marokko” opgezet om slachtoffers van de hevige aardbeving te helpen.</p>
                    </a>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <a href="islambegraafplaats.php" class="project-link">
                        <img src="https://www.bibin.nl/wp-content/uploads/2020/11/bib-5.jpg" class="project-image">
                        <h3>Ondersteunings islamitische begraafplaats</h3>
                        <p>El Houari Foundation speelt een cruciale rol in de ondersteuning van BIBIN door zich in te zetten voor de instandhouding en ontwikkeling van de islamitische begraafplaats.</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include_once '../includes/footer.php'; ?>
    <button id="backToTop">naar boven</button>
    <script src="../js/scrollToTop.js"></script>
</body>

</html>