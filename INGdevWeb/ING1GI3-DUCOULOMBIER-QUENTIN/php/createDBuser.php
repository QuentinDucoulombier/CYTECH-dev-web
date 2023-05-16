<?php
$serveur = "localhost";
$user = "quentin";
$pass = "*noeDu64*";
$cnx = mysqli_connect($serveur, $user, $pass);

if (mysqli_connect_errno($cnx)) {
    echo "Erreur de connexion a MySQL: " . mysqli_connect_error();
    exit();
}

$dbname = "utilisateur";

$queryDestroyDB = "DROP DATABASE IF EXISTS $dbname";
if (mysqli_query($cnx, $queryDestroyDB)) {
    echo "Base de données ".$dbname." supprimée avec succès.";
} else {
    echo "Erreur lors de la suppresion de la base de données ".$dbname." : " . mysqli_error($cnx);
}

// Création de la base de données
$queryCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($cnx, $queryCreateDB)) {
    echo "Base de données ".$dbname." créée avec succès.";
} else {
    echo "Erreur lors de la création de la base de données ".$dbname." : " . mysqli_error($cnx);
}


mysqli_select_db($cnx, $dbname);

// Création de la table
$queryCreateTable = "CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    email VARCHAR(255),
    pseudo VARCHAR(255),
    mdp VARCHAR(255),
    statut VARCHAR(255)
)";
if (mysqli_query($cnx, $queryCreateTable)) {
    echo "Table 'user' créée avec succès.";
} else {
    echo "Erreur lors de la création de la table 'produits' : " . mysqli_error($cnx);
}
$fichier = "../data/csv/login.csv";
$cpt = 0;
if (($handle = fopen($fichier, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1024, ";")) !== FALSE) {

        if($cpt != 0) {     
            $prenom = mysqli_real_escape_string($cnx, $data[0]);
            $nom = mysqli_real_escape_string($cnx, $data[1]);
            $email = mysqli_real_escape_string($cnx, $data[2]);
            $pseudo = mysqli_real_escape_string($cnx, $data[3]);
            $password = mysqli_real_escape_string($cnx, $data[4]);
            $statut = mysqli_real_escape_string($cnx, $data[5]);

            $query = "INSERT INTO user (prenom, nom, email, pseudo, mdp, statut) 
                    VALUES ('$prenom', '$nom', '$email', '$pseudo', '$password', '$statut')";
            
            if (mysqli_query($cnx, $query)) {
                echo "Enregistrement inséré avec succès.";
            } else {
                echo "Erreur lors de l'insertion de l'enregistrement : " . mysqli_error($cnx);
            }
        }
        $cpt++;
    }
    fclose($handle);
}

mysqli_close($cnx);
?>
