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
            <p>
			<button type="button" onClick="start()">Commencer</button>
            </p>
		</div>
        <div id="etat">


        </div>

        <div id="lettre">

					<button  id="A" onclick="clique('a')">A</button>
					<button  id="B" onclick="clique('b')">B</button>
					<button  id="C" onclick="clique('c')">C</button>
					<button  id="D" onclick="clique('d')">D</button>
					<button  id="E" onclick="clique('e')">E</button>
					<button  id="F" onclick="clique('f')">F</button>
					<button  id="G" onclick="clique('g')">G</button>
					<button  id="H" onclick="clique('h')">H</button>
					<button  id="I" onclick="clique('i')">I</button>
					<button  id="J" onclick="clique('j')">J</button>
					<button  id="K" onclick="clique('k')">K</button>
					<button  id="L" onclick="clique('l')">L</button>
					<button  id="M" onclick="clique('m')">M</button>
					<button  id="N" onclick="clique('n')">N</button>
					<button  id="O" onclick="clique('o')">O</button>
					<button  id="P" onclick="clique('p')">P</button>
					<button  id="Q" onclick="clique('q')">Q</button>
					<button  id="R" onclick="clique('r')">R</button>
					<button  id="S" onclick="clique('s')">S</button>
					<button  id="T" onclick="clique('t')">T</button>
					<button  id="U" onclick="clique('u')">U</button>
					<button  id="V" onclick="clique('v')">V</button>
					<button  id="W" onclick="clique('w')">W</button>
					<button  id="X" onclick="clique('x')">X</button>
					<button  id="Y" onclick="clique('y')">Y</button>
					<button  id="Z" onclick="clique('z')">Z</button>

        </div>


    </body>
</html>


<script>
var liste = [];
var restant = 10;

		function start()
		{

			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function()
			{
					if (this.readyState == 4 && this.status == 200)
					{
						 document.getElementById("etat").innerHTML = this.responseText;

					}
			};
			xhttp.open("GET", "rand.php", true);
			xhttp.send();
		}

    function clique(lettre)
    {


        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
               document.getElementById("etat").innerHTML = this.responseText;

            }
        };
        xhttp.open("POST", "verification.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("lettre="+lettre+"&restant="+restant);


			}


</script>
