<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le Titre</title>
        <link rel="stylesheet" type="text/css" href="multiplication.css"/>
    </head>
    <body>
      <h1>La maxi table de multiplication</h1>
      <!-- <form action="verifierConnexion.php" method="POST"> -->
      <?php
      ///// TODO: genre faire un if avant le nombreRand
        if(isset($_POST["nombreRand"]))
        {
          $nombreRandom = rand(0,10);
          echo "<form action='multiplication.php' method='POST'>
          <input id='nombrerRand' name='nombreRand' type='hidden' value=$nombreRandom>";
          for ($i=0; $i <= 10; $i++) {
            echo "
              $nombreRandom x $i = <input type='text' name='x$i'>
              <br \> ";
          }
          echo"<input id='nombrerRand' name='nombreRand' type='hidden' value=tab>";
          echo"<p><input type='submit' value='Corriger' required></p>
          </form>";
        }
      ?>
      <p></p>
      <?php
        $score = 0;
        if(isset($_POST["nombreRand"]))
        {
          for ($i=0; $i <= 10; $i++) {
            $verif = $_POST["nombreRand"]*$i;
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

    </body>

</html>
