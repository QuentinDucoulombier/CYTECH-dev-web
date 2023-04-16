<?php
  if(file_exists("info_prof.csv")){
    $file = fopen("info_prof.csv","a");
  }else{
    $file = fopen("info_prof.csv","w");
    $first_line = array("nom","prenom","matiere","pseudo","mdp");
    fputcsv($file, $first_line,";");
  }

  $monProf= array($_POST["nom"],$_POST["prenom"],$_POST["matiere"],$_POST["pseudo"],$_POST["mdp"]);

  fputcsv($file, $monProf,";");

  fclose($file);

  header("Location: inscriptionProf.php?inscrip=success")
 ?>
