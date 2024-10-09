<?php
session_start();

include_once("../includes/connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    if ($conn->connect_error) {
        die("Database Error: " . $conn->connect_error);
    }

    // Verander de query om de 'user' tabel te gebruiken
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;
            $_SESSION['session_id'] = session_id();
            // Verwijs naar add_event.php zonder extra paden
            header("Location: add_event.php");
            exit(); // Zorg ervoor dat je de scriptuitvoering stopt na een redirect
        } else {
            echo "<script>alert('Gebruikersnaam of wachtwoord is onjuist');</script>";
        }
    } else {
        echo "<script>alert('Gebruikersnaam of wachtwoord is onjuist');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Inloggen</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h2>Inloggen</h2>
        <?php if (isset($error)) { ?>
            <p>
                <?php echo $error; ?>
            </p>
        <?php } ?>
        <form method="post" action="login.php">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" required autocomplete="on">

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required autocomplete="current-password">

            <input type="submit" value="Inloggen">
        </form>
    </div>
</body>

</html>