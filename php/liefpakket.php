<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2 - Liefdadigheidspakketen</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include_once '../includes/header.php'; ?>

    <main>
        <section class="project-detail">
            <h1>Liefdadigheidspakketen</h1>
        </section>

        <div class="project-content">
            <div>
                <img src="https://scontent-ams2-1.xx.fbcdn.net/v/t39.30808-6/417691151_814363024070940_3487350996679660474_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_ohc=KjrUzVNjCmcQ7kNvgHXiKzn&_nc_ht=scontent-ams2-1.xx&_nc_gid=AhBwngdstmiIPZR-a4y1ILw&oh=00_AYDKyfNL9ALlTkkwQkMNgOuyikLpDMR1tH9j67gySc_rBA&oe=670D64AB" alt="Liefdadigheidspakketen" width="400" style="margin-left: 0px;">
            </div>

            <div class="sponsor-section">
                <h2>Samenwerkingspartners</h2>
                <ul class="sponsor-list">
                    <li>
                        <a href="https://www.stichtingrizq.nl/" target="_blank">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVIPD-lamTOPAU1TBGaf8tSPdY8Z-LJKzLBQ&s" alt="Sponsor">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="fundraising-info">
            <h3>Inzamelingsresultaten</h3>
            <div class="fundraising-details">
                <div class="fundraising-item">
                    <strong>Inzameling:</strong>
                    <span class="amount">€2250</span>
                </div>
                <div class="fundraising-item">
                    <strong>Doel:</strong>
                    <span class="goal">€10000</span>
                </div>
            </div>
            <div class="progress-bar">
                <div class="progress" style="width: 20%;"></div>
            </div>
        </div>

        <div class="project-description">
            <h2>Project Beschrijving</h2>
            <p>Afgelopen september hebben wij de inzamelingsactie “Steun Marokko” opgezet om slachtoffers van de hevige aardbeving te helpen. In totaal is er maar liefst €2250 opgehaald, alhamdoulillah!</p>
            <p>De wens was om vanuit de organisatie zelf naar het gebied toe te gaan, maar helaas was dat toch geen mogelijkheid. Daarom zijn wij gaan kijken naar een betrouwbare partner en kwamen natuurlijk uit bij Stichting Rizq!</p>
            <p>Stichting Rizq heeft meerdere kampen opgezet in de rampgebieden en acute hulp geleverd. Aankomende ramadan zullen daar voedselpakketten uitgedeeld worden aan de behoeftigen. Deze voedselpakketten zijn ter waarde van €100 en bevatten houdbaar voedsel zoals pasta, rijst en olie.</p>
        </div>

        <div class="project-info">
            <h2>Projectinformatie</h2>
            <ul>
                <li><strong>Locatie:</strong> Getroffen gebieden in Marokko</li>
                <li><strong>Startdatum:</strong> September 2023</li>
                <li><strong>Verwachte Einddatum:</strong> Oktober 2023</li>
                <li><strong>Status:</strong> Succesvol Afgerond</li>
                <li><strong>Projectleider:</strong> Abdelouhed El Houari</li>
                <li><strong>Samenwerkingspartners:</strong> Lokale NGO's, dorpsgemeenschappen</li>
                <li><strong>Begunstigden:</strong> 22 gezinnen</li>
                <li><strong>Impactgebied:</strong> Getroffen plekken in Marokko, Noord-Afrika</li>
                <li><strong>SDG's:</strong> SDG 2 - Geen honger</li>
            </ul>
        </div>

        <div class="project-updates">
            <h2>Projectupdates</h2>
            <p>Dankzij jullie steun kunnen wij 22 gezinnen voorzien van een voedselpakket! Moge Allah swt alle donateurs rijkelijk belonen en moge Allah swt het vergemakkelijken voor de mensen in de getroffen gebieden. Allahouma ameen!</p>
        </div>

        <div class="community-involvement">
            <h2>Gemeenschapsdeelname</h2>
            <p>De wens was om vanuit de organisatie zelf naar het gebied toe te gaan, maar helaas was dat niet mogelijk. Daarom hebben wij Stichting Rizq als betrouwbare partner gekozen!</p>
        </div>

        <a href="../php/project.php" class="terug-button">Terug naar Projecten</a>
    </main>

    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>
    <script src="../js/scrollToTop.js"></script>

</body>

</html>