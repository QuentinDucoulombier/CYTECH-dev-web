function ajouterOnClick() {
    var images = document.getElementsByTagName('img');
    for (var i = images.length-1; i >= 0; i--){
      images[i].onclick = deplacer;
      
    }
}

var elementSrc = document.getElementById("magasin");
var elementDest = document.getElementById("choix");


function deplacer(e) {
    
    var elementImg = e.target;
    var newP = document.createElement('p');
    newP.textContent = elementImg.alt;
    newP.id = "test";
    elementDest.appendChild(newP);
    

    if(elementImg.parentNode === elementSrc){

      elementDest.appendChild(elementImg);
      console.log(elementDest.children);
      //document.getElementById("film1").innerHTML = "Jurrasic";
      
    }
}