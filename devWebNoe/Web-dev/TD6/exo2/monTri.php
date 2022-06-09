
<?php
  function initialiser($taille){
    $tab=[];
    for ($i=0; $i < $taille; $i++) {
      array_push($tab,rand(1,100));
    }
    return $tab;
  }

  function afficher($tab){
    $index = 0;
    echo "<table>";
    echo "<tr>";
    for ($i=0; $i < count($tab) ; $i++) {
      echo "<th>$i</th>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($tab as $t) {
      echo "<td>$t</td>";
    }
    echo "</tr>";
    echo "</table>";
  }

  function remplacer($tab, $i , $j){
    $a = $tab[$i];
    $tab[$i] = $tab[$j];
    $tab[$j] = $a;
    return $tab;
  }
  
  function triABulle($tab,$taille){
    $cpt = true;
    while($cpt){
      $cpt = false;
      for ($i=0; $i < count($tab)-1; $i++) {
        if($tab[$i]>$tab[$i+1]){
          $tab = remplacer($tab,$i,$i+1);
          $cpt = true;
        }
      }
    }
    return $tab;
  }

?>
