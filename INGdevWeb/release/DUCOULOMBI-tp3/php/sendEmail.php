<?php

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$telephone = $_GET['Telephone'];
$email = $_GET['Email'];
$dateReservation = $_GET['dReserva'];
$messageClient = $_GET['sMail'];
$copieClient = $_GET['cMail'];
$metier = $_GET['metier'];
$genre = $_GET['Genre'];


$to = "quentducou@gmail.com";

$subject = "Nouvelle demande de réservation de $prenom $nom";

$message = "
<html>
    <head>
        <title>Nouvelle demande de réservation</title>
    </head>
    <body>
        <p>Vous avez reçu une nouvelle demande de réservation :</p>
        <table>
            <tr>
                <td><strong>Nom :</strong></td>
                <td>$nom</td>
            </tr>
            <tr>
                <td><strong>Prénom :</strong></td>
                <td>$prenom</td>
            </tr>
            <tr>
                <td><strong>Téléphone :</strong></td>
                <td>$telephone</td>
            </tr>
            <tr>
                <td><strong>E-mail :</strong></td>
                <td>$email</td>
            </tr>
            <tr>
                <td><strong>Date de réservation :</strong></td>
                <td>$dateReservation</td>
            </tr>
            <tr>
                <td><strong>Message du client :</strong></td>
                <td>$messageClient</td>
            </tr>
            <tr>
                <td><strong>Copie du message envoyée au client :</strong></td>
                <td>$copieClient</td>
            </tr>
            <tr>
                <td><strong>Métier :</strong></td>
                <td>$metier</td>
            </tr>
            <tr>
                <td><strong>Genre :</strong></td>
                <td>$genre</td>
            </tr>
        </table>
    </body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $nom $prenom <$email>" . "\r\n";


mail($to, $subject, $message, $headers);


header('Location:index.php');
?>
