<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Pendu</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1>Super jeu du pendu</h1>
        <div id="start">
			<button type="button" onclick="start()">Commencer</button>
		</div>
        <div id="etat">
            <?php
                $coup = 10;
                
            ?>
        </div>
        <div id="lettre">
            <button type="button" id="lettre" onclick="clique()">A</button>
        </div> 
    </body>
</html>


<script>
    function clique()
    {        
        document.getElementById("lettre").disabled = true;
    }
    

</script>