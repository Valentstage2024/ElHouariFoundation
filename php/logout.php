<?php
session_start();

// Leeg alle sessievariabelen
$_SESSION = array();

// Als er een sessie-cookie bestaat, verwijder deze
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Vernietig de sessie
session_destroy();

// Verwijs terug naar index.php buiten de php-map
header("Location: ../index.php");
exit();
