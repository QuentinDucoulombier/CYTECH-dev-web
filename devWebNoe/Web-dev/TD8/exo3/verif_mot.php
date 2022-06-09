<?php
  session_start();

  $presence = false;
  $mot = strtoupper($_SESSION["mot"]);
  $lettre = strtoupper($_POST["lettre"]);
  $aray_index = [];

  for($i=0;$i<strlen($mot)-2;$i++){
      if($mot[$i]== $lettre){
          $presence = true;
          array_push($aray_index,$i);
      }
  }

  $myObj = new stdClass();
  $myObj->lettre = $lettre;
  $myObj->presence = $presence;
  $myObj->indexs = $aray_index;

  echo json_encode($myObj);


?>