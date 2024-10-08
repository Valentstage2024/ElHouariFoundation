<?php
session_start();

include_once("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];



    if ($conn->connect_error) {
        die("Database Error: " . $conn->connect_error);
    }
                                                            

    $query = "SELECT * FROM gastenboek_users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {

            $_SESSION['username'] = $username;
            $_SESSION['session_id'] = session_id();

        }
        else {
            echo "<script>alert('Gebruikersnaam of wachtwoord is onjuist');</script>";
        }

}
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Inloggen</title>
    <link rel="stylesheet" href="login.css">
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
            <div>Nog geen account? <a href="register.php">Maak een nieuw account aan</a></div>
        </form>
    </div>
</body>

</html>
