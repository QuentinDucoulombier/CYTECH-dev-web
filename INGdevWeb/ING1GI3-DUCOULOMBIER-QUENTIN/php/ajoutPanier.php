<?php

    session_start();    
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = array();
    }
   
    $produitTrouve = false;
    // Cherche si le produits existe deja dans le panier
    foreach ($_SESSION["panier"] as $key => $produit) {
        $ajoutPanier = $_SESSION["panier"][$key]["quantite"] +  $_POST["quantite"];
        // On vérifie si le produit est déjà présent dans le panier
        if ($produit["distance"] == $_POST["distance"] && $produit["direction"] == $_POST["direction"]) {
            //Cas ou on veut rajouter plus d'articles qu'il y a de stock
            if ($ajoutPanier > $_POST["stock"]) {
                //On ajoute le max possible d'articles en stocks
                $_SESSION["panier"][$key]["quantite"] = $_POST["stock"];
            }
            else {
                //S'il y en a assez on l'ajoute 
                $_SESSION["panier"][$key]["quantite"] += $_POST["quantite"];
            }
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
        $_SESSION["panier"] = array();
        header('Location:panier.php');
    }
    else 
    {
        header('Location:product.php?cat='.$_POST["cat"]);
    }
?>