<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>MATHEMATICIEN</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include '../exo5/menu.php'; ?>
    <?php
      include('monTri.php');

      $tab = initialiser(20);
      $tab_temp = triABulle($tab,20);
      afficher($tab);
      afficher($tab_temp);
     ?>


  </body>
</html>
