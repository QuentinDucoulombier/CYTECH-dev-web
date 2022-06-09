<?php
  session_start();
  if(!isset($_SESSION["mot"]) || isset($_POST["nv_mot"])){
    $index_line = rand(0,134);
    $f = fopen("mot.txt", "r");
    $i=0;
    while ($i != $index_line) {
        $mot = fgets($f);
        $_SESSION["mot"] = $mot;
        $i++;
    }
    //echo $_SESSION["mot"];
    echo (strlen($_SESSION["mot"])-2);
  }

 ?>
