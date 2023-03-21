function agrandir(img)
{
    img.style.width = "10em";
}

function reduire(img)
{
    img.style.width = "8em";
}

function hideStock()
{
    let stock = document.getElementsByClassName("stock");
    
    if(document.getElementById("hideStocks").textContent == "Afficher stock")
    {
        for (let i = 0; i < stock.length; i++) {
            stock[i].style.display = "revert"; //C'est moche mais display ca ne marche pas
                                               //Je sais que revert est encore en developpement    
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


