<?php
    // $myObj = new stdClass();
    // $myObj->titre = $_POST["titre"];
    // $myObj->realisateur = $_POST["real"];
    // $myObj->(annee de realisation) = $_POST["annee"];
    // $myObj->duree = $_POST["duree"];

    $json = file_get_contents("mediatheque.json");

    $data = json_decode($json, true);
    
    $new_data_json = '{
        "titre":"'.$_POST['titre'].'",
        "realisateur":"'.$_POST['real'].'",
        "annee de realisation": '.$_POST['annee'].',
        "duree": '.$_POST['duree'].'}';

    $new_data = json_decode($new_data_json,true);

    array_push($data,$new_data);
    
    $myJSON = json_encode($data);

    file_put_contents("mediatheque.json", $myJSON);


    echo $new_data_json;
?>