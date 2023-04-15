
const plusButtons = document.querySelectorAll(".plus");
const minusButtons = document.querySelectorAll(".minus");

/*On desactive le moins de base car a value a 0*/
minusButtons.forEach(button => {
  button.disabled = true;
});

/*Script pour le bouton -*/
plusButtons.forEach(button => {
  button.addEventListener("click", () => {
    
    const direction = button.getAttribute("data-direction");
    const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);
    const quantity = button.parentElement.querySelector(".quantity");

    let currentQuantity = parseInt(quantity.value);
    currentQuantity++;

    quantity.value = currentQuantity;
    if (currentQuantity >= stock) {
      button.disabled = true;
    }
    
    button.parentElement.querySelector(".minus").disabled = false;
  });
});

/*Script pour le bouton +*/
minusButtons.forEach(button => {
  button.addEventListener("click", () => {
  
    const direction = button.getAttribute("data-direction");
    const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);
    
    const quantity = button.parentElement.querySelector(".quantity");
    let currentQuantity = parseInt(quantity.value);
    currentQuantity--;

    quantity.value = currentQuantity;
    if (currentQuantity <= 0) {
      button.disabled = true;
    }

    button.parentElement.querySelector(".plus").disabled = false;
  });
});