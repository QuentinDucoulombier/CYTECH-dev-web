<?php

    $verif=true;
 
    /*Merci Titouan*/
    function clean($donnees) {
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }  

    $nom = clean($_POST["nom"]);
    $prenom = clean($_POST["prenom"]);
    $telephone = clean($_POST["Telephone"]);
    $email = clean($_POST["Email"]);
    $dReserva = clean($_POST["dReserva"]);
    $sMail = clean($_POST["sMail"]);
    $cMail = $_POST["cMail"];
    $metier = clean($_POST["metier"]);
    $genre = clean($_POST["Genre"]);
    $errorNum = false;
    $errorMail = false;
    $errorDate = false;
    $errorContMail = false;

    //Verif si c'est vide en gros
    $verif = !empty($nom) && !empty($prenom) && !empty($telephone) && !empty($email) && !empty($dReserva) && !empty($sMail) && !empty($cMail) && !empty($metier) && !empty($genre);

    // Telephone
    $telFormat = "/^((\+)33|0)[1-9](\d{2}){4}$/";
    if (!preg_match($telFormat, $telephone)) {
        $verif = false;
        $errorNum = true;
        

    }

    // Adresse email
    $emailFormat = "/^\S+@\S+\.\S+$/";
    if (!preg_match($emailFormat, $email)) {
        $verif = false;
        $errorMail = true;
    }

    // Date de réservation
    $dateReservFormat = "Y-m-d";
    $dateReserv = DateTime::createFromFormat($dateReservFormat, $dReserva);
    $now = new DateTime();
    if (!$dateReserv || $dateReserv < $now) {
        $verif = false;
        $errorDate = true;

    }

    // Vérification du contenu du mail
    if ($cMail == "Veuillez saisir le sujet du mail.") {
        $verif = false;
        $errorContMail = true;
    }

    // Si toutes les vérifications sont passées, le formulaire est envoyé
    if ($verif) {
        header('Location: sendEmail.php?nom=' . urlencode($_POST["nom"]) . '&prenom=' . urlencode($_POST["prenom"]) . '&Telephone=' . urlencode($_POST["Telephone"]) . '&Email=' . urlencode($_POST["Email"]) . '&dReserva=' . urlencode($_POST["dReserva"]) . '&sMail=' . urlencode($_POST["sMail"]) . '&cMail=' . urlencode($_POST["cMail"]) . '&metier=' . urlencode($_POST["metier"]) . '&Genre=' . urlencode($_POST["Genre"]));
    } else {
        header('Location: formulaire.php?nom=' . urlencode($_POST["nom"]) . '&prenom=' . urlencode($_POST["prenom"]) . '&Telephone=' . urlencode($_POST["Telephone"]) . '&Email=' . urlencode($_POST["Email"]) . '&dReserva=' . urlencode($_POST[""]) . '&sMail=' . urlencode($_POST["sMail"]) . '&cMail=' . urlencode($_POST["cMail"]) . '&errorNum=' . $errorNum . '&errorMail=' . $errorMail . '&errorDate=' . $errorDate . '&errorContMail=' . $errorContMail);
    }

?>