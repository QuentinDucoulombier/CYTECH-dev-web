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

/*
function animationAjout() 
{
    document.getElementsByClassName('panier').className = 'panierAdd';
}


// Sélectionnez l'icône du panier
const panierIcon = document.querySelector('.panier a');

// Sélectionnez le formulaire
const formulaire = document.querySelector('form');

// Ajoutez un gestionnaire d'événements pour la soumission du formulaire
formulaire.addEventListener('submit', (event) => {
  // Empêchez le comportement par défaut du formulaire
  event.preventDefault();
  
  // Ajoutez la classe "animate" à l'icône du panier
  panierIcon.classList.add('animate');
  
  // Attendez que l'animation soit terminée, puis supprimez la classe "animate"
  setTimeout(() => {
    panierIcon.classList.remove('animate');
  }, 100000);
});*/

function fonction(operation){


    const direction = button.getAttribute("data-direction");
    const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);
    console.log(stock);


    xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200)
            {
                //console.log(this.responseText);
                document.getElementsByClassName("stock").innerHTML = this.responseText;

            }


        };

        xhttp.open("POST", "updatePanier.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("quantite="+stock+"operation"+operation);

}

function plus() {

    fonction(true);
}

function moins() {
    fonction(false);
}