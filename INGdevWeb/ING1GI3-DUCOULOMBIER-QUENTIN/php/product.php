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
    <?php
        if($_SESSION['statut'] == "client")
        {
            echo '<body onload="hideStock2()">';
        }
        else
        {
            echo '<body>';
        }

    ?>
        <header id="Header">
            <?php include 'header.php'; ?>  
        </header>
        <section id="Menu">
            <?php include 'menu.php'; ?>
        </section>
        <section id="Main">
        <section id="Formulaire">
            <?php
                $serveur = "localhost";
                $user = "quentin";
                $pass = "*noeDu64*";
                $dbname = "voyages";
                $cnx = mysqli_connect($serveur, $user, $pass, $dbname);

                if (mysqli_connect_errno($cnx)) {
                    echo "Erreur de connexion à MySQL: " . mysqli_connect_error();
                    exit();
                }

                $distance;
                switch ($_GET['cat']) {
                    case 1:
                        $distance = "100 à 300 km";
                        break;
                    case 2:
                        $distance = "300 à 1 000 km";
                        break;
                    case 3:
                        $distance = "1 000 à 5 000 km";
                        break;
                    case 4:
                        $distance = "5 000 à 10 000 km";
                        break;
                    default:
                        $distance = "100 à 300 km";
                    break;
                }

                echo '
                <p></p>
                <h2>De '.$distance.'</h2>
                <table>
                    <thead>
                        <th>Direction</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th class="stock">Stock</th>
                        <th>Commande</th>
                        <th>Photo</th>
                    </thead>
                    <tbody>';
                mysqli_select_db($cnx, $dbname);
                $query = "SELECT * FROM produits WHERE distance = '$distance' LIMIT 4";
                $result = mysqli_query($cnx, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <tr>
                            <td>'.$row["direction"].'</td>
                            <td>'.$row["description"].'</td>
                            <td>'.$row["prix"].' €</td>
                            <td class="stock" data-direction="'.$row["direction"].'">'.$row["stock"].'</td>
                            <td>
                                <form method="POST" action="./ajoutPanier.php">
                                    <button type="button" class="minus" data-direction="'.$row["direction"].'" onclick=moins("'.$row["direction"].'")>-</button>
                                    <input type="text" name="quantite" readonly class="quantity" value="0"/>
                                    <button type="button" class="plus" data-direction="'.$row["direction"].'" onclick=plus("'.$row["direction"].'")>+</button>
                                    
                                    <p></p>
                                    <input type="hidden" name="description" value="'.$distance.'"/>
                                    <input type="hidden" name="cat" value="'.$_GET['cat'].'"/>
                                    <input type="hidden" name="stock" value="'.$row["stock"].'"/>
                                    <input type="hidden" name="distance" value="'.$distance.'"/>
                                    <input type="hidden" name="prix" value="'.$row["prix"].'"/>
                                    <input type="hidden" name="direction" value="'.$row["direction"].'"/>
                                    <input class="add-to-cart" type="submit" name="panier" value="Ajouter au panier"/>
                                </form>
                                            
                            </td>
                            <td><img src="'.$row["photo"].'" alt="Boussole vers le '.$row["direction"].'" class="imgIll"  \></td>
                        </tr>
                    ';
                }

                echo '</tbody>
                </table>';
                
                mysqli_close($cnx);
            ?>

        <?php
            if($_SESSION['statut'] == "admin")
            {
                echo '
                </section>

                    <button type="button" id="hideStocks" onclick="hideStock()">Cacher stock</button>
                    <p></p>
                </section>';
            }
            
        ?>
        <footer id="Footer">
            <?php include 'footer.php'; ?>
        </footer>
        <script type="text/javascript" src="../js/panier.js"></script>
    </body>
</html>