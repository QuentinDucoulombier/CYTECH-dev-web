<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" />
    <title>TASSTAITIDN</title>
    <link rel="icon" type="image/png" href="../img/testlogo.png"/>
    <script type="text/javascript" src="../js/script.js"></script>
  
</head>
<body>
    <?php
    echo "<h1>BIENVENUE ". $_SESSION["prenom"];

    ?>
    
</body>
</html>