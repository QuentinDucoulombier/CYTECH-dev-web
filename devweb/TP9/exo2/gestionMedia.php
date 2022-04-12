<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Biblio</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
		<h1>La maxi bibli</h1>
        <h2>Liste des films</h2>
        <div id="listFilm">

            <?php
                //bonne idee de mettre le h2 et le div separée ?
                $listeFilm = file_get_contents("mediatheque.json");
                $film = json_decode($listeFilm, true);
                //echo "</div>;
                    echo "<table id = 'tabfilm'>";
                    echo "<th> Titre </th>";
                    echo "<th> Realisateur </th>";
                    echo "<th> Date de realisation </th>";
                    echo "<th> Durée </th>";
                    foreach($film  as $R => $nouveauFilm){
                        echo "<tr id='Tr_".$R."'>";
                        foreach($nouveauFilm as $key => $value){
                        echo "<td id='Td_".$R."_".$key."'>".$value."</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
            ?>
        </div>
        <h2>Ajouter un film</h2>
        <div id="formulaire">
            <p>
                Titre <input type="text" id="title" /><br />
                Realisateur <input type="text" id="realisateur" /><br />
                Date de realisation <input type="number" min="1900" max="2099" step="1" value="2000" id="dateDeReal" /><br />
                Durée <input type="number" id="duree" /><br />
            </p>
			<button type="button" onclick="ajout()">Ajouter le film</button>
        </div>
    </body>
</html>

<script>
        function ajout(){

            title=document.getElementById("title").value;
            realisateur=document.getElementById("realisateur").value;
            dateDeReal=document.getElementById("dateDeReal").value;
            duree=document.getElementById("duree").value;
						console.log(duree);

            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    document.getElementById("tabfilm").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "ajouter.php", true);
			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send("title="+title+"&realisateur="+realisateur+"&dateDeReal="+dateDeReal+"&duree="+duree);

        }


</script>
