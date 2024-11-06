<?php
include_once("../includes/connect.php");

// Fetch events from the database
$query = "SELECT * FROM agenda ORDER BY date ASC";
$result = mysqli_query($conn, $query);

// Handle potential database query errors
if (!$result) {
    die('Query Failed: ' . mysqli_error($conn));
}

$events = [];
while ($row = mysqli_fetch_assoc($result)) {
    $events[] = $row;
}

$currentDate = date('Y-m-d');
$selectedEventIndex = 0;

// Find the next upcoming event
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
    <title>Onze Agenda - El Houari Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script>
        let events = <?php echo json_encode($events); ?>;
        let currentIndex = <?php echo $selectedEventIndex; ?>;
    </script>
    <script src="../js/eventNavigation.js"></script>
</head>
<div id="verse-display"></div>

<body class="agenda-body">

    <?php include_once '../includes/header.php'; ?>




    <div id="calendar"></div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>

<section class="heropagina">
        <div class="overlay"></div>
        <div class="hero-text">
            <h2>Agenda</h2>
            <br>
            <p>Blijf op de hoogte van onze evenementen</p>
            <a href="../php/doneer.php" class="aboutus-donate-button">Doneer Nu</a>
        </div>
    </section>

    <section class="agenda">
     
        <div class="event-container">
            <h3 id="event-title"></h3>
            <p id="event-description"></p>
            <br>
            <p id="event-date"><i class="fa fa-calendar"></i> Event Date</p>
            <br>
            <p id="event-status"><i class="fa fa-info-circle"></i> Event Status</p>

            <button onclick="previousEvent()">Vorige</button>
            <button onclick="nextEvent()">Volgende</button>
        </div>
    </section>
    <br>
    <br>
    <br>




      

  </div>
</div>
</div>

    <?php include_once '../includes/footer.php'; ?>

    <button id="backToTop">naar boven</button>
    <script src="../js/scrollToTop.js"></script>
    <script src="../js/fetchEvent.js"></script>
    <script src="../js/kalender.js"></script>
    

</body>

</html>
