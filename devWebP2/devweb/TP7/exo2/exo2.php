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

        function initialiser($taille)
        {
          $tab = array();
          for($x = 0; $x <= $taille; $x++)
          {
            $nombreRandom = rand(0,100);
            array_push($tab, $nombreRandom);
          }
          return $tab;

        }

      function Afficher($taille)
        {
          echo "<table>";

          echo "<tr>";
          for($x = 0; $x <= $taille; $x++)
          {
            echo "<th>$x</th>";

          }
          echo "</tr>";
          echo "<tr>";
          for($x = 0; $x <= $taille; $x++)
          {
            //$nombreRandom = rand(0,100);
            echo "<td>$tab[$x]</td>";
          }
          echo "</tr>";


          echo "</table";
        }

        initialiser(10);
        Afficher(initialiser(10), 10);

        //echo "$tab";
        //function triBull;
      ?>

    </body>

</html>
