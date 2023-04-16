

const main = () => {

  var img = document.getElementById("1img");
  var info = document.getElementById("1inf");
  var div = document.getElementById("1c");

  img.addEventListener("mouseenter", ()=>{
    img.src = "https://static.wikia.nocookie.net/heros/images/b/b1/Jeff_Jacquou_Zizou_Tuche.jpg/revision/latest/top-crop/width/360/height/450?cb=20211212130208&path-prefix=fr";
  });
  img.addEventListener("mouseleave", ()=>{
    img.src = "https://fr.web.img2.acsta.net/medias/nmedia/18/79/51/22/19732939.jpg";
    if(info.classList[1] == ""){


    }
  });

  img.addEventListener("click", ()=>{
      if(info.classList[1]== "hidden"){
        info.classList.remove("hidden");
        info.classList.add("showed");
      }else{
        info.classList.remove("showed");
        info.classList.add("hidden");
      }
  });

}

const changement = () => {
  const list_img = ["http://ide.perso.eisti.fr/images/meme/FB_IMG_1634585807659.jpg","http://ide.perso.eisti.fr/images/meme/FB_IMG_1616618850067.jpg","http://ide.perso.eisti.fr/images/meme/FB_IMG_1595085874321.jpg","http://ide.perso.eisti.fr/images/meme/FB_IMG_1606602264414.jpg","http://ide.perso.eisti.fr/images/meme/cotelf1qxem51.jpg"];
  var ln = list_img.length;
  var index = Math.floor(Math.random() * ln);

  var img = document.getElementById("2img");

  img.src = list_img[index];

}

window.onload = main;
