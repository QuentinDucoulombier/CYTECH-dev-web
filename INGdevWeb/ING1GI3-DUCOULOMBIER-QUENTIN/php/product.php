<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" />
        <title>TASSTAITIDN</title>
        <link rel="icon" type="image/png" href="../img/testlogo.png"/>
        <script type="text/javascript" src="../js/script.js"></script>
      
    </head>
    <body>
        <!-- TODO automatiser tt ca en php-->
        <header id="Header">
            <?php include 'header.php'; ?>  
        </header>
        <section id="Menu">
            <?php include 'menu.php'; ?>
        </section>
        <section id="Main">
            <section id="Formulaire">
                <?php
                    //echo $_GET['cat'];
                    switch ($_GET['cat']) {
                        case 1:
                            include "products/100km.php";
                            break;
                        case 2:
                            include "products/1000km.php";
                            break;
                        case 3:
                            include "products/5000km.php";
                            break;
                        case 4:
                            include "products/10000km.php";
                            break;
                        default:
                            include "products/100km.php";
                            break;
                    }
                    
                ?>
                

                
                
            </section>
            <button type="button" id="hideStocks" onclick="hideStock()">Cacher stock</button>
            <p></p>
        </section>
        <footer id="Footer">
            <?php include 'footer.php'; ?>
        </footer>
        <script type="text/javascript" src="../js/panier.js"></script>
    </body>
</html>