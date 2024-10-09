<?php
session_start();
include_once 'connect.php';

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
        echo "<script>alert('Evenement toegevoegd!');</script>";
    } else {
        echo "Fout bij toevoegen: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenement Toevoegen - Elhouri Foundation</title>
    <link rel="stylesheet" href="style.css">

    <button class="logout-btn" onclick="window.location.href='logout.php'">Uitloggen</button>
    
</head>
<body>

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