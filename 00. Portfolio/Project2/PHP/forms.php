<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $mail = $_POST["mail"];
    $onderwerp = $_POST["onderwerp"];
    $bericht = $_POST["bericht"];

    $to = "andreadasilva1712@gmail.com";
    $subject = "Nieuw bericht van $naam: $onderwerp";
    $message = "Naam: $naam\nE-mail: $mail\nBericht: $bericht";

    // Additional headers
    $headers = "From: $mail" . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Bedankt voor uw bericht! We hebben uw bericht ontvangen en zullen spoedig contact met u opnemen.";
    } else {
        echo "Er is een probleem opgetreden bij het verzenden van uw bericht. Probeer het later opnieuw.";
    }
} else {
    echo "Ongeldige aanvraag";
}
?>