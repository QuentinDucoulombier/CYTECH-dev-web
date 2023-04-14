<?php

    session_start();    
    if (!isset( $_SESSION["panier"])) {
        $_SESSION["panier"] = array();
    }
    if($_POST["quantite"] > 0) 
    {
        $prixTotal = $_POST["prix"] * $_POST["quantite"];
        $nouveauProduit = array("distance" => $_POST["distance"], "direction" => $_POST["direction"], "prix" => $_POST["prix"], "quantite" => $_POST["quantite"], "prixTotal" => $prixTotal);
        array_push($_SESSION["panier"], $nouveauProduit);
    }
    header('Location:product.php?cat='.$_POST["cat"]);
?>