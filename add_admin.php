<?php
// Databaseverbinding maken
$host = 'localhost';
$db   = 'houari_foundation';
$user = 'root';  // Vul hier je databasegebruikersnaam in
$pass = '';      // Vul hier je databasewachtwoord in
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Gegevens voor admin-account
$username = 'admin';
$password = '123';

// Wachtwoord hashen
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check of het admin-account al bestaat
$sql = "SELECT COUNT(*) FROM `user` WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $username]);

if ($stmt->fetchColumn() > 0) {
    echo "Admin-account bestaat al.";
} else {
    // Admin-account toevoegen aan de database
    $sql = "INSERT INTO `user` (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            'username' => $username,
            'password' => $hashed_password,
        ]);
        echo "Admin-account succesvol toegevoegd!";
    } catch (PDOException $e) {
        echo "Er is een fout opgetreden: " . $e->getMessage();
    }
}

