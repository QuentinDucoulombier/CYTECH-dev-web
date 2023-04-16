


const commander = () => {
    let info = document.location.href.split("?")[1].split("&");

    let pate = "pate => "+info[0].split("=")[1];
    let sauce = "sauce => "+info[1].split("=")[1];
    let ingre_1 = "Ingrédient 1 => "+info[2].split("=")[1];
    let ingre_2 = "Ingrédient 2 => "+info[3].split("=")[1];
    let ingre_3 = "Ingrédient 3 => "+info[4].split("=")[1];
    let fidel = "Carte de fidélité => "+info[5].split("=")[1]+ ((info[5].split("=")[1]=="oui")?"<br><br> Merci de votre fidélité.":"");

    let div = document.getElementById("commande");

    let text_s = [pate,sauce,ingre_1,ingre_2,ingre_3,fidel];


    for(i in text_s){
        let text = text_s[i];
        let new_p = document.createElement("p");

        new_p.innerHTML = text;

        div.appendChild(new_p)
    }
}

const livrer = () => {
    let info = document.location.href.split("?")[1].split("&");

    let nom = "nom => "+info[0].split("=")[1].split('+').join(' ');
    let prenom = "prenom => "+info[1].split("=")[1].split('+').join(' ');
    let num = "Numéro de tel => "+info[2].split("=")[1].split('+').join('');
    let n = "N° => "+info[3].split("=")[1];
    let appelation = "Appelation => "+info[4].split("=")[1].split('+').join(' ');
    let code_p = "Code postale => "+info[5].split("=")[1].split('+').join('');
    let ville = "Ville => "+info[6].split("=")[1].split('+').join(' ');

    let div = document.getElementById("livrer");

    let text_s = [nom,prenom,num,n,appelation,code_p,ville];


    for(i in text_s){
        let text = text_s[i];
        let new_p = document.createElement("p");

        new_p.innerHTML = text;

        div.appendChild(new_p)
    }
}