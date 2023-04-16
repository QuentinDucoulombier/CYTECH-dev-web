<?php
$loginOfficial="quentin";
$passwordOfficial="123";
if (($loginOfficial==$_POST["login"]) && ($passwordOfficial==$_POST["password"])){
   /* si c'est bon je pars sur la page accueil.php */
        header("Location: acceuil.php?login=".$_POST["login"]);
}
else{
        header("Location: connexion.html");
}
?>
