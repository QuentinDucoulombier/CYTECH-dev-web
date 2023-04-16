<?php
  $a=$_POST["a"];
  $b=$_POST["b"];
  $c=$_POST["c"];

  $det = pow($b,2) - 4*$a*$c;

  if($a!=0){
    if($det>0){
      $r1 = (-$b+sqrt($det))/(2*$a);
      $r2 = (-$b-sqrt($det))/(2*$a);

      echo $a."x²+".$b."x+".$c."=0 ,
        admet 2 solutions: <strong>x1</strong> = $r1 et <strong>x2</strong> = $r2 .
        ";

    }elseif ($det==0) {
      $r = (-$b)/(2*$a);

      echo $a."x²+".$b."x+".$c."=0 ,
        admet 1 solutions: <strong>x0</strong> = $r .
        ";
    }else{
      echo $a."x²+".$b."x+".$c."=0 ,
        n'admet pas de solution réelle.
        ";
    }
  }else{
    echo "Attention <strong>a</strong> doit être différent de 0.";
  }

 ?>
