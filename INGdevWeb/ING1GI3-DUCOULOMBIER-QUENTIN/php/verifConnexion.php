<?php
session_start();
$serveur = "localhost";
$user = "quentin";
$pass = "*noeDu64*";
$dbname = "utilisateur";
$cnx = mysqli_connect($serveur, $user, $pass, $dbname);

if (mysqli_connect_errno($cnx)) {
    echo "Erreur de connexion à MySQL: " . mysqli_connect_error();
    exit();
}
$dbname = "voyages";
mysqli_select_db($cnx, $dbname);

$pseudo = mysqli_real_escape_string($cnx, $_POST["pseudo"]);
$password = mysqli_real_escape_string($cnx, $_POST["password"]);

$query = "SELECT * FROM user WHERE pseudo = '$pseudo';";
$resultat = mysqli_query($cnx, $query);
$numrow = mysqli_num_rows($resultat);
$row = mysqli_fetch_assoc($resultat);

if ($numrow == 1 && password_verify($password, $row["mdp"])) {
    $_SESSION["prenom"] = $row["prenom"];
    $_SESSION["nom"] = $row["nom"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["pseudo"] = $row["pseudo"];
    $_SESSION["password"] = $row["mdp"];
    $_SESSION["statut"] = $row["statut"];
    header('Location: index.php');
    exit();
}
else {
    header('Location: connexion.php');
}
?>
