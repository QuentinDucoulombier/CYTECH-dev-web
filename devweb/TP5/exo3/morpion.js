function ajouterOnClick() {
    var images = document.getElementsByTagName('img');
    for (var i = images.length-1; i >= 0; i--){
      images[i].onclick = reveal;
    }
}

function getRandomInt(max) {
    return Math.floor(Math.random() * max) + 1;
}
var fruits = []
        
//var i = 0;
function reveal(e)
{
    var elementImg = e.target;
    //console.log(elementImg);
    var id = "carte"+getRandomInt(5);
    elementImg.src = "img/"+id+".png";

    //temp.appendChild(elementImg);
    //console.log(elementImg)
    fruits.push(elementImg);
    if(fruits[1] != null)
    {
        for (let i = 0; i < fruits.length; i++) 
        {    
            console.log(fruits[i]);
            console.log(fruits[i+1]);
            
            if(fruits[i].src == fruits[i+1].src)
            {
                console.log("vamos");
                    //elementImg.src = "img/carte10.png";
            }
            else
            {
                fruits[i].src = "img/fond.png";
                fruits[i+1].src = "img/fond.png";
            }
            
        }
    }
}



document.body.onload = ajouterOnClick;