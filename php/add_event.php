<?php
session_start();
include_once("../includes/connect.php");

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $query = "INSERT INTO agenda (title, description, date) VALUES ('$title', '$description', '$date')";
    if (mysqli_query($conn, $query)) {
        // Return the new event as JSON
        $newEvent = [
            'id' => mysqli_insert_id($conn),
            'title' => $title,
            'description' => $description,
            'date' => $date
        ];
        echo json_encode($newEvent);
    } else {
        echo json_encode(['error' => 'Fout bij toevoegen: ' . mysqli_error($conn)]);
    }
    exit(); // Ensure no further output is sent
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenement Toevoegen - Elhouri Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery -->
    <script>
        $(document).ready(function() {
            $('.add-event-form').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                $.ajax({
                    type: 'POST',
                    url: 'add_event.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        const event = JSON.parse(response);
                        if (event.error) {
                            alert(event.error);
                        } else {
                            alert('Evenement toegevoegd!');
                            // Optionally, redirect or update the calendar here
                            // You can call a function to refresh the calendar or append the new event
                            addEventToCalendar(event);
                        }
                    }
                });
            });
        });

        function addEventToCalendar(event) {
            // Assuming you have a function to refresh your calendar and events list
            // This function needs to be defined in your main agenda page's JS file
            console.log(event); // For testing purposes
            // You can implement the logic to add this event to your calendar display
        }
    </script>
</head>

<body class="login-body">
    <a href="logout.php" class="logout-btn">Uitloggen</a>
    <div class="add-event-container">
        <h2 class="add-event-header">Evenement Toevoegen</h2>
        <form method="post" action="add_event.php" class="add-event-form">
            <label for="title">Titel:</label>
            <input type="text" name="title" id="title" required>
            <label for="description">Beschrijving:</label>
            <textarea name="description" id="description" required></textarea>
            <label for="date">Datum:</label>
            <input type="date" name="date" id="date" required>
            <input type="submit" value="Toevoegen" class="submit-btn">
        </form>
    </div>
</body>
</html>
