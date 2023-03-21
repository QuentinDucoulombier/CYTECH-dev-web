
const plusButtons = document.querySelectorAll(".plus");
const minusButtons = document.querySelectorAll(".minus");

/*TODO:Desactiver le bouton de base*/

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

minusButtons.forEach(button => {
  button.addEventListener("click", () => {
  
    const direction = button.getAttribute("data-direction");
    const stock = parseInt(document.querySelector(`tr td.stock[data-direction="${direction}"]`).textContent);
    
  
    const quantity = button.parentElement.querySelector(".quantity");
    
    // Décrémentation de la quantité
    let currentQuantity = parseInt(quantity.value);
    currentQuantity--;
    
  
    quantity.value = currentQuantity;
    if (currentQuantity <= 0) {
      button.disabled = true;
    }
    
    
    button.parentElement.querySelector(".plus").disabled = false;
  });
});