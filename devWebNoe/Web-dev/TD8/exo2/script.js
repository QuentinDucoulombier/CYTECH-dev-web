const info = ["titre","realisateur","annee de realisation","duree"];

const ajout = () => {
  var table = document.getElementById("mytable");

  console.log(table);

  var titre = document.getElementById('titre').value;
  var real = document.getElementById('real').value;
  var annee = document.getElementById('annee').value;
  var duree = document.getElementById('duree').value;

  var xhttp = new XMLHttpRequest();
  

  xhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status ==200){
        var tr = document.createElement("tr");

        const array_responce = JSON.parse(this.responseText);

        for(let i=0 ; i<4;i++){
          let td = document.createElement("td");
          td.innerHTML = array_responce[info[i]];
          tr.appendChild(td);
        }
        
        table.appendChild(tr);
      }
  };

  xhttp.open("POST","ajouter.php",true);

  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhttp.send("titre="+titre+"&real="+real+"&annee="+annee+"&duree="+duree);
}
