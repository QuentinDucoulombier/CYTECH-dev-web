<?php
    $maTaxe = $_GET["taxe"];
    $tva =0.2;
    $total = $tva * ($maTaxe);
    echo $total;
?>