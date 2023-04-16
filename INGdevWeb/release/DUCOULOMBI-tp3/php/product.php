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
        <header id="Header">
            <?php include 'header.php'; ?>  
        </header>
        <section id="Menu">
            <?php include 'menu.php'; ?>
        </section>
        <section id="Main">
            <section id="Formulaire">
                <?php
                    $jsonfile = '../data/json/products.json';
                    $jsonString = file_get_contents($jsonfile);
                    $jsonData = json_decode($jsonString, true);
                    $distance;
                    switch ($_GET['cat']) {
                        case 1:
                            $distance = "100km";
                            break;
                        case 2:
                            $distance = "1000km";
                            break;
                        case 3:
                            $distance = "5000km";
                            break;
                        case 4:
                            $distance = "10000km";
                            break;
                        default:
                            $distance = "100km";
                        break;
                    }
                    echo '
                    <p></p>
                    <h2>De '.$jsonData[$distance]["distance"].'</h2>
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
                            for ($i=0; $i < 4; $i++) { 
                                echo '
                                    <tr>
                                        <td>'.$jsonData[$distance]["produits".$i]["direction"].'</td>
                                        <td>'.$jsonData[$distance]["produits".$i]["Description"].'</td>
                                        <td>'.$jsonData[$distance]["produits".$i]["Prix"].' €</td>
                                        <!--Je sais que data-direction cest pas vrmt fait pour ca mais cest quand meme style dans mon cas-->
                                        <td class="stock" data-direction="'.$jsonData[$distance]["produits".$i]["direction"].'">'.$jsonData[$distance]["produits".$i]["Stock"].'</td>
                                        <td>
                                            <form method="POST" action="./ajoutPanier.php">
                                                <button type="button" class="minus" data-direction="'.$jsonData[$distance]["produits".$i]["direction"].'">-</button>
                                                <input type="text" name="quantite" readonly class="quantity" value="0"/>
                                                <button type="button" class="plus" data-direction="'.$jsonData[$distance]["produits".$i]["direction"].'">+</button>
                                                
                                                <p></p>
                                                <input type="hidden" name="description" value="'.$jsonData[$distance]["distance"].'"/>
                                                <input type="hidden" name="cat" value="'.$_GET['cat'].'"/>
                                                <input type="hidden" name="stock" value="'.$jsonData[$distance]["produits".$i]["Stock"].'"/>
                                                <input type="hidden" name="distance" value="'.$distance.'"/>
                                                <input type="hidden" name="prix" value="'.$jsonData[$distance]["produits".$i]["Prix"].'"/>
                                                <input type="hidden" name="direction" value="'.$jsonData[$distance]["produits".$i]["direction"].'"/>
                                                <input class="add-to-cart" type="submit" name="panier" value="Ajouter au panier"/>
                                            </form>
                                           
                                        </td>
                                        <td><img src="'.$jsonData[$distance]["produits".$i]["Photo"].'" alt="Boussole vers le '.$jsonData[$distance]["produits".$i]["direction"].'" class="imgIll"  \></td>
                                    </tr>
                                ';
                            }
                    echo '        
                        </tbody>
                    </table>
                    ';
                    
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