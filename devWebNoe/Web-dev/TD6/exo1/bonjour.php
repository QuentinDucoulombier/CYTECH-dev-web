<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>BONJOUR</title>
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <?php include '../exo5/menu.php'; ?>

    <br>
    <br>

    <?php
    function age($naissance){
      $a_n = explode("/",$naissance)[2];
      return intval(date("Y"),10) - intval($a_n,10);
    }

    $date = date("d/m/Y");
    $time = date("h:i:sa");
    echo "Bonjour tout le monde, nous sommes le " .$date ." à ".$time ;
    $tab = [["Giroud","Olivier","30/09/1986","Attaquant"],["Griezman","Antoine","21/03/1991","Attaquant"],["Umtiti","Samuel","14/09/1993","Défense"],["Lloris","Hugo","26/12/1986","Gardien"]];
    ?>

    <table>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de Naissance</th>
        <th>Poste</th>
        <th>Age</th>
      </tr>
      <?php
      foreach ($tab as $t) {
        echo "<tr>";
        echo "<td>$t[0]</td>";
        echo "<td>$t[1]</td>";
        echo "<td>$t[2]</td>";
        echo "<td>$t[3]</td>";
        echo "<td>". age($t[2]) ."</td>";
        echo "</tr>";
      }
      ?>
    </table>

  </body>
</html>
