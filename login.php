<?php
// Start output buffering om problemen met header() te voorkomen
ob_start();

// Start de sessie
session_start();

// Foutmeldingen weergeven
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verbind met de database
$host = "localhost";
$user = "root";
$password = "";
$database = "houari_foundation";

$conn = new mysqli($host, $user, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Bereid een veilige SQL-query voor
    $stmt = $conn->prepare("SELECT id, password FROM user WHERE username = ?");
    if (!$stmt) {
        die("Fout bij het voorbereiden van de SQL-query: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Controleer of er een gebruiker is gevonden
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $hashedPassword);
        $stmt->fetch();

        // Vergelijk het ingevoerde wachtwoord met het gehashte wachtwoord in de database
        if (password_verify($password, $hashedPassword)) {
            // Wachtwoord klopt, start een sessie voor de gebruiker
            $_SESSION['user_id'] = $userId;
            $_SESSION['username'] = $username;

            // Stuur door naar de add_event pagina
            header("Location: add_event.php");
            exit;
        } else {
            // Wachtwoord klopt niet
            echo "<script>alert('Wachtwoord is onjuist.');</script>";
        }
    } else {
        // Gebruikersnaam bestaat niet
        echo "<script>alert('Gebruikersnaam bestaat niet.');</script>";
    }

    $stmt->close();
}

$conn->close();

// Sluit output buffering en stuur de buffered inhoud
ob_end_flush();
?>

<!-- HTML-inlogformulier -->
<form method="post" action="login.php">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" id="password" required><br>

    <input type="submit" value="Login">
</form>
