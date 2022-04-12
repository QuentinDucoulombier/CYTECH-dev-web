<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION["name"])){
      header('Location: connexion.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le maxi Acceuil</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>

    </head>
    <body>
      <h1>Le maxi Acceuil</h1>
      <?php
          echo "Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom'];
          if ($_SESSION['type'] == "prof") {
            echo "<br \>";
            echo "Vous enseignez la matiere : ".$_SESSION['matiere'];
          }
          elseif ($_SESSION['type'] == "eleve") {
            echo "<br \>";
            echo "Vous faite partie de la maison : ".$_SESSION['maison'];
          }
          elseif ($_SESSION['type'] == "admin")
          {
            $row = 1;
            echo"<p></p>";

            if (($handle = fopen("../exo1/infoEleves.csv", "r")) !== FALSE) {
                echo "<h2>Liste élèves</h2>";
                echo "<table>";
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);
                    $row++;

                    echo "<tr>";
                    for ($c=0; $c < $num-1; $c++) {

                        echo "<td>$data[$c]</td>";
                    }
                }
                fclose($handle);
            }
            echo "</table>";
            if (($handle = fopen("../exo2/infoProfesseurs.csv", "r")) !== FALSE) {
                echo "<h2>Liste Profs</h2>";
                echo "<table>";
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);
                    $row++;

                    echo "<tr>";
                    for ($c=0; $c < $num-1; $c++) {

                        echo "<td>$data[$c]</td>";
                    }
                }
                fclose($handle);
            }
            echo "</table>";
        }



      ?>
      <p></p>
      <form method="POST" action="connexion.php">
        <input type="submit" name="OUT" value="deconnexion"/>

    </body>
</html>
