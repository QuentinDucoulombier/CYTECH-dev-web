<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Inscription</h2>
      <form  action="./enregistrerEleves.php" method="post">
            <label for="nom">Nom</label> <input type="text" name="nom" value="">
        </div>
        <div>
          <label for="prenom">Prénom</label> <input type="text" name="prenom" value="">
        </div>
        <div>
          <label for="date_nais">Date de Naissance</label> <input type="date" name="date_nais" value="">
        </div>
        <div>
          <label for="maison">Maison</label> <input type="text" name="maison" value="">
        </div>
        <div>
          <label for="total">Total points</label> <input type="number" name="total" value="">
        </div>
        <div>
          <label for="pseudo">Pseudo</label> <input type="text" name="pseudo" value="">
        </div>
        <div>
          <label for="mdp">Mot de passe</label> <input type="password" name="mdp" value="">
        </div>
        <input type="submit" name="" value="Valider">
      </form>

      <?php
        if (isset($_GET['inscrip'])) {
          echo "<p>Inscription réussite !</p>";
        }
       ?>
       <a href="connexion.php"> Vers Connexion</a>


  </body>
</html>
