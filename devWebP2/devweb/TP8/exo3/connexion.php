<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>La maxi Connexion</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>

    </head>
    <body>
      <!-- Ca marhce aussi avec .html -->
      <h1>La maxi Connexion</h1>
      <form action="verificationConex.php" method="POST">
      <p> Pseudo : <input type="text" name="pseudo"></p>
      <p> Password : <input type="password" name="password"></p>
      <p><input type="submit" value="Valider" required></p>
      </form>
      <p>Première connexion en tant qu'eleves ! => <a href="../exo1/inscriptionEleve.php">ICI</a></p>
      <p>Première connexion en tant que prof ! => <a href="../exo2/inscriptionProf.php">ICI</a></p>
      <?php
        if (isset($_POST["OUT"])){
          session_destroy();
        }
      ?>

  </body>


</html>
