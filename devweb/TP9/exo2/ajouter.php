<?php
  $title = $_POST["title"];
  $realisateur = $_POST["realisateur"];
  $dataDeReal = $_POST["dateDeReal"];
  $duree = $_POST["duree"];
  $newFilm = array("titre"=>$title, "realisateur"=>$realisateur, "annee de realisation"=>$dataDeReal, "duree"=>$duree);
  //$newfilmjson = json_encode($newFilm);
  //echo $newfilmjson;
  /*file_put_contents("mediatheque.json", $newfilmjson, FILE_APPEND | LOCK_EX);*/

  //$newfilmjson = json_encode($film);
  $oldJson = file_get_contents("mediatheque.json");
  $oldFilm = json_decode($oldJson, true);
  array_push($oldFilm, $newFilm);
  $newListejson = json_encode($oldFilm);
  //echo $newListejson;
  file_put_contents("mediatheque.json", $newListejson);
  


?>
