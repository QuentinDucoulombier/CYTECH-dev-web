<?php
$serveur = "localhost";
$user = "quentin";
$pass = "*noeDu64*";
$cnx = mysqli_connect($serveur, $user, $pass);

if (mysqli_connect_errno($cnx)) {
    echo "Erreur de connexion a MySQL: " . mysqli_connect_error();
    exit();
}

$dbname = "voyages";

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
$queryCreateTable = "CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    distance VARCHAR(255),
    direction VARCHAR(255),
    description TEXT,
    prix DECIMAL(10,2),
    stock INT,
    photo VARCHAR(255)
)";
if (mysqli_query($cnx, $queryCreateTable)) {
    echo "Table 'produits' créée avec succès.";
} else {
    echo "Erreur lors de la création de la table 'produits' : " . mysqli_error($cnx);
}

// Chemin vers le fichier JSON
$jsonFile = "../data/json/products.json";
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

// Parcours des données et insertion dans la base de données
foreach ($data as $key => $value) {
    $distance = mysqli_real_escape_string($cnx, $value['distance']);
    foreach ($value as $subKey => $subValue) {
        if (strpos($subKey, 'produits') === 0) {
            $direction = mysqli_real_escape_string($cnx, $subValue['direction']);
            $description = mysqli_real_escape_string($cnx, $subValue['Description']);
            $prix = mysqli_real_escape_string($cnx, $subValue['Prix']);
            $stock = mysqli_real_escape_string($cnx, $subValue['Stock']);
            $photo = mysqli_real_escape_string($cnx, $subValue['Photo']);
            
            $query = "INSERT INTO produits (distance, direction, description, prix, stock, photo) 
                      VALUES ('$distance', '$direction', '$description', '$prix', '$stock', '$photo')";
            
            if (mysqli_query($cnx, $query)) {
                echo "Enregistrement inséré avec succès.";
            } else {
                echo "Erreur lors de l'insertion de l'enregistrement : " . mysqli_error($cnx);
            }
        }
    }
}

mysqli_close($cnx);
?>
