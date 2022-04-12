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

      function Afficher($tab, $taille)
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

        function echanger($tab, $i, $j)
        {
          $x = $tab[$i];
          $tab[$i] = $tab[$j];
          $tab[$j] = $x;
          return $tab;
        }

        function TriBulle($tab, $taille)
        {
          $cpt = true;
          while ($cpt == true)
          {
            $cpt = false;
            for ($i=0; $i < $taille ; $i++)
            {
              if ($tab[$i] > $tab[$i+1])
              {
                $tab = echanger($tab, $i, $i+1);
                $cpt = true;
              }
            }
          }
          return $tab;
        }

        $tab = initialiser(100);
        $tailleMain = 100;
        Afficher($tab, 100);
        Afficher(TriBulle($tab, 100), 100);

      ?>

    </body>

</html>
