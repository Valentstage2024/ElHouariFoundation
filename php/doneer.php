<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donatiepagina - El Houari Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    

    <?php include_once '../includes/header.php'; ?>
    <section class="heropagina">
        <div class="overlay"></div>
        <div class="hero-text">
            <h2>Donatie</h2>
            <br>
            <p> Elke donatie helpt ons om essentiële hulp te bieden.   </p>
        </div>
    </section>


    <div class="donatie-achtergrond">
        <div class="donatie-container">
            <br>
            <div class="donatie donatie--1">
                <h1>Mijn Donatie</h1>
                <br>
                <p>Samen kunnen we helpen armoede te bestrijden! Doneer en steun ons bij het helpen van gezinnen in
                    nood.
                </p>
                <br>
                <p><strong>De gelijkenis van wie hun rijkdommen besteden op de Weg van Allah is als die van een zaadje
                        dat
                        zeven aren voortbrengt...
                    </strong>
                    
                </p>
            </div>
            <div class="doneer">
                <div class="donatie donatie--2">

                    <form method="post" class="donation-form">
                        <label for="naam">Voornaam*</label>
                        <input type="text" id="voornaam" name="voornaam" required>

                        <label for="bedrijfsnaam">Achternaam*</label>
                        <input type="text" id="achternaam" name="achternaam" required>

                        <label for="email">E-mailadres*</label>
                        <input type="email" id="email" name="email" required>

                        <label for="telefoonnummer">Telefoonnummer</label>
                        <input type="tel" id="telefoonnummer" name="telefoonnummer">

                        <label for="bedrag">Bedrag*</label>
                        <input type="number" id="bedrag" name="bedrag" required>

                        <label>Betaalmethode</label>
                        <div class="radio-buttons">
                            <img src="../img/ideal_logo.png" alt="iDeal">

                        </div>

                        <button type="submit">Doneren</button>
                    </form>
                </div>

                <div class="donatie donatie--3">
                    <aside>
                        <h3>Maak je liever direct over?</h3>
                        <br>
                        <p><strong>Scan onze QR-code!</strong></p>
                    </aside>

                    <img src="https://placehold.co/600x500">
                </div>
            </div>
        </div>
    </div>

    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>

    <script src="../js/scrollToTop.js"></script>


</body>

</html>