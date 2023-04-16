/* -------------------------------------------------  */
//Q: associer la fonction déplacer à l'attribut onclick de chaque image
function ajouterOnClick() {
  var images = document.getElementsByTagName('img');
  for (var i = images.length-1; i >= 0; i--){
    images[i].onclick = deplacer;
    
  }
}
/* -------------------------------------------------  */


/* -------------------------------------------------  */
/* mes noms de films (à afficher dans le bloc choix   */
var noms = [
  'Jurassic Parc',
  'Star Wars',
  'Hobbit',
  'Cite Or',
  'Le dernier Empereur',
  'Apocalypse now'
]
/* -------------------------------------------------  */


/* -------------------------------------------------  */
/* À partir d'ici c'est à toi de jouer !!!            */
/* -------------------------------------------------  */



/* -------------------------------------------------  */
/* Mes variables */
/* récupération des élements de la page */
/* le bloc magasin; le bloc choix, le bloc panier ... */

var elementSrc = document.getElementById("magasin");
var elementDest = document.getElementById("choix");
var panier = document.getElementById("panier");
var taille = 0;

/* à completer */

/* -------------------------------------------------  */


function deplacer(e) {
  /* On selection l'image à deplacer */
  var elementImg = e.target;
  var newP = document.createElement('p');
  newP.textContent = elementImg.alt;
  newP.id = "test";
  elementDest.appendChild(newP);
  
  //console.log(elementSrc.children);
  /*  Si l'image est à gauche alors je la met à droite*/
  if(elementImg.parentNode === elementSrc){

    /* 1- ajouter elementImg à elementDest        */
    /*var newP = document.createElement('p');
    newP.textContent = elementImg.alt;
    elementDest.appendChild(newP);*/
    elementDest.appendChild(elementImg);
    
	/* 2- créer un nouvel objet de type balise span         */

    /* 3- creer un nouvel objet de type texte pour indiquer */
	/* le titre du film (dispo dans le tableau noms)        */

	/* 4 - ajouter ce texte à l'objet span                  */
	/* 5- ajouter le span juste avant elemenIMG             */
    /* 6- compter le nb d'images choisies (prix)  */
    /* à completer */
    
    taille = elementDest.children.length/2-0.5;
    taille = taille * 2.5;
    
  }
  else
  {
    if(elementImg.parentNode === elementDest){
     // console.log(elementDest.children);
      
    /* Si l'image est à droite alors je la met à gauche
    else{*/
      var x = document.getElementById("test");
      
      
      elementDest.removeChild(x);
      elementDest.removeChild(newP);
      elementDest.removeChild(elementImg);
      
      elementSrc.appendChild(elementImg);
      //console.log(elementSrc.children);
      taille = taille - 2.5;
      
    }
	/* 1. supprimer l'image à elementSrc                   */
    /* 2. ajouter l'image à elementSrc                     */
    /* 3. enlever l'image du compteur d'images choisies    */
  
  }
  document.getElementById('prix').innerHTML = taille;
  /* Ne pas oublier d'incrémenter le prix dans le panier */
}


/* ------------------------------------------------------------  */
/* On charge la fonction ajouterOnClicj au chargement de la page */
/* ------------------------------------------------------------  */
document.body.onload = ajouterOnClick;
/* ------------------------------------------------------------  */



