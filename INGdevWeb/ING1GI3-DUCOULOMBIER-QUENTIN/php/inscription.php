<!--TODO: Rajouter le fait de pouvoir voir le mdp (ca prend 10 sec en js type=pasword devient texte)-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link rel="stylesheet" type="text/css" href="../css/inscription.css"/>
        <link rel="icon" type="image/png" href="../img/testlogo.png"/>

    </head>
    <body>
      <header id="Header">
        <?php include 'header.php'; ?>
      </header>

      <div class="form">
        <h1 id="titre">Inscrivez-vous</h1>
        <form action="./enregistrer.php" method="POST">
          <div class="input-container ic2">
            <input type="text" name="prenom" id="prenom" class="input" placeholder=" " required/>
            <div class="cut"></div>
            <label for="prenom" class="placeholder">Prénom*</label>
            </div>
            <div class="input-container ic2">
              <input  type="text" name="nom" id="nom" class="input" placeholder=" " required/>
              <div class="cut"></div>
              <label for="nom" class="placeholder">Nom*</label>
            </div>
            <div class="input-container ic2">
              <input type="email" id="email" name="email" size="30" class="input" placeholder=" " required/>
              <div class="cut"></div>
              <label for="email" class="placeholder">Email*</label>
            </div>
            <div class="input-container ic2">
              <input input type="text" id="pseudo" name="pseudo" class="input" placeholder=" " required/>
              <div class="cut"></div>
                <label for="pseudo" class="placeholder">Pseudo*</label>
            </div>
            <div class="input-container ic2">
              <input type="password" id="password" name="password" class="input" placeholder=" " required/>
              <div class="cut"></div>
              <label for="password" class="placeholder">Mot de passe*</label>
            </div>
            <p><input type="submit" value="Inscription" class="submit" required></p>

        </form>

</html>
