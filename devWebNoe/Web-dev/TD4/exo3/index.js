var tab = [];
var carte_dispo = ["carte1.png","carte1.png","carte2.png","carte2.png","carte3.png","carte3.png","carte4.png","carte4.png","carte5.png","carte5.png","carte6.png","carte6.png","carte7.png","carte7.png","carte8.png","carte8.png","carte9.png","carte9.png","carte10.png","carte10.png","carte10.png"];
var nb_carte_retourner = 0;
var cartes_retourner =[];

var cartes_trouver = [];

const addevents = () => {
  var images = document.getElementsByTagName('img');

  for(let i=0;i< images.length ;i++){
    let image = images[i];
    image.addEventListener("click", ()=>{
      let id = parseInt(image.id);
      if(cartes_trouver.indexOf(id) == -1){
        if(nb_carte_retourner<2){
          if(nb_carte_retourner==0 || cartes_retourner[0].id != id){
            let lienpng = "./image/"+tab[id];

            image.src =lienpng;
            cartes_retourner.push(image);
            nb_carte_retourner++;
          }

        }else{
          nb_carte_retourner = 0;

          if(cartes_retourner[0].src != cartes_retourner[1].src){
            cartes_retourner[0].src ="./image/fond.png";
            cartes_retourner[1].src ="./image/fond.png";
          }else{
            cartes_trouver.push(id);
          }
          cartes_retourner = [];
        }
      }
    });
  }

}


const remplir = (tab) =>{
  for(let i = 0;i<20;i++){
    let index = Math.floor(Math.random() * (20-i));
    carte = carte_dispo[index];
    carte_dispo.splice(index,1);

    tab.push(carte);
  }
  console.log(tab);
}

const main = () =>{
  addevents();
  remplir(tab);
}

window.onload = main;
