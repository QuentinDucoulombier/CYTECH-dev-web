<?php
session_start();
$fichier = "../data/csv/login.csv";

if (($handle = fopen($fichier, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1024, ";")) !== FALSE) {

        if (($data[3] == $_POST["pseudo"]) && (password_verify($_POST["password"], $data[4]))){
            //on recupere les infos dans la session
            $_SESSION["prenom"] = $data[0];
            $_SESSION["nom"] = $data[1];
            $_SESSION["email"] = $data[2];
            $_SESSION["pseudo"] = $data[3];
            $_SESSION["password"] = $data[4];
            header('Location: index.php');
            exit();
        }
        else
        {
            header('Location: connexion.php');
        }
    }
    fclose($handle);

}

?>
