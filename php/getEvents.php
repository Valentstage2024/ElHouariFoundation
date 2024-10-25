<?php
$servername = "localhost";
$username = "root";
$password = "";  // Vergeet niet je wachtwoord in te vullen
$dbname = "agenda_db";  // Naam van de database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$month = $_GET['month'];
$year = $_GET['year'];

// SQL-query om evenementen op te halen
$sql = "SELECT title, description, date FROM agenda WHERE MONTH(date) = ? AND YEAR(date) = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $month, $year);
$stmt->execute();

$result = $stmt->get_result();
$events = [];

while($row = $result->fetch_assoc()) {
    $events[] = $row;
}

echo json_encode($events);

$conn->close();
?>
