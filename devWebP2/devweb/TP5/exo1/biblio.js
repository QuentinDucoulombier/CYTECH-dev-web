function addChild() {
    let ajout = document.getElementById("add").value;
    let node = document.createElement("option");
    let textnode = document.createTextNode(ajout);
    node.appendChild(textnode);
    document.getElementById("mySelect").appendChild(node);
}

function killChild() {
  let name = document.getElementById("supp").value;
  let list = document.getElementById("mySelect");
  let taille = document.getElementById("mySelect").children.length;
  let child = document.getElementById("mySelect").children;
  let trouve=0;
  console.log(name)
  let i=0;
  while(i<taille && !trouve){
      if (name==child[i].text){
          trouve=1;
          list.removeChild(child[i]);
      }
      i++;
    }
  }

  function myFunction(){

      var myWindow = window.open("", "coucou", "width=500,height=500");
      let list = document.getElementById("mySelect");
      let taille = document.getElementById("mySelect").children.length;
      let child = document.getElementById("mySelect").children;
      let i = 0;

    
      console.log(child[i].text)
      switch(child[i].text) {
        case "Les Sardines":
          myWindow.document.write("<h1>test</h1>");
          break;
        case 'Jack UZI':
          myWindow.document.write("<h1>test2</h1>");
          break;
        default:
          myWindow.document.write("<h1>t</h1>");
          break;
      }

      myWindow.document.write("<h2>coucou</h2>");

  }
