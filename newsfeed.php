<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwsbrief - Elhouri Foundation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include_once 'header.php'; ?>

    <main>
        <section class="newsletter-section">
            <h1>Nieuwsbrief</h1>
            <p class="intro-text">
                Welkom bij de nieuwsbrief van de Elhouri Foundation! Hier vind je de laatste updates en belangrijke informatie over onze projecten en evenementen.
            </p>
            <div class="news-feed" id="news-feed">
                <!-- Hier worden de nieuwsitems toegevoegd -->
                <div class="news-item">
                    <a href="Nieuws-test.html">
                        <img src="https://www.natuurfotografie.nl/wp-content/uploads/2022/08/DSC_0990.jpg" alt="Nieuws Item 1" style="width: 750px; height: auto;">

                    </a>
                    <h3>El</h3>
                    <p>Klik op de afbeelding om meer te lezen over ons recente project.</p>
                </div>
                
                
                <button id="backToTop">naar boven</button>
               
            </div>
            <button id="load-more" onclick="loadNews()">Laad Meer Nieuws</button>
        </section>
    </main>

    <footer>
        <div class="footer-text">
            <h2>Footer Titel</h2>
            <p>Hier kun je wat tekst toevoegen voor de footer.</p>
        </div>
        
        <div class="footer-links">
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
        
        <div class="footer-photos">
            <img src="photo1.jpg" alt="Photo 1">
            <img src="photo2.jpg" alt="Photo 2">
            <img src="photo3.jpg" alt="Photo 3">
        </div>
        
        <div class="footer-copyright">
            <p>&copy; 2024 Elhouri Foundation. All rights reserved.</p>
        </div>
    </footer>


</body>
</html>

<script>
    let newsCount = 0; // Begin met 0 geladen nieuwsitems
    const maxNewsItems = 4; // Maximum aantal nieuwsitems dat kan worden geladen

    function loadNews() {
        const newsFeed = document.getElementById("news-feed");

        // Als het maximum aantal items is bereikt
        if (newsCount >= maxNewsItems) {
            alert("Geen nieuws meer om te laden!"); // Popup als er geen nieuws meer is
            return;
        }

        // Nieuwsitems array
        const newsItems = [
            {
                title: "Nieuws Item 1",
                imgSrc: "https://www.natuurfotografie.nl/wp-content/uploads/2022/08/DSC_0990.jpg",
                link: "nieuws-test.html",
                date: "8 oktober 2024",
                category: "Evenementen",
                description: "Klik op de afbeelding om meer te lezen over ons recente project.",
                extraParagraph: "Dit is een extra paragraaf met meer informatie over het nieuwsitem."
            },
            {
                title: "Nieuws Item 2",
                imgSrc: "https://www.natuurfotografie.nl/wp-content/uploads/2022/08/DSC_0990.jpg",
                link: "nieuws-test.html",
                date: "9 oktober 2024",
                category: "Nieuws",
                description: "Klik op de afbeelding om meer te lezen over ons tweede evenement.",
                extraParagraph: "Hier is wat meer tekst die uitleg geeft over dit specifieke evenement."
            },
            {
                title: "Nieuws Item 3",
                imgSrc: "https://www.natuurfotografie.nl/wp-content/uploads/2022/08/DSC_0990.jpg",
                link: "nieuws-test.html",
                date: "10 oktober 2024",
                category: "Updates",
                description: "Klik op de afbeelding om meer te lezen over ons derde evenement.",
                extraParagraph: "Dit nieuwsitem bevat belangrijke updates over ons laatste evenement."
            },
            {
                title: "Nieuws Item ",
                imgSrc: "https://www.natuurfotografie.nl/wp-content/uploads/2022/08/DSC_0990.jpg",
                link: "nieuws-test.html",
                date: "10 oktober 2024",
                category: "Updates",
                description: "Klik op de afbeelding om meer te lezen over ons derde evenement.",
                extraParagraph: "Dit nieuwsitem bevat belangrijke updates over ons laatste evenement."
            }
        
        ];

        // Voeg nieuwsitems toe totdat de limiet bereikt is
        if (newsCount < maxNewsItems) {
            const item = newsItems[newsCount];
            const newsItem = document.createElement("div");
            newsItem.className = "news-item";

            // Dynamisch de inhoud genereren
            newsItem.innerHTML = `
                <a href="${item.link}">
                    <img src="${item.imgSrc}" alt="${item.title}" style="width: 100; height: auto;">
                </a>
                <h3>${item.title}</h3>
                <p>${item.description}</p>
                <p>${item.extraParagraph}</p>
            `;

            // Voeg het nieuwsitem toe aan de nieuws-feed
            newsFeed.appendChild(newsItem);

            // Verhoog het aantal geladen nieuwsitems
            newsCount++;
        }
    }

    // Laad de eerste nieuwsitems wanneer de pagina geladen is
    window.onload = loadNews;

    // Scroll to top button functionaliteit
    const backToTopButton = document.getElementById('backToTop');

    // Laat de knop zien of verberg deze op basis van de scrollpositie
    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopButton.style.display = "block"; // Toon de knop
        } else {
            backToTopButton.style.display = "none"; // Verberg de knop
        }
    };

    // Smooth scroll naar boven bij klikken op de knop
    backToTopButton.onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>

    