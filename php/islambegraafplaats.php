<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 3 - Islamitische Begraafplaats </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include_once '../includes/header.php'; ?>

    <main>

        <main>
            <main>
                <section class="project-detail">
                    <h1> Ondersteuning </h1>
                    <h1>Islamitiche begraafplaats</h1>
                </section>
            </main>


            <div class="project-content">

                <div>
                    <img src="https://www.bibin.nl/wp-content/uploads/2020/11/bib-5.jpg" alt=" gestuurd " class="detail-image" width="450px" height="auto">

                </div>

                <div class="sponsor-section">
                    <h2>Samenwerkingspartners</h2>
                    <ul class="sponsor-list">
                        <li>


                            <a href="https://www.bibin.nl/" target="_blank">
                                <img src="https://www.bibin.nl/wp-content/uploads/2020/04/logo_new3.jpg" alt="Sponsor 3">
                            </a>
                        </li>


                        <li>

                </div>
            </div>

            </section>
        </main>

        <div class="fundraising-info">
            <h3>Inzamelingsresultaten</h3>
            <div class="fundraising-details">
                <div class="fundraising-item">
                    <strong>Inzameling:</strong>
                    <span class="amount">€1910</span>
                </div>
                <div class="fundraising-item">
                    <strong>Doel:</strong>
                    <span class="goal">€10000</span>
                </div>
            </div>
            <div class="progress-bar">
                <div class="progress" style="width: 20%;"></div>
            </div>

            <br>
            <br>

            <div class="project-info">

                <h2>Projectinformatie</h2>
                <br>
                <ul>
                    <li><strong>Locatie:</strong> Annerweg 27a, 9471 KT, Zuidlaren</li>
                    <li><strong>Samenwerkingspartners:</strong> Gemeenschappen, islamitische organisaties</li>
                    <li><strong>Begunstigden:</strong> De begunstigden van dit project zijn moslims uit onze gemeenschap in Nederland .


                    <li><strong>SDG's:</strong> SDG 11 - Duurzame Steden en Gemeenschappen, SDG 16 - Vrede, Justitie en Sterke Instellingen</li>
                    <li><strong>Doel:</strong> Het opzetten en onderhouden van een respectvolle, duurzame islamitische begraafplaats voor de gemeenschap.</li>
                </ul>

            </div>

            </ul>
        </div>
        <div class="project-updates">
            <h2>Projectupdates</h2>
            <br>
            <p>El Houari Foundation speelt een cruciale rol in de ondersteuning van BIBIN door zich in te zetten voor de instandhouding en ontwikkeling van de islamitische begraafplaats. Met een diepgaand begrip van de culturele en spirituele betekenis van deze plek, werkt de stichting samen met lokale gemeenschappen en partners om ervoor te zorgen dat de begraafplaats niet alleen een rustplaats is, maar ook een plek van herinnering en respect voor de overledenen.</p>
            <p>De stichting biedt de nodige middelen en expertise om de begraafplaats te onderhouden, inclusief het organiseren van schoonmaakacties, het verzorgen van het groen en het verbeteren van de infrastructuur. Bovendien zet de El Houari Foundation zich in voor educatieve initiatieven die de lokale bevolking bewust maken van het belang van de begraafplaats en de rol die deze speelt in de gemeenschap.</p>
            <p>Door deze samenwerking met BIBIN hoopt de El Houari Foundation niet alleen de fysieke staat van de begraafplaats te verbeteren, maar ook de sociale cohesie in de gemeenschap te versterken en de culturele identiteit van de islamitische gemeenschap te behouden.</p>
        </div>
        </div>
        <div class="community-involvement">
            <h2>Gemeenschapsdeelname</h2>
            <br>
            <p> Moge Allah swt alle donateurs rijkelijk belonen Allahouma ameen!</p>
        </div>
        <a href="../php/project.php" class="terug-button">Terug naar Projecten</a>
        <a href="../php/doneer.php" class="terug-button">Doneer nu!</a>
        </section>
    </main>


    <?php include_once '../includes/footer.php'; ?>

</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const hamburger = document.getElementById("hamburger");
        const navList = document.getElementById("nav-list");

        hamburger.addEventListener("click", function() {
            navList.classList.toggle("active"); // Toggle de 'active' class om het menu te openen/sluiten
            navList.classList.toggle("hidden"); // Toggle de 'hidden' class om de animatie toe te passen
        });
    });
</script>