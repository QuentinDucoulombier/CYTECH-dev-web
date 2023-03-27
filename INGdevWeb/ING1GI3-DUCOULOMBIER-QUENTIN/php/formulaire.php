<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" />
        <title>Blog Random</title>
        <script type="text/javascript" src="../js/scriptForm.js"></script>
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
                <!--TODO: Dans un premier temps il faut aller dans verifyForm.php pour ensuite rediriger-->
                <form action="./sendEmail.php" method="post" onsubmit="return validateForm()">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required="required">
                    <span id="nomFormat" style="display:none;color:red;">(Format incorrect)</span>
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required="required">
                    <span id="prenomFormat" style="display:none;color:red;">(Format incorrect)</span>
                    <label for="Telephone">Numero de Telephone</label>
                    <input type="tel" id="Telephone" name="Telephone" required="required">
                    <span id="TelephoneFormat" style="display:none;color:red;">(Format incorrect: format francais)</span>
                    <label for="Email">Email</label>
                    <input type="email" id="Email" name="Email" />
                    <span id="EmailFormat" style="display:none;color:red;">(Format incorrect: format@site.adresse)</span>
                    <label for="dReserva">Date de reservation</label>
                    <input type="date" id="dReserva" name="dReserva" required="required">
                    <span id="dReservaFormat" style="display:none;color:red;">(Format incorrect: Date dans le passé)</span>
                    <label for="sMail">Sujet du mail</label>
                    <input type="text" id="sMail" name="sMail"  required="required">
                    <span id="sMailFormat" style="display:none;color:red;">(Format incorrect)</span>
                    <label for="cMail">Contenu du mail</label>
                    <textarea id="cMail" name="cMail" rows="4">Veuillez saisir le sujet du mail.</textarea>
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
        
        <footer id="Footer">
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>