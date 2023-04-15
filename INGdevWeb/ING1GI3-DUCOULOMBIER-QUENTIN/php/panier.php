<?php
    /**TODO:
     * [x]Cree un truc pour clear le panier 
     * Cree un switch pour la distance
     * 
     * 
     */
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
    <header id="Header">
        <?php include 'header.php'; ?>
    </header>
    <section id="Menu">
        <?php include 'menu.php'; ?>
    </section>
    <section id="Main">
       
        <?php
            echo "<h1>BIENVENUE ". $_SESSION["prenom"]."</h1>";
            echo '
            <table>
                <thead>
                    <th>Produits</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                </thead>
                <tbody>
            ';
            $panier = $_SESSION["panier"];
            $prixPanier = 0;
            foreach ($panier as $produit) {
                $prixPanier += $produit['prixTotal'];
                echo '
                    <tr>
                        <td>'.$produit['distance'] ." vers ". $produit['direction'].'</td>
                        <td>'. $produit['quantite'] .'</td>
                        <td>'. $produit['prix'] . " €".'</td>
                        <td>'. $produit['prixTotal'] . " €".'</td>
                    </tr>
                ';
            }
            echo '
                    <tr>
                        <td><strong>Prix Total</strong></td>
                        <td></td>
                        <td></td>
                        <td><strong>'.$prixPanier . " €".'</strong></td>
                </tbody>
            </table>';
        ?>

        <form method="POST" action="./ajoutPanier.php">
            <input class="bouton" type="submit" name="videPanier" value="Vider le panier"/>
        </form>
    </section>
    <footer id="Footer">
        <?php include 'footer.php'; ?>
    </footer>
    
</body>
</html>