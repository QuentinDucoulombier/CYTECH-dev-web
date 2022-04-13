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
            <?php
                $coup = 10;
                
                
            ?>
        </div>
        <div id="lettre">
           <input type="button" id="lettreZ"  value="a">
           <input type="button" id="lettre"  value="b">
           <input type="button" id="lettre"  value="d">
           <input type="button" id="lettre"  value="c">
           <input type="button" id="lettre"  value="e">
           <input type="button" id="lettre"  value="f">
           <input type="button" id="lettre"  value="g">
           <input type="button" id="lettre"  value="h">
           <input type="button" id="lettre"  value="i">
           <input type="button" id="lettre"  value="j">
           <input type="button" id="lettre"  value="k">
           <input type="button" id="lettre"  value="l">
           <input type="button" id="lettre"  value="m">
           <input type="button" id="lettre"  value="n">
           <input type="button" id="lettre"  value="o">
           <input type="button" id="lettre"  value="p">
           <input type="button" id="lettre"  value="q">
           <input type="button" id="lettre"  value="r">
           <input type="button" id="lettre"  value="s">
           <input type="button" id="lettre"  value="t">
           <input type="button" id="lettre"  value="u">
           <input type="button" id="lettre"  value="v">
           <input type="button" id="lettre"  value="w">
           <input type="button" id="lettre"  value="x">
           <input type="button" id="lettre"  value="y">
           <input type="button" id="lettre"  value="z">
        </div> 
        
    </body>
</html>


<script>
    var btn = document.querySelector('input');
    btn.onclick = clique();

    function clique()
    {    
        //$lettre = array();
        const lettre = ['test', document.getElementById("lettreZ").value];
        lettre.push(document.getElementById("lettreZ").value);
        console.log(lettre);
           
        
        //document.getElementById("lettre").onClick = null;
        //document.getElementById("reponse").innerHTML+='<p>test</p>';
    }
    function start(){
        
        /*A=document.getElementById("A").value;
        B=document.getElementById("B").value;
        C=document.getElementById("C").value;
        D=document.getElementById("D").value;
        E=document.getElementById("E").value;
        F=document.getElementById("F").value;
        G=document.getElementById("G").value;
        H=document.getElementById("H").value;
        I=document.getElementById("I").value;
        J=document.getElementById("J").value;
        K=document.getElementById("K").value;
        L=document.getElementById("L").value;
        M=document.getElementById("M").value;
        N=document.getElementById("N").value;
        O=document.getElementById("O").value;
        P=document.getElementById("P").value;
        Q=document.getElementById("Q").value;
        R=document.getElementById("R").value;
        S=document.getElementById("S").value;
        T=document.getElementById("T").value;
        U=document.getElementById("U").value;
        V=document.getElementById("V").value;
        W=document.getElementById("W").value;
        X=document.getElementById("X").value;
        Y=document.getElementById("Y").value;
        Z=document.getElementById("Z").value;*/
        
        

        title=document.getElementById("title");
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
               //document.getElementById("actualisation").innerHTML = ;
                
            }
        };
        xhttp.open("POST", "ajouter.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("A="+A+"&B="+B+"&C="+C+"&D="+D+"&E="+E+"&F="+F+"&G="+G+"&H="+H+"&I="+I+"&J="+J+"&K="+K+"&L="+L+"&M="+M+"&N="+N+"&O="+O+"&P="+P+"&Q="+Q+"&R="+R+"&S="+S+"&T="+T+"&U="+U+"&V="+V+"&W="+W+"&Y="+Y+"&Z="+Z);


    }
    

</script>