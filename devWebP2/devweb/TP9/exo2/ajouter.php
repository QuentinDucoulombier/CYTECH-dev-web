<?php
  $title = $_POST["title"];
  $realisateur = $_POST["realisateur"];
  $dataDeReal = $_POST["dateDeReal"];
  $duree = $_POST["duree"];
  $newFilm = array("titre"=>$title, "realisateur"=>$realisateur, "annee de realisation"=>$dataDeReal, "duree"=>$duree);
  
  $oldJson = file_get_contents("mediatheque.json");
  $oldFilm = json_decode($oldJson, true);
  array_push($oldFilm, $newFilm);
  $newListejson = json_encode($oldFilm);
  //echo $newListejson;
  file_put_contents("mediatheque.json", $newListejson);


  
  $listeFilm = file_get_contents("mediatheque.json");
  $film = json_decode($listeFilm, true);

  echo "<table id = 'tabfilm'>";
  echo "<th> Titre </th>";
  echo "<th> Realisateur </th>";
  echo "<th> Date de realisation </th>";
  echo "<th> Durée </th>";
  foreach($film  as $R => $nouveauFilm){
      echo "<tr id='Tr_".$R."'>";
      foreach($nouveauFilm as $key => $value){
      echo "<td id='Td_".$R."_".$key."'>".$value."</td>";
      }
      echo "</tr>";
  }
  echo "</table>";
  //echo $( "#actualisation" ).load(window.location.href + " #actualisation" );

?>
