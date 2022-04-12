<?php
    $data = file("mots.txt");
    $max = count($data);
    $chiffreRand = rand(0,$max);
    $motRand = $data[$chiffreRand];
    

?>
