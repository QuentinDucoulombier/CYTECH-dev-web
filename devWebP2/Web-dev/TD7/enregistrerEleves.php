<?php
  if(file_exists("info_eleve.csv")){
    $file = fopen("info_eleve.csv","a");
  }else{
    $file = fopen("info_eleve.csv","w");
    $first_line = array("nom","prenom","date_nais","maison","total","pseudo","mdp");
    fputcsv($file, $first_line,";");
  }

  $monEleve= array($_POST["nom"],$_POST["prenom"],$_POST["date_nais"],$_POST["maison"],$_POST["total"],$_POST["pseudo"],$_POST["mdp"]);

  fputcsv($file, $monEleve,";");

  fclose($file);

  header("Location: inscriptionEleves.php?inscrip=success")
 ?>
