function delay(time) {
  return new Promise(resolve => setTimeout(resolve, time));
}

const id_to_coord = (id) => {
  let x  = id % 3;
  let y = Math.floor( id/3);
  return [x,y] ;
}
const coord_to_id= (coord) => {
  let id = 3*coord[1] + coord[0];
  return id;
}
const get_class = (id) => {
  return document.getElementById(id).className;
}


const victoire = ()=>{
  for(let i=0;i<3;i++){
    //lignes
    if(get_class(coord_to_id([0,i])) == get_class(coord_to_id([1,i])) && get_class(coord_to_id([0,i])) == get_class(coord_to_id([2,i])) && get_class(coord_to_id([0,i])) != "" ){
      return 1;
    }
    //colones
    if(get_class(coord_to_id([i,0])) == get_class(coord_to_id([i,1])) && get_class(coord_to_id([i,0])) == get_class(coord_to_id([i,2])) && get_class(coord_to_id([i,0])) != "" ){
      return 1;
    }
  }
  //diagonale 1
  if(get_class(coord_to_id([0,0])) == get_class(coord_to_id([1,1])) && get_class(coord_to_id([0,0])) == get_class(coord_to_id([2,2])) && get_class(coord_to_id([0,0])) != "" ){
    return 1;
  }
  //diagonale 2
  if(get_class(coord_to_id([2,0])) == get_class(coord_to_id([1,1])) && get_class(coord_to_id([2,0])) == get_class(coord_to_id([0,2])) && get_class(coord_to_id([2,0])) != "" ){
    return 1;
  }
}

const main = () => {
  var player = 0;
  const class_player_list = ["player1","player2"];

  var cases = document.getElementsByClassName('case');

  for(let c of cases){
    c.addEventListener('click',()=>{
      if(c.firstElementChild.classList[0] == class_player_list[player] || c.firstElementChild.classList.length == 0 ){
        c.firstElementChild.classList.add(class_player_list[player]);
        if(player == 0){
          player = 1;
          c.firstElementChild.classList.remove(class_player_list[player]);
        }else{
          player = 0;
          c.firstElementChild.classList.remove(class_player_list[player]);
        }

        if (victoire()){
          
          delay(100).then(() => {alert("Le joueur "+ (!player+1) +" a gagné");});
        }
      }



    });
  }


}


window.onload = main;
