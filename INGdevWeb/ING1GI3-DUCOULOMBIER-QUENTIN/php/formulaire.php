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
        <!--<script type="text/javascript" src="../js/scriptForm.js"></script>-->
    </head>
    <body>
        <header id="Header">
            <?php include 'header.php'; ?>  
        </header>
        <section id="Menu">
            <?php include 'menu.php'; ?>   
        </section>
        <section id="MainF">
            <section id="mainContact">
                <form action="./verifyForm.php" method="post" onsubmit="return validateForm()">
                    <label for="nom">Nom</label>
                    <?php
                        echo '<input type="text" id="nom" name="nom" value="'.$_GET['nom'].'" required="required">';
                    ?>
                    <span id="nomFormat" style="display:none;color:red;">(Format incorrect)</span>
                    <label for="prenom">Prénom</label>
                    <?php
                        echo '<input type="text" id="prenom" name="prenom" value="'.$_GET['prenom'].'" required="required">';
                    ?>
                    <span id="prenomFormat" style="display:none;color:red;">(Format incorrect)</span>
                    <label for="Telephone">Numero de Telephone</label>
                    <?php
                        echo '<input type="tel" id="Telephone" name="Telephone" value="'.$_GET['Telephone'].'" required="required">';
                    
                        if($_GET['errorNum']) {
                            echo '<span id="TelephoneFormat" style="color:red;">(Format incorrect: format francais)</span>';
                        }
                    ?>
                    <span id="TelephoneFormat" style="display:none;color:red;">(Format incorrect: format francais)</span>
                    <label for="Email">Email</label>
                    <?php
                        echo '<input type="email" id="Email" name="Email" value="'.$_GET['Email'].'"/>';
                    
                        if ($_GET['errorMail']) {
                            echo '<span id="EmailFormat" style="color:red;">(Format incorrect: format@site.adresse)</span>';
                        }
                    ?>
                    <span id="EmailFormat" style="display:none;color:red;">(Format incorrect: format@site.adresse)</span>
                    <label for="dReserva">Date de reservation</label>
                    <?php
                        echo '<input type="date" id="dReserva" name="dReserva"  value="'.$_GET['dReserva'].'" required="required">';
                    
                        if ($_GET['errorDate']) {
                            echo '<span id="dReservaFormat" style="color:red;">(Format incorrect: Date dans le passé)</span>';
                        }
                    ?>
                    <span id="dReservaFormat" style="display:none;color:red;">(Format incorrect: Date dans le passé)</span>
                    <label for="sMail">Sujet du mail</label>
                    <?php
                       echo '<input type="text" id="sMail" name="sMail" value="'.$_GET['sMail'].'" required="required">';
                    ?>
                    <span id="sMailFormat" style="display:none;color:red;">(Format incorrect)</span>
                    <label for="cMail">Contenu du mail</label>
                    <?php
                        if(!isset($_GET['sMail']))
                        {
                            $_GET['sMail'] = "Veuillez saisir le sujet du mail.";
                        }
                        echo '<textarea id="cMail" name="cMail" rows="4">'.$_GET['sMail'].'</textarea>';
                    
                    ?>
                    <?php
                        if ($_GET['errorContMail']) {
                            echo '<span id="cMail" style="color:red;">(Veuillez modifier le sujet du mail)</span>';
                        }
                    ?>
                    <label for=metier>Metiers</label>
                    <select name="metier" id="metier" required="required">
                        <option value="">-- Liste de metiers ^^ --</option>
                        <option value="Agriculteur">Agriculteur</option>
                        <option value="Meunier">Meunier</option>
                        <option value="Horticulteur">Horticulteur</option>
                        <option value="Aubergiste">Aubergiste</option>
                        <option value="Faucher">Faucher</option>
                        <option value="Serveur">Serveur</option>
                    </select>
                    <label>Genre</label>
                    <label for="Homme">Homme</label>
                    <input type="radio" id="Homme" name="Genre" value="Homme">
                    <label for="Femme">Femme</label>
                    <input type="radio" id="Femme" name="Genre" value="Femme">
                    
                    <p></p>
                    <input type="submit" id="validation" name="validation" value="Validation">
                </form>
            </section>
        </section>
        
        <footer id="FooterF">
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>