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
			<button type="button" onclick="start()">Commencer</button>
            </p>
		</div>
        <div id="etat">            
            <?php
                $coup = 10;
                
                
            ?>
        </div>
        <div id="lettre">
           <input type="submit" id="A" value="a">
           <input type="submit" id="B" value="b">
           <input type="submit" id="C" value="c">
           <input type="submit" id="D" value="d">
           <input type="submit" id="E" value="e">
           <input type="submit" id="F" value="f">
           <input type="submit" id="G" value="g">
           <input type="submit" id="H" value="h">
           <input type="submit" id="I" value="i">
           <input type="submit" id="J" value="j">
           <input type="submit" id="K" value="k">
           <input type="submit" id="L" value="l">
           <input type="submit" id="M" value="m">
           <input type="submit" id="N" value="n">
           <input type="submit" id="O" value="o">
           <input type="submit" id="P" value="p">
           <input type="submit" id="Q" value="q">
           <input type="submit" id="R" value="r">
           <input type="submit" id="S" value="s">
           <input type="submit" id="T" value="t">
           <input type="submit" id="U" value="u">
           <input type="submit" id="V" value="v">
           <input type="submit" id="W" value="w">
           <input type="submit" id="X" value="x">
           <input type="submit" id="Y" value="y">
           <input type="submit" id="Z" value="z">
        </div> 
        
    </body>
</html>


<script>
    /*function clique()
    {        
        document.getElementById("lettre").onclick = null;
        //document.getElementById("reponse").innerHTML+='<p>test</p>';
    }*/
    function start(){
        A=document.getElementById("A").value;
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
        Z=document.getElementById("Z").value;
        
        

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
        xhttp.send("A="+A+"&B="+B+"&C="+C+"&D="+D+"&E="+E+"&F="+F+"&G="+G+"&H="+H+"&I="+I+"&J="+J+"&K="+K+"&L="+L+"&M="+M+"&N="+N+"&O="+O+"&P="+P+"&Q="+Q+"&R="+R+"&S="+S+"&T="+T+"&U="+U+"&V"=+V+"&W="+W+"&Y"=+Y+"&Z"+Z);

}
    

</script>