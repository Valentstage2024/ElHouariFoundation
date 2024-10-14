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
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen - El Houari Foundation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="login-body">
    <div class="login-container">
        <h2 class="login-title">Inloggen</h2>
        <?php if (isset($error)) { ?>
            <p class="error-message">
                <?php echo $error; ?>
            </p>
        <?php } ?>
        <form class="login-form" method="post" action="login.php">
            <label class="login-label" for="username">Gebruikersnaam:</label>
            <input class="login-input" type="text" id="username" name="username" required autocomplete="on">

            <label class="login-label" for="password">Wachtwoord:</label>
            <input class="login-input" type="password" id="password" name="password" required autocomplete="current-password">

            <input class="login-submit" type="submit" value="Inloggen">
        </form>
    </div>

    <a href="javascript:history.back()" class="back-button">⟵ Terug</a>
    
</body>

</html>
