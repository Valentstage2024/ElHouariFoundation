<?php
session_start();
session_unset(); // Verwijdert alle sessievariabelen
session_destroy(); // Vernietigt de sessie
header("Location: index.php");
exit();

