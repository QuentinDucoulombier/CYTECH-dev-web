var array_lettre = [];
var alphabet = "abcdefghijklmnopqrstuvwxyz"
const nv_mot = (method) => {
  array_lettre = [];
  for(let i=0;i<alphabet.length;i++){
    let l = alphabet[i];
    document.getElementById(l).style.background = "lightgray";
  } 

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status ==200){
          document.getElementById("nb-restant").innerHTML = 10;
          var mot = document.getElementById("mot");
          mot.innerHTML = "";

          for(let i=0;i<parseInt(this.responseText,10);i++){
            mot.innerHTML += "_ ";
          }
      }
  };
  if(method == "nouveau_mot"){
    xhttp.open("POST","recup_mot.php",true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("nv_mot=nv");
  }
  
}

const affichage = () => {

  var mot = document.getElementById("mot").innerHTML;
  let nv_mot_array = new Array(mot.length/2).fill("_ ");
  let nv_mot="";

  array_lettre.forEach(lettre => {
    lettre['indexs'].forEach(i =>{ nv_mot_array[i]=lettre["lettre"]+" ";});
  });

  nv_mot_array.forEach(lettre =>{ nv_mot += lettre;});
  document.getElementById("mot").innerHTML = nv_mot;
}


const lettre = (l) => {

    document.getElementById(l).disabled = true;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status ==200){
          let responce = JSON.parse(this.responseText);
          if(responce["presence"]==true){
            document.getElementById(l).style.background = "green";
            array_lettre.push(responce);
            affichage();
          }else{          
            document.getElementById("nb-restant").innerHTML = parseInt(document.getElementById("nb-restant").innerHTML)-1;
            document.getElementById(l).style.background = "red";
          }
        }
    };

    xhttp.open("POST","verif_mot.php",true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("lettre="+l);


}
