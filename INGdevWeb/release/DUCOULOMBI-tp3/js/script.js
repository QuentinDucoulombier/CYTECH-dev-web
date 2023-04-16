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

