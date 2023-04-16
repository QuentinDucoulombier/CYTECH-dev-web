<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Mes dvds !</h1>
    <table id="mytable">
        <tr>
            <th>Titre</th>
            <th>Réal</th>
            <th>Date de réal</th>
            <th>Durée</th>
            
        </tr>
    <?php
        $data = file_get_contents("mediatheque.json");
        $data_json = json_decode($data,TRUE);
 
        foreach($data_json as $film){
            echo "<tr>";
            echo "<td>".$film['titre']."</td>";
            echo "<td>".$film['realisateur']."</td>";
            echo "<td>".$film['annee de realisation']."</td>";
            echo "<td>".$film['duree']."</td>";
            echo "</tr>";
        }
        
    ?>
    </table>

    <h2>Ajouter un film:</h2>
    <div><label for="titre">Titre : </label><input type="text" id="titre" value="test"></div>
    <div><label for="real">Réal : </label><input type="text" id="real" value="test"></div>
    <div><label for="annee">Date de réal : </label><input type="text" id="annee" value="1"></div>
    <div><label for="duree">Durée : </label><input type="text" id="duree" value="2"></div>
    <button onclick="ajout()">Ajouter</button>

  </body>
</html>
