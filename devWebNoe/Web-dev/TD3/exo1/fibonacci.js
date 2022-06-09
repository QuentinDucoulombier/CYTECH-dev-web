


function fibonacci(rang , tab) {
  if (rang ==0 ) {
    return tab[rang];
  }else {
    let temp = tab[1];
    tab[1] = tab[0]+tab[1];
    tab[0] = temp;
    return fibonacci(rang-1 ,tab);
  }
}





function main() {
  let rang = parseInt(document.getElementById('rang').value);


  if (Number.isInteger(rang)){
    console.log(fibonacci(rang,[0n,1n]));
  }else {
    console.log("probleme");
  }

}


function cancel() {
  document.getElementById('rang').value ="";
}
