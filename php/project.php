<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecten - Elhouri Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    
    <?php include_once '../includes/header.php'; ?>

    <!-- Hero section -->
    <section class="heropagina">
        <div class="overlay"></div>
        <div class="hero-text">
            <h2>Onze projecten</h2>
            <p>We werken momenteel aan nieuwe projecten die binnenkort beschikbaar zullen zijn. Houd deze pagina in de gaten voor updates.</p>
        </div>
    </section>

    <!-- Main content -->
    <main>
        <br>
        <br>
        <br>

        <!-- Projects grid -->
        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <a href="project1.php" class="project-link">
                    <img src="https://images.gofundme.com/o6la6u9oj-YohGO5E-L3c1_ZqZI=/1200x900/https://d2g8igdw686xgo.cloudfront.net/79224099_1711886119835859_r.png" class="project-image" alt="Waterputten realiseren">
                    <h3>Waterputten realiseren</h3>
                    <p>Wij hebben onlangs verschillende waterputten gerealiseerd in armere landen.</p>
                </a>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <a href="liefpakket.php" class="project-link">
                    <img src="../img/liefpakket.png" class="project-image" alt="Liefdadigheidspakketten voor behoeftigen">
                    <h3>Liefdadigheidspakketten voor behoeftigen</h3>
                    <p>Afgelopen september hebben wij de inzamelingsactie “Steun Marokko” opgezet om slachtoffers van de hevige aardbeving te helpen.</p>
                </a>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <a href="islambegraafplaats.php" class="project-link">
                    <img src="https://www.bibin.nl/wp-content/uploads/2020/11/bib-5.jpg" class="project-image" alt="Ondersteunings islamitische begraafplaats">
                    <h3>Ondersteuning islamitische begraafplaats</h3>
                    <p>El Houari Foundation speelt een cruciale rol in de ondersteuning van BIBIN door zich in te zetten voor de instandhouding en ontwikkeling van de islamitische begraafplaats.</p>
                </a>
            </div>
        </div>
    </main>

    <br>
    <br>
    <br>

    <!-- Footer -->
    <?php include_once '../includes/footer.php'; ?>

    <!-- Back to top button -->
    <button id="backToTop">naar boven</button>
    
    <!-- Script for scrolling to top -->
    <script src="../js/scrollToTop.js"></script>
</body>

</html>
