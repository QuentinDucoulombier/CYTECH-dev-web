<?php
    $mesValeurs = json_decode($_GET["valeurs"], true);

    $total = 0;
    $a = $mesValeurs["t1"];
    $b = $mesValeurs["t2"];
    $c = $mesValeurs["t3"];
    $delta = $b**2 - 4*$a*$c;

    echo "<p>Le delta est ".$delta."</p>";
    if ($delta > 0) {
        echo "<p>Il y a donc 2 solution : <br />";
        $x1 = (-$b - sqrt($delta))/(2*$a);
        $x2 = (-$b + sqrt($delta))/(2*$a);
        echo "x1 : ".$x1."<br />";
        echo "x2 : ".$x2."<br /></p>";
    }
    elseif ($delta == 0) {
        echo "<p>Il y a 1 solution :<br />";
        $x = (-$b)/(2*$a);
        echo "x : ".$x."</p>";
    }
    else {
        echo "<p> Il n'y a pas de solution reel</p>";
    }

?>
