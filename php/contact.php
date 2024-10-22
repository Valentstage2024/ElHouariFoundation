<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <title>Contact Ons - El Houari Foundation</title>
</head>

<body>

    <?php include_once '../includes/header.php'; ?>
    <!-- Hero section -->
    <section class="heropagina">
        <div class="overlay"></div>
        <div class="hero-text">
            <h2>Contact</h2>
            <p>Heeft u vragen over onze projecten of wilt u meer weten over hoe u kunt helpen? Neem gerust contact met ons op. </p>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="contact-info">
                <div>
                    <img class="contact-logo" src="Logo wit.png" alt="">
                </div>
                <div class="contact-info-container">
                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>06-50405030
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@elhouarifoundation.nl">info@elhouarifoundation.nl</a>
                        </li>
                        <li>
                            <i class="fa fa-globe"></i>
                            <a href="http://www.elhouarifoundation.nl">www.elhouarifoundation.nl</a>
                        </li>
                    </ul>
                    <div class="social-icons">
                        <a href="https://www.tiktok.com" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Heb je een vraag?</h2>
                <p>Als je vragen hebt over onze projecten, evenementen of hoe je ons kunt steunen, kun je via het
                    onderstaande formulier contact met ons opnemen. We beantwoorden je vraag graag zo snel mogelijk!</p>

                <form action="mailto:stagevalent2024@gmail.com" method="POST" enctype="text/plain">
                    <input type="text" name="first_name" placeholder="Voornaam" required>
                    <input type="text" name="last_name" placeholder="Achternaam" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="phone" placeholder="Telefoonnummer" required>
                    <textarea name="message" rows="5" placeholder="Je vraag" required></textarea>
                    <button type="submit">Verstuur vraag</button>
                </form>
            </div>

        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>

    <script src="../js/scrollToTop.js"></script>

</body>

</html>
