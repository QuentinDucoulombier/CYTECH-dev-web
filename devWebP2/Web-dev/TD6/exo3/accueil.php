<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Conectez-vous !! </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include '../exo5/menu.php'; ?>
    <?php
    echo "Bonjour ";
    echo $_GET['login'];
    echo ", Voici ta page d'accueil !"

     ?>

     <a href="connexion.php" >Déconnexion</a>

  </body>
</html>
