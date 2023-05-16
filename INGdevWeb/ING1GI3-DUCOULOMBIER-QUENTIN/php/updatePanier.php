<?php
    $op = $_POST["operation"];
    $quantite = $_POST["quantite"];

    if($op == 0) {
        $quantite ++;
    }
    else {
        $quantite --;
    }
    echo $quantite;
    
?>
    