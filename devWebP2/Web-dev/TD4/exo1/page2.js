

const main = () => {
  var artist = window.location.href.split('#')[1] ;
  var png = "image/"+artist+ ".png";
  var alt = "image_de_"+artist;

  var img = document.getElementById("image");
  img.src = png;
  img.alt = alt;
}

window.onload = main;
