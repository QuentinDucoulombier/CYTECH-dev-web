<?php
  $score = 0;
  if(isset($_POST['nombreRand']))
  {        
    for ($i=0; $i <= 10; $i++) {
      $verif = $_POST['nombreRand']*$i;
      if ($verif == $_POST["x$i"])
      {
              
        $score ++;
      }
      else {
        $score --;
      }
    }

  }
  echo "Le score est de $score";
?>
