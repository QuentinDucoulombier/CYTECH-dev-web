/* C'est deux fonctions ne sont plus utilisé car c'est plus propre en css*/
/*
function agrandir(img)
{
    img.style.width = "10em";
}

function reduire(img)
{
    img.style.width = "8em";
}
*/

function hideStock()
{
    let stock = document.getElementsByClassName("stock");
    
    if(document.getElementById("hideStocks").textContent == "Afficher stock")
    {
        for (let i = 0; i < stock.length; i++) {
            stock[i].style.display = "revert"; 
        } 
        document.getElementById("hideStocks").innerHTML="Cacher stock";
    }
    else
    {
        for (let i = 0; i < stock.length; i++) {
            stock[i].style.display = "none";  
        }  
        document.getElementById("hideStocks").innerHTML="Afficher stock";
    }
    
}

function hideStock2() {
    let stock = document.getElementsByClassName("stock");

    for (let i = 0; i < stock.length; i++) {
        stock[i].style.display = "none";  
    }  
}


function fonction(operation,direction){


    //const direction = button.getAttribute("data-direction");
    const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);


    xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200)
            {
                document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent = this.responseText;

            }


        };
        xhttp.open("POST", "updatePanier.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("quantite="+stock+"&operation="+operation);

}

function plus(direction) {

    fonction(1,direction);
}

function moins(direction) {
    fonction(0,direction);
}