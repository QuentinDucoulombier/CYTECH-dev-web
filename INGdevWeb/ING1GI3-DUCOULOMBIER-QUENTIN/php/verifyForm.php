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

    //Verif si c'est vide en gros
    $verif = !empty($nom) && !empty($prenom) && !empty($telephone) && !empty($email) && !empty($dReserva) && !empty($sMail) && !empty($cMail) && !empty($metier) && !empty($genre);

    // Telephone
    $telFormat = "/^((\+)33|0)[1-9](\d{2}){4}$/";
    if (!preg_match($telFormat, $telephone)) {
        $verif = false;
        echo "Num";

    }

    // Adresse email
    $emailFormat = "/^\S+@\S+\.\S+$/";
    if (!preg_match($emailFormat, $email)) {
        $verif = false;
        echo "mail";

    }

    // Date de réservation
    $dateReservFormat = "Y-m-d";
    $dateReserv = DateTime::createFromFormat($dateReservFormat, $dReserva);
    $now = new DateTime();
    if (!$dateReserv || $dateReserv < $now) {
        $verif = false;
        echo "Date";

    }

    // Vérification du contenu du mail
    if ($cMail == "Veuillez saisir le sujet du mail.") {
        $verif = false;
        echo "ContenuMail";
    }

    // Si toutes les vérifications sont passées, le formulaire est envoyé
    if ($verif) {
        header('Location:sendEmail.php');
        
    } else {
        // Affichage d'un message d'erreur
        //TODO:Bien renvoye avec un get ;(

        echo "<h1>Une erreur est survenue lors de la soumission du formulaire.</h1>";
    }

?>