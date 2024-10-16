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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">


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