<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le maxi Eleve</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>

    </head>
    <body>
      <h1>Le maxi enregistrement</h1>
      <?php
        echo "Felicitation l'eleve ";
        echo $_POST["prenom"];
        echo " a bien ete enregistrer";

        if(!file_exists("infoEleves.csv"))
        {
            $file = fopen("infoEleves.csv","w");
            $listeTitre = array("Prenom","Nom","Date","Maison","Points","Pseudo","mdp");
            fputcsv($file, $listeTitre, ";");
            fclose("infoEleves.csv");

        }
        $file = fopen("infoEleves.csv","a");
        $list = array($_POST['prenom'], $_POST['nom'], $_POST['dateDeNaissance'], $_POST['maison'], $_POST['Points'], $_POST['pseudo'], $_POST['password']);

        fputcsv($file, $list, ";");

        fclose($file);
      ?>
      <p>
      <button type="button" onclick="location.href = 'inscriptionEleve.php';">Enregistrer un autre eleves</button>
      </p>
    </body>
</html>
