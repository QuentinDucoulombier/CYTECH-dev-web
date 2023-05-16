<?php
    $fichier = "../data/csv/login.csv";
    if(!file_exists($fichier))
    {
        $file = fopen($fichier,"w");
        $listeTitre = array("Prenom","Nom","Email","pseudo","mdp","statut");
        fputcsv($file, $listeTitre, ";");
        fclose($file);

    }

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //on importe les infos de l'inscription dans un csv
    $file = fopen($fichier,"a");
    $list = array($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['pseudo'], $password, "client");
    fputcsv($file, $list, ";");
    fclose($file);
    header('Location: connexion.php');
    exit();

?>
