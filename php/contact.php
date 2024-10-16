<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Ons - El Houari Foundation</title>
</head>

<body>

    <?php include_once '../includes/header.php'; ?>


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

    <form action="/submit_form" method="POST">
        <input type="text" name="first_name" placeholder="Voornaam" required>
        <input type="text" name="last_name" placeholder="Achternaam" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Telefoonnummer" required>
        <textarea name="message" rows="5" placeholder="Je vraag" required></textarea>
        <button type="submit">Verstuur vraag</button>
    </form>
</div>

    </main>


    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>

    <script src="../js/scrollToTop.js"></script>

</body>

</html>