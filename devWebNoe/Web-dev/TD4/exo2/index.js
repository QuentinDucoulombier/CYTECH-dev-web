var argent = 0;

const maj_arg = () =>{
  document.getElementById('argent').innerHTML = argent;
}

const maj = (el) => {
  var pan =document.getElementById('panier');

  el.addEventListener("click",function panier(){
    pan.removeChild(el);

    el.removeEventListener("click",panier);
    el.classList.add("dispo");

    document.getElementById('dispo').appendChild(el);
    argent+=2.5;
    maj_arg()
    new_maj(el);
  });
}

const new_maj = (el) => {
  var dispo =document.getElementById('dispo');

  el.addEventListener("click",function disponible(){
    if(argent >= 2.5){
      dispo.removeChild(el);
      el.removeEventListener("click",disponible);

      el.classList.remove("dispo");


      document.getElementById('panier').appendChild(el);
      argent -= 2.5;
      maj_arg();
      maj(el);
    }
  });
}


const main = () =>{
  argent = parseInt(document.getElementById('argent').innerHTML);

  var dispo =document.getElementById('dispo');
  var list_dispo = dispo.children;
  let ln = list_dispo.length;

  for(let i=0;i<ln;i++){
    let disp = list_dispo[i];
      new_maj(disp);
  }
}





window.onload = main;
