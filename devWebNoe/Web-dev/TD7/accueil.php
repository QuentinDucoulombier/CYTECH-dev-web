<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      session_start();

      if(!isset( $_SESSION["prenom"])){
        header('Location: connexion.php');
      }

      $prenom = $_SESSION["prenom"];
      echo "Bonjour $prenom";
      ?>

      <?php
      if($_SESSION["session"] == "admin"){
        echo "<h5>Professeur</h5>";

        if (($handle = fopen("info_prof.csv", "r")) !== FALSE) {
          echo "<table>";
          $data = fgetcsv($handle, 1000, ";");
          echo "<tr>";
          for ($i=0; $i < count($data) ; $i++) {
            echo "<th> $data[$i] </th>";
          }
          echo "</tr>";

          while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE)) {
            echo "<tr>";
            for ($i=0; $i < count($data) ; $i++) {
              echo "<td> $data[$i] </td>";
            }
            echo "</tr>";
          }
          echo "</table>";
        }else {
          echo "<p>Pas de prof enregistré</p>";
        }

        echo "<h5>Elèves</h5>";

        if (($handle = fopen("info_eleve.csv", "r")) !== FALSE) {
          echo "<table>";
          $data = fgetcsv($handle, 1000, ";");
          echo "<tr>";
          for ($i=0; $i < count($data) ; $i++) {
            echo "<th> $data[$i] </th>";
          }
          echo "</tr>";

          while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE)) {
            echo "<tr>";
            for ($i=0; $i < count($data) ; $i++) {
              echo "<td> $data[$i] </td>";
            }
            echo "</tr>";
          }
          echo "</table>";

        fclose($handle);
      }else {
        echo "<p>Pas de eleve enregistré</p>";
      }
    }
     ?>


    <form method="POST" action="connexion.php">
        <input type="submit" name="OUT" value="deconnexion"/>
    </form>
  </body>
</html>
