/*TODO: Reafficher les stock*/

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
    for (let i = 0; i < stock.length; i++) {
        stock[i].style.display = "none";
    }   è
}


