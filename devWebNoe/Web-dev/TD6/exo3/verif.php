<?php
  $users = array("a" => "a" ,"HarryDu93" => "giny<3" ,"HermioneDu64" => "pattenrond" ,"RonDu33" => "tfcForEver" );

  if ($users[$_POST["login"]]==$_POST["pwd"]) {
    header("Location: accueil.php?login=".$_POST["login"]);
  }else {
    header("Location: connexion.html");
  }

 ?>
