<?php
  session_start();
  $data = file("mots.txt");
  $max = count($data);
  $chiffreRand = rand(0,$max);
  $motRand = $data[$chiffreRand];
  $_SESSION["motRand"] = $motRand;
  echo $motRand;
  
  //print_r $motRand;


?>
