
const plusButtons = document.querySelectorAll(".plus");
const minusButtons = document.querySelectorAll(".minus");

/*On desactive le moins de base car a value a 0*/
minusButtons.forEach(button => {
  button.disabled = true;
});

/*Script pour le bouton +*/
plusButtons.forEach(button => {
  button.addEventListener("click", () => {
    
    const direction = button.getAttribute("data-direction");
    const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);
    const quantity = button.parentElement.querySelector(".quantity");
    let currentQuantity = parseInt(quantity.value);
    currentQuantity++;
    
    quantity.value = currentQuantity;
    if (stock <= 1) {
      button.disabled = true;
    }
    
    button.parentElement.querySelector(".minus").disabled = false;
  });

  // Vérifier et désactiver le bouton "+" si le stock est à zéro
  const direction = button.getAttribute("data-direction");
  const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);
  if (stock <= 0) {
    button.disabled = true;
  }
});


/*Script pour le bouton -*/
minusButtons.forEach(button => {
  button.addEventListener("click", () => {
  
    const direction = button.getAttribute("data-direction");
    const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);
    
    const quantity = button.parentElement.querySelector(".quantity");
    let currentQuantity = parseInt(quantity.value);
    if (currentQuantity <= 0 || stock <= 1) {
      button.disabled = true;
    }
    currentQuantity--;

    quantity.value = currentQuantity;
    

    button.parentElement.querySelector(".plus").disabled = false;
  });
});
