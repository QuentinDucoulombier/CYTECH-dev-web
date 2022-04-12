nom = new Array();
valeur = new Array();


url = window.location.search.slice(1,window.location.search.length);
console.log(url)

listParam = url.split("&");

console.log(listParam);
for(i=0;i<listParam.length;i++){
    laListe = listParam[i].split("=");
    nom[i] = laListe[0];
    valeur[i] = laListe[1];
    var key=valeur[i];
    key=key.split('+').join(' ') 
    valeur[i] = key ;
}

document.getElementById('nom').innerHTML=valeur[0];
document.getElementById('prénom').innerHTML=valeur[1];
document.getElementById('Telephone').innerHTML=valeur[2];
document.getElementById('numero').innerHTML=valeur[3];
document.getElementById('Appelation').innerHTML=valeur[4];
document.getElementById('CodePostal').innerHTML=valeur[5];
document.getElementById('Ville').innerHTML=valeur[6];
