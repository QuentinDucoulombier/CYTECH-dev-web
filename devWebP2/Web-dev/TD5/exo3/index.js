var argent = 0;
var contenu = [];

const rem_pan_arg_cont = () =>{
  document.getElementById('argent').innerHTML = argent;

  document.getElementsByName("montant")[0].value = argent;

  let ln = contenu.length;
  console.log(ln);
  document.getElementsByName("contenu")[0].value = "";
  for(let i=0;i<ln;i++){
    if(i==0 ){
      document.getElementsByName("contenu")[0].value += contenu[i];
    }else{
      document.getElementsByName("contenu")[0].value += "-"+contenu[i];
    }
  }

}

const rem_pan = (el) => {
  var pan = document.getElementById('panier');

  el.addEventListener("click",function panier(){
    pan.removeChild(el);

    el.removeEventListener("click",panier);
    el.classList.add("dispo");

    contenu.splice(contenu.indexOf(el.firstElementChild.innerHTML.toLowerCase()), 1);

    document.getElementById('dispo').appendChild(el);
    argent-=2.5;
    rem_pan_arg_cont()
    add_pan(el);
  });
}

const add_pan = (el) => {
  var dispo =document.getElementById('dispo');

  el.addEventListener("click",function disponible(){
    dispo.removeChild(el);
    el.removeEventListener("click",disponible);

    el.classList.remove("dispo");

    contenu.push(el.firstElementChild.innerHTML.toLowerCase());

    document.getElementById('panier').appendChild(el);
    argent += 2.5;
    rem_pan_arg_cont();
    rem_pan(el);
  });
}


const main = () =>{
  argent = parseInt(document.getElementById('argent').innerHTML);

  var dispo =document.getElementById('dispo');
  var list_dispo = dispo.children;
  let ln = list_dispo.length;

  for(let i=0;i<ln;i++){
    let disp = list_dispo[i];
      add_pan(disp);
  }
}



const page_2 = () => {
  var infos = window.location.href.split("?")[1].split("&");
  
  var montant = infos[0].split("=")[1];
  var contenus = infos[1].split("=")[1].split("-");

  for(i in contenus){
    contenus[i] = contenus[i].split('+').join(' ');
  }

  document.getElementById("argent").innerHTML = "Montant du panier : "+montant+"€";


  var div = document.getElementById("content");

  for(i in contenus){
    let new_p = document.createElement("p");  

    new_p.innerHTML = contenus[i];

    div.appendChild(new_p);
  }

}