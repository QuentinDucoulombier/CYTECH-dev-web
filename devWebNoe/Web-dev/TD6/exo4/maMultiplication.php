<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Multiplication pour les noobs !</title>
    <style>
    <?php
      $note = 0;
      if(isset($_POST["table"])){
        $table =$_POST["table"];
        $note=0;
        for ($i=1; $i <= 10; $i++) {
          if($_POST[$i] == $i*$table){
            $note+=1;
            echo "
              div#test$i{
                color: green;
              }
            ";
          }else if($_POST[$i] == ""){
            $note+=0;
          }else{
            $note-=1;
            echo "
              div#test$i{
                color : red;
              }
            ";
          }
        }
      }else{
        $table = rand(0,20);
      }
    ?>
    </style>
  </head>
  <body>
    <?php include '../exo5/menu.php'; ?>


    <form action="maMultiplication.php" method="post">
      <?php
      echo "<h3>Table de $table</h3>";
        for ($i=1; $i <= 10; $i++) {
          if(isset($_POST[$i])){
            $pre_val = $_POST[$i];
          }else{
            $pre_val = '';
          }
          echo "<div id='test$i'>$table x $i  = <input class='$i' type='text' name='$i' value='$pre_val'></div>";
        }
        echo "<input type='hidden' name='table' value='$table'>";
        echo "<p> Votre note est: $note</p>";
      ?>

      <input type="submit" value="Corriger">
    </form>
    <a href="maMultiplication.php">Nouvelle fonction</a>
  </body>
</html>
