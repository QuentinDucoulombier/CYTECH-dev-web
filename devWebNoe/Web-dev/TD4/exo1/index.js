const add_artist = () => {
    var nv_art = document.getElementById("add-text").value;

    var select = document.getElementById("mySelect");

    var select_cursize = parseInt(select.size);
    select.size = (select_cursize+1).toString();

    var nv_opt = document.createElement("option");

    nv_opt.innerHTML = nv_art;

    new_even(nv_opt);
    select.appendChild(nv_opt);
}


const del_artist = () => {
    var artist = document.getElementById("del-text").value;


    var art_list = document.getElementById("mySelect");

    let ln = art_list.children.length;

    for(let i=0;i<ln;i++){
        if(art_list.children[i].innerHTML == artist){
            art_list.removeChild(art_list.children[i]);

            var art_list_cursize = parseInt(art_list.size);
            art_list.size = (art_list_cursize-1).toString();

            break;
        }
    }
}

const new_even = (element) => {
  element.addEventListener("click", () => {
    window.open("page2.html#"+element.innerHTML);
  });
}

const main = () => {
  let options = document.getElementById("mySelect").children;
  var ln = options.length;
  for(let i=0;i<ln;i++){
    new_even(options[i]);
  }

}

window.onload= main;
