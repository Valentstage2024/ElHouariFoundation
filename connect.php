<?php
$host = 'localhost'; 
$db = 'houari_foundation';
$user = 'root'; 
$pass = ''; 


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

