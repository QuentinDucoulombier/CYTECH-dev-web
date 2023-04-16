function imageSouris(enter){
  document.images.imageAffiche.src='https://images.affiches-et-posters.com//albums/3/2899/2899-affiche-film-jurassic-park.jpg';
  if(enter)
  {
    document.images.imageAffiche.src='img/kitty.jpeg'
  }
}

function clic()
{
  var img = document.querySelector("#tkt");
  var width = img.clientWidth;
  var height = img.clientHeight;
  alert("Nom : " + img.alt + "\nSource : " + img.src + "\nTaille : " + width + "*" + height);
}

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

function changement()
{
  var img = document.querySelector("#tkt");
  var tableauImage = ["https://fr.web.img2.acsta.net/c_310_420/pictures/15/10/13/15/12/514297.jpg", "https://fr.web.img4.acsta.net/c_310_420/pictures/19/03/14/10/37/5927961.jpg", "https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/18/66/15/78/19254683.jpg"];
  var tableauNom = ["Forest Gump", "La Liste De Schindler", "La ligne verte"];
  var long = tableauImage.length;
  var nbr = getRandomInt(long);
  img.src = tableauImage[nbr];
  img.alt = tableauNom[nbr];
}
