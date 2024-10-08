<?php
include_once 'connect.php';

$query = "SELECT * FROM agenda ORDER BY date ASC";
$result = mysqli_query($conn, $query);

$events = [];
while ($row = mysqli_fetch_assoc($result)) {
    $events[] = $row;
}

$currentDate = date('Y-m-d');
$selectedEventIndex = 0;

// Zoek het evenement dat het dichtstbij de huidige datum ligt
foreach ($events as $index => $event) {
    $eventDate = date('Y-m-d', strtotime($event['date']));
    if ($eventDate >= $currentDate) {
        $selectedEventIndex = $index;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onze Agenda - Elhouri Foundation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <div class="logo">
            <a href="index.html">
                <img src="elhouarifoundation.jpeg" alt="Logo" class="logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="agenda.php">Agenda</a></li>
                <li><a href="project.html">Projecten</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>El Houari Foundation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
    </section>

    <script>
    let events = <?php echo json_encode($events); ?>;
    let currentIndex = <?php echo $selectedEventIndex; ?>;

    function updateEvent() {
        const title = document.getElementById('event-title');
        const description = document.getElementById('event-description');
        const date = document.getElementById('event-date');
        const status = document.getElementById('event-status');

        if (events.length === 0) {
            title.innerText = "Geen evenementen gevonden";
            description.innerText = "";
            date.innerText = "";
            status.innerText = "";
            return;
        }

        const event = events[currentIndex];
        const eventDate = new Date(event['date']);
        const today = new Date();

        // Normaliseer de datums door de tijdcomponent te verwijderen
        today.setHours(0, 0, 0, 0); // Zet tijd naar 00:00:00
        eventDate.setHours(0, 0, 0, 0); // Zet tijd naar 00:00:00

        title.innerText = event['title'];
        description.innerText = event['description'];
        date.innerText = new Date(event['date']).toLocaleDateString();

        // Debugging: Log de datums om te zien wat er gebeurt
        console.log("Event Date: " + eventDate);
        console.log("Today: " + today);

        // Status van het evenement op basis van de datum
        if (eventDate < today) {
            status.innerText = 'Dit evenement is al gebeurd.';
            status.style.color = 'red';
            status.style.fontWeight = 'bold';
            
        } else if (eventDate > today) {
            status.innerText = 'Dit evenement moet nog gebeuren.';
            status.style.color = 'green';
            status.style.fontWeight = 'bold';
            
        } else {
            status.innerText = 'Dit evenement is vandaag.';
            status.style.color = 'blue';
            status.style.fontWeight = 'bold';
        }
    }

    function previousEvent() {
        if (currentIndex > 0) {
            currentIndex--;
            updateEvent();
        }
    }

    function nextEvent() {
        if (currentIndex < events.length - 1) {
            currentIndex++;
            updateEvent();
        }
    }

    window.onload = function() {
        updateEvent();  // Toon het eerste evenement bij laden
    };
</script>


    <section class="agenda">
        <h2>Agenda</h2>
        <div class="event-container">
            <h3 id="event-title"></h3>
            <p id="event-description"></p>
            <br>
            <p id="event-date"></p>
            <br>
            <p id="event-status"></p>
            <button onclick="previousEvent()">Vorige</button>
            <button onclick="nextEvent()">Volgende</button>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Back to Top Button -->
    <button id="backToTop">naar boven</button>

    <!-- Scroll to Top Script -->
    <script>
        // Scroll to top button
        const backToTopButton = document.getElementById('backToTop');

        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block"; // Show the button
            } else {
                backToTopButton.style.display = "none"; // Hide the button
            }
        };

        backToTopButton.onclick = function() {
            window.scrollTo({top: 0, behavior: 'smooth'}); // Smooth scroll to the top
        };
    </script>

</body>
</html>
