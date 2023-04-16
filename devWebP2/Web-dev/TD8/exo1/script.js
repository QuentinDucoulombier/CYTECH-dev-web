
const resoudre = () => {
  var p = document.getElementById("res");

  var a = document.getElementsByName('a')[0].value;
  var b = document.getElementsByName('b')[0].value;
  var c = document.getElementsByName('c')[0].value;

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status ==200){
        p.innerHTML = this.responseText;
      }
  };

  xhttp.open("POST","calcul.php",true);

  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhttp.send("a="+a+"&b="+b+"&c="+c);
}
