<?php
include_once("../includes/connect.php");

$query = "SELECT * FROM agenda ORDER BY date ASC";
$result = mysqli_query($conn, $query);

$events = [];
while ($row = mysqli_fetch_assoc($result)) {
    $events[] = $row;
}

$currentDate = date('Y-m-d');
$selectedEventIndex = 0;

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
    <link rel="stylesheet" href="../css/style.css">
    <script>
        let events = <?php echo json_encode($events); ?>;
        let currentIndex = <?php echo $selectedEventIndex; ?>;
    </script>
    <script src="../js/eventNavigation.js"></script> 
</head>
<body>

<?php include_once '../includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-text">
        <h2>El Houari Foundation</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
    </div>
</section>

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

<?php include_once '../includes/footer.php'; ?>

<button id="backToTop">naar boven</button>
<script src="../js/scrollToTop.js"></script>

</body>
</html>