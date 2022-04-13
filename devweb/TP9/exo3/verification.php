<?php
    session_start();
    $lettre = $_POST["lettre"];
    $_SESSION["restant"] = $_POST["restant"];
    //$restant = $_POST["restant"];


    //$motRand = $data[$chiffreRand];
    //$motRand = 'test';
    //echo $motRand[1];
    $motRand = $_SESSION["motRand"];

    $tailleMot = strlen($motRand);

    echo "<p>nb de coup restant : ".$_SESSION["restant"]." | ";
    for ($i=0; $i < $tailleMot; $i++)
    {
      if($lettre == $motRand[$i])
      {
        echo "$lettre";

      }
      else
      {
        echo "_ ";
        $_SESSION["restant"]=$_SESSION["restant"]-1;
      }
    }
    echo "</p>";



?>
