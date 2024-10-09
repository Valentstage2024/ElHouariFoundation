<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $bedrijfsnaam = $_POST['bedrijfsnaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $project = $_POST['project'];
    $valuta = $_POST['valuta'];
    $bedrag = $_POST['bedrag'];
    $betaalmethode = $_POST['betaalmethode'];

    $to = "donaties@elhouarifoundation.org";  // E-mailadres waar de donatie-informatie naar toe gaat
    $subject = "Nieuwe donatie van $naam";
    $message = "
    Naam: $naam\n
    Bedrijfsnaam: $bedrijfsnaam\n
    E-mail: $email\n
    Telefoonnummer: $telefoonnummer\n
    Project: $project\n
    Valuta: $valuta\n
    Bedrag: $bedrag\n
    Betaalmethode: $betaalmethode\n
    ";

    // Stuur de e-mail
    if (mail($to, $subject, $message)) {
        echo "Bedankt voor uw donatie!";
    } else {
        echo "Er is iets misgegaan, probeer het later opnieuw.";
    }
}
?>