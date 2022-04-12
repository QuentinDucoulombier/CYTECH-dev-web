<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le Titre</title>
    </head>
    <body>
    <?php
        echo "Bonjour, ";
        echo $_GET['login'];
        echo "<p></p>";
        echo "Voici ta page d'accueil !"
    ?>
    <p>
      <button type="button" onclick="location.href = 'connexion.html';">Deconnexion</button>
    </p>
    </body>
</html>
