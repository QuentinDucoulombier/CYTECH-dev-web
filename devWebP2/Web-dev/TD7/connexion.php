<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Connexion</h2>
      <form  action="verificationConnexion.php" method="post">
        <div>
          <label for="pseudo">Pseudo</label> <input type="text" name="pseudo" value="" required>
        </div>
        <div>
          <label for="mdp">Mot de passe</label> <input type="password" name="mdp" value="" required>
        </div>
        <input type="submit" name="" value="Connexion">
      </form>

      <p>Première connexion en tant que qu'élève ! -> <a href="inscriptionEleves.php"> ICI</a></p>
      <p>Première connexion en tant que que prof ! -> <a href="inscriptionProf.php">ICI</a></p>

      <?php
      if (isset($_POST["OUT"])){
        session_start();
        session_destroy();
      }
       ?>

  </body>
</html>
