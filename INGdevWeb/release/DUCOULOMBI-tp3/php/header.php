<?php
    session_start();
    
        echo
        '<h1>TASSTAITIDN</h1>
        <img src="../img/testlogo.png" alt="logo of the company" id="logo"/>
        <ul id="ensMenuHor">
            <li id="menuHor"><a href="index.php#mainAcceuil">Acceuil 🏠</a></li>
            <li id="menuHor"><a href="product.php?cat=1">100-300 km 🛣️</a></li>
            <li id="menuHor"><a href="product.php?cat=2">300-1 000 km 🛳️</a></li>
            <li id="menuHor"><a href="product.php?cat=3">1 000-5 000 km ✈️</a></li>
            <li id="menuHor"><a href="product.php?cat=4">5 000-10 000 km 🚀</a></li>
            <li id="menuHor"><a href="formulaire.php">Contact 💌</a></li>
            <li id="menuHor" class="panier"><a href="panier.php">Panier 🛒</a></li>';
        if (empty($_SESSION['prenom']) || (!isset($_SESSION['prenom'])))
        {
            echo
            '<li id="menuHor"><a href="connexion.php">Connexion 🔒</a></li>';
            
        }
        else 
        {
        echo '        
            <form method="POST" action="./index.php">
                <input class="boutonDeco" type="submit" name="OUT" value="Deconnexion 🔓"/>
            </form>';
        }   
        echo '</ul>';

?>