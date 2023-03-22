
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


