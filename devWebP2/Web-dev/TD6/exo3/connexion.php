<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Conectez-vous !! </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include '../exo5/menu.php'; ?>
    <form action="verif.php" method="post">
      <div class="form1">
        <label for="login">Login :</label>
        <input type="text" name="login" id="login" value="" required>
      </div>
      <div class="form2">
        <label for="pwd">Mot de passe :</label>
        <input type="password" name="pwd" id="pwd" value="" required>
      </div>

      <input type="submit" value="Connexion">
    </form>

  </body>
</html>
