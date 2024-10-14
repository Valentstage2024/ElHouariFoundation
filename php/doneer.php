<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donatiepagina - El Houari Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include_once '../includes/header.php'; ?>


    <div class="donatie-achtergrond">
        <div class="donatie-container">
            <div class="donatie donatie--1">
                <h1>Mijn Donatie</h1>
                <br>
                <p>Samen kunnen we helpen armoede te bestrijden! Doneer en steun ons bij het helpen van gezinnen in
                    nood.
                </p>
                <p><strong>De gelijkenis van wie hun rijkdommen besteden op de Weg van Allah is als die van een zaadje
                        dat
                        zeven aren voortbrengt...
                    </strong>
                </p>
            </div>
            <div class="doneer">
                <div class="donatie donatie--2">

                    <form action="verwerk_donatie.php" method="post" class="donation-form">
                        <label for="naam">Naam*</label>
                        <input type="text" id="naam" name="naam" required>

                        <label for="bedrijfsnaam">Bedrijfsnaam</label>
                        <input type="text" id="bedrijfsnaam" name="bedrijfsnaam">

                        <label for="email">E-mailadres*</label>
                        <input type="email" id="email" name="email" required>

                        <label for="telefoonnummer">Telefoonnummer</label>
                        <input type="tel" id="telefoonnummer" name="telefoonnummer">

                        <label for="project">Project</label>
                        <select id="project" name="project">
                            <option value="algemeen">Algemene donatie</option>
                            <option value="gezinnen_helpen">Gezinnen helpen</option>
                            <option value="onderwijs_steunen">Onderwijs steunen</option>
                        </select>

                        <label for="valuta">Valuta*</label>
                        <select id="valuta" name="valuta">
                            <option value="eur">EUR (€)</option>
                            <option value="usd">USD ($)</option>
                        </select>

                        <label for="bedrag">Bedrag (€)*</label>
                        <input type="number" id="bedrag" name="bedrag" required>

                        <label>Betaalmethode</label>
                        <div class="radio-buttons">
                            <input type="radio" id="ideal" name="betaalmethode" value="ideal" checked>
                            <label for="ideal">iDEAL</label>

                            <input type="radio" id="overboeking" name="betaalmethode" value="overboeking">
                            <label for="overboeking">Overboeking</label>

                            <input type="radio" id="bancontact" name="betaalmethode" value="bancontact">
                            <label for="bancontact">Bancontact</label>
                        </div>

                        <button type="submit">Doneren</button>
                    </form>
                </div>

                <div class="donatie donatie--3">
                    <aside>
                        <h3>Maak je liever direct over?</h3>
                        <p>Je kunt je donatie ook direct overmaken naar:</p>
                        <p><strong>IBAN NLXX XXXX XXXX</strong> t.n.v. Elhouari Foundation.</p>
                    </aside>

                    <img src="../img/kinderen.png">
                </div>
            </div>
        </div>
    </div>

    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>

    <script src="../js/scrollToTop.js"></script>


</body>

</html>