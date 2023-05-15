function fonction(operation){


    
    valeur=document.getElementsByClassName("quantity").value;


    cpt ++;
    xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementsByClassName("stock").innerHTML = this.responseText; //renvoyer la meme fonction pour faire le tab en html avant + rajouter l'etat en gros faire presque comme dans le td9

            }


        };

        xhttp.open("POST", "updatePanier.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("quantite="+valeur+"operation"+operation);

}

function plus() {

    fonction(true);
}

function moins() {
    fonction(false);
}