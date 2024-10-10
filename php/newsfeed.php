<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwsbrief - Elhouri Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php include_once '../includes/header.php'; ?>


    <main>
        <section class="newsletter-section">
            <h1>Nieuwsbrief</h1>
            <p class="intro-text">
                Welkom bij de nieuwsbrief van de Elhouri Foundation! Hier vind je de laatste updates en belangrijke informatie over onze projecten en evenementen.
            </p>
            <div class="news-feed" id="news-feed">
                <!-- Nieuwsitem 1 -->
                <div class="news-item">
                    <a href="news1.php">
                        <img src="../img/voetbal.png" class="news-img">
                    </a>
                    <h3>Arme Gezinnen Helpen in Marokko</h3>
                    <p>Samen met Dar Al Ousra bieden we ondersteuning aan kwetsbare gezinnen in Marokko.</p>
                </div>

                <!-- Nieuwsitem 2 -->
                <div class="news-item">
                    <a href="#">
                        <img src="https://media.istockphoto.com/id/1317323736/photo/a-view-up-into-the-trees-direction-sky.jpg?s=612x612&w=0&k=20&c=i4HYO7xhao7CkGy7Zc_8XSNX_iqG0vAwNsrH1ERmw2Q=" alt="Nieuws Item 2" class="news-img">
                    </a>
                    <h3>Gezondheidszorg voor Iedereen</h3>
                    <p>Ontdek hoe we samenwerken met lokale partners om betaalbare gezondheidszorg beschikbaar te maken in achtergestelde regio's.</p>
                </div>

                <!-- Nieuwsitem 3 -->
                <div class="news-item">
                    <a href="#">
                        <img src="https://media.istockphoto.com/id/1317323736/photo/a-view-up-into-the-trees-direction-sky.jpg?s=612x612&w=0&k=20&c=i4HYO7xhao7CkGy7Zc_8XSNX_iqG0vAwNsrH1ERmw2Q=" alt="Nieuws Item 3" class="news-img">
                    </a>
                    <h3>Waterzuiveringsproject</h3>
                    <p>Ons nieuwste project richt zich op het verbeteren van toegang tot schoon drinkwater voor landelijke gemeenschappen.</p>
                </div>
                <!-- Nieuwsitem 3 -->
                <div class="news-item">
                    <a href="#">
                        <img src="https://media.istockphoto.com/id/1317323736/photo/a-view-up-into-the-trees-direction-sky.jpg?s=612x612&w=0&k=20&c=i4HYO7xhao7CkGy7Zc_8XSNX_iqG0vAwNsrH1ERmw2Q=" alt="Nieuws Item 3" class="news-img">
                    </a>
                    <h3>Waterzuiveringsproject</h3>
                    <p>Ons nieuwste project richt zich op het verbeteren van toegang tot schoon drinkwater voor landelijke gemeenschappen.</p>
                </div>

                <!-- <div class="pagination">
                    <button id="prevPage">Vorige</button>
                    <span>Pagina 1 van 2</span> 
                    <button id="nextPage">Volgende</button>
                </div> -->

                <button id="backToTop">Naar boven</button>
            </div>
        </section>
    </main>


    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>

    <script src="../js/scrollToTop.js"></script>


</body>

</html>