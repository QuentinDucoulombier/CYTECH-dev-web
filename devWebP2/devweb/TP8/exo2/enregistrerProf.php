<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le maxi Prof</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>

    </head>
    <body>
      <h1>Le maxi enregistrement</h1>
      <?php
        echo "Felicitation le prof ";
        echo $_POST["prenom"];
        echo " a bien ete enregistrer";

        if(!file_exists("infoProfesseurs.csv"))
        {
            $file = fopen("infoProfesseurs.csv","w");
            $listeTitre = array("Prenom","Nom","Matiere","Pseudo","mdp");
            fputcsv($file, $listeTitre, ";");
            fclose("infoEleves.csv");

        }
        $file = fopen("infoProfesseurs.csv","a");
        $list = array($_POST['prenom'], $_POST['nom'], $_POST['matiere'], $_POST['pseudo'], $_POST['password']);

        fputcsv($file, $list, ";");

        fclose($file);
      ?>
      <p>
      <button type="button" onclick="location.href = 'inscriptionProf.php';">Enregistrer un autre eleves</button>
      </p>
    </body>
</html>
