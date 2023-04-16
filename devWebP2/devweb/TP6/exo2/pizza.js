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
}
if(valeur[6] > 5)
{
    valeur[6] = "colere";
}
else
{
    valeur[6] = "oklm"
}

    document.getElementById('pate').innerHTML=valeur[0];
    document.getElementById('base').innerHTML=valeur[1];
    document.getElementById('Ingredient1').innerHTML=valeur[2];
    document.getElementById('Ingredient2').innerHTML=valeur[3];
    document.getElementById('Ingredient3').innerHTML=valeur[4];
    document.getElementById('fidelite').innerHTML=valeur[5];
    document.getElementById('cuistot').innerHTML=valeur[6];
