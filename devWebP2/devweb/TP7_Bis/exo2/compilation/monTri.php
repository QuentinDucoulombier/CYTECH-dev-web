<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="exo2.css"/>
        <title>Le maxi tri</title>

    </head>
    <body>
      <h1>Le maxi tri</h1>
    <?php
      include 'mesTableaux.php';
      $tab = initialiser(100);
      $tailleMain = 100;
      Afficher($tab, 100);
      Afficher(TriBulle($tab, 100), 100);

    ?>
    </body>
</html>
