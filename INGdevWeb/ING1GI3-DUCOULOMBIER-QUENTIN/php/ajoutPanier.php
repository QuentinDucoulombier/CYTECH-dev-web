<?php

    session_start();    
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = array();
    }
    
    $produitTrouve = false;
    // Cherche si le produits existe deja dans le panier
    foreach ($_SESSION["panier"] as $key => $produit) {
        //$ajoutPanier = $_SESSION["panier"][$key]["quantite"] +  $_POST["quantite"];
        // On vérifie si le produit est déjà présent dans le panier
        if ($produit["distance"] == $_POST["distance"] && $produit["direction"] == $_POST["direction"]) {
            //Cas ou on veut rajouter plus d'articles qu'il y a de stock (avant l'implementation de la modification de la bdd)
            
            /*if ($ajoutPanier > $_POST["stock"]) {
                //On ajoute le max possible d'articles en stocks
                //$_SESSION["panier"][$key]["quantite"] = $_POST["stock"];
            }
            else {*/
                //S'il y en a assez on l'ajoute 
            $_SESSION["panier"][$key]["quantite"] += $_POST["quantite"];
            //}
            $produitTrouve = true;
            break;
        }
    }
    
    // Si le produit n'est pas déjà présent dans le panier, l'ajouter normalement
    if (!$produitTrouve) {
        if($_POST["quantite"] > 0 && $_POST["quantite"] <= $_POST["stock"]) {
            $prixTotal = $_POST["prix"] * $_POST["quantite"];
            $nouveauProduit = array("distance" => $_POST["distance"], "direction" => $_POST["direction"], "prix" => $_POST["prix"], "quantite" => $_POST["quantite"], "prixTotal" => $prixTotal, "stock" => $_POST["stock"], "description" => $_POST["description"]);
            array_push($_SESSION["panier"], $nouveauProduit);
        }
    }
    
    if(isset($_POST['videPanier']))
    {
        /*Reinitialise les stocks et vide le panier*/
        $_SESSION["panier"] = array();
        include './createDataBase.php';
        header('Location:panier.php');
    }
    else 
    {
        /*Decremente le panier en fonction du nombre d'articles rajouter*/
        $serveur = "localhost";
        $user = "quentin";
        $pass = "*noeDu64*";
        $cnx = mysqli_connect($serveur, $user, $pass);

        if (mysqli_connect_errno($cnx)) {
            echo "Erreur de connexion a MySQL: " . mysqli_connect_error();
            exit();
        }

        $dbname = "voyages";
        mysqli_select_db($cnx, $dbname);

        $decrement = $_POST["quantite"];
        $queryDecrementStock = "UPDATE produits SET stock = stock - $decrement WHERE distance = '{$_POST["distance"]}' AND direction = '{$_POST["direction"]}'";

        if (mysqli_query($cnx, $queryDecrementStock)) {
            echo "Stock décrémenté avec succès.";
        } else {
            echo "Erreur lors de la décrémentation du stock : " . mysqli_error($cnx);
        }

        mysqli_close($cnx);
        header('Location:product.php?cat='.$_POST["cat"]);
    }

    
?>