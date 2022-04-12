<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="gazon.css"/>
        <title>Mon petit gazon</title>

    </head>
    <body>
      <h1>Mon petit gazon</h1>
      <?php
        echo "Bonjour tout le monde";
      ?>
      <br />
      <?php
        $heure = date("d/m/Y");
        echo "$heure";
        $année = explode("/", $heure);

      ?>
      <br />
      <?php
        $time = date("h:m:s");
        echo "$time";
      ?>
      <p></p>
      <table>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Date de Naissance</th>
          <th>Poste</th>
          <th>Age</th>
        </tr>


      <?php

        $tab = array(array("Giroud","Olivier","30/09/1986","Attaquant"),
        array("Griezman","Antoine","21/03/1991","Attaquant"),
        array("MBappe","Kylian","20/11/1998","Attaquant"),
        array("Kante","N'Golo","28/03/1991","Milieu"),
        array("Umtiti","Samuel","14/09/1993","Defense"),
        array("Lloris","Hugo","26/12/1986","Gardien"));
        $age = explode("/", $tab[0][2]);
        //echo $age[2];
        //echo $année[2];

      ?>
      <?php

      // /  echo $tab[0][2];


      ?>

      <?php

        foreach ($tab as $key => $value)
        {
          $age = explode("/", $tab[$key][2]);
          $final = $année[2] - $age[2];
          echo "<tr>";
          echo "<td>$value[0]</td>";
          echo "<td>$value[1]</td>";
          echo "<td>$value[2]</td>";
          echo "<td>$value[3]</td>";
          echo "<td>$final</td>";
          echo "</tr>";

        }
      ?>
      </table>

    </body>

</html>
