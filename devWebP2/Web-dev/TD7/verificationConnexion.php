<?php
  session_start();

  $verif_prof=false;
  if (($handle = fopen("info_prof.csv", "r")) !== FALSE) {
    while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE) && !$verif_prof) {
      if ($_POST['pseudo']==$data[3] && $_POST['mdp']==$data[4]){
        $_SESSION["prenom"]=  $data[1];
        $verif_prof=true;
      }
    }
    fclose($handle);
  }

  $verif_eleve = false;
  if (($handle = fopen("info_eleve.csv", "r")) !== FALSE) {
    while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE) && !$verif_eleve) {
      if ($_POST['pseudo']==$data[5] && $_POST['mdp']==$data[6]){
        $_SESSION["prenom"]=  $data[1];
        $verif_eleve=true;
      }
    }
    fclose($handle);
  }

  $verif_admin=false;
  if (($handle = fopen("infoAdmin.csv", "r")) !== FALSE) {
    while ((($data = fgetcsv($handle, 1000, ";")) !== FALSE) && !$verif_admin) {
      if ($_POST['pseudo']==$data[2] && $_POST['mdp']==$data[3]){
        $_SESSION["prenom"]=  $data[1];
        $verif_admin=true;
      }
    }
    fclose($handle);
  }


  if ($verif_prof || $verif_eleve){
    $_SESSION["session"]= $verif_prof ? "prof" : "eleve" ;
    header('Location: accueil.php');
  }else if($verif_admin){
    $_SESSION["session"]= "admin" ;
    header('Location: accueil.php');
  }
  else{
    header('Location: connexion.php');
  }
 ?>
