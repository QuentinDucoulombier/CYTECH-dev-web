<?php
session_start();
$_SESSION["name"] = $_POST["pseudo"];

if (($handle = fopen("../exo1/infoEleves.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {


        if (($data[5] == $_POST["pseudo"]) && ($data[6] == $_POST["password"])){
            $_SESSION["prenom"] = $data[0];
            $_SESSION["nom"] = $data[1];
            $_SESSION["type"] = "eleve";
            $_SESSION["maison"] = $data[3];
            header('Location: acceuil.php');
            exit();
        }
        echo $data[$c] . "<br />\n";
        header('Location: connexion.php');

    }
    fclose($handle);

}
if (($handleProf = fopen("../exo2/infoProfesseurs.csv", "r")) !== FALSE) {
    while (($dataProf = fgetcsv($handleProf, 1000, ";")) !== FALSE) {


        if (($dataProf[3] == $_POST["pseudo"]) && ($dataProf[4] == $_POST["password"])){
            $_SESSION["prenom"] = $dataProf[0];
            $_SESSION["nom"] = $dataProf[1];
            $_SESSION["matiere"] = $dataProf[2];
            $_SESSION["type"] = "prof";
            header('Location: acceuil.php');
            exit();
        }
        echo $dataProf[$c] . "<br />\n";
        header('Location: connexion.php');

    }
    fclose($handleProf);
}


if (($handleAdmin = fopen("infoAdmin.csv", "r")) !== FALSE) {
    while (($dataAdmin = fgetcsv($handleAdmin, 1000, ";")) !== FALSE) {


        if (($dataAdmin[2] == $_POST["pseudo"]) && ($dataAdmin[3] == $_POST["password"])){
            $_SESSION["prenom"] = $dataAdmin[0];
            $_SESSION["nom"] = $dataAdmin[1];
            $_SESSION["type"] = "admin";
            header('Location: acceuil.php');
            exit();
        }
        echo $dataAdmin[$c] . "<br />\n";
        header('Location: connexion.php');

    }
    fclose($handleAdmin);
}

?>
