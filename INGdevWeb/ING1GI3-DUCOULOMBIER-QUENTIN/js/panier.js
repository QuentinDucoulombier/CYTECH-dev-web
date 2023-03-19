
function changeQuantity(event) {
    const button = event.target;
    const direction = button.getAttribute('data-direction');
    const quantityInput = document.querySelector(`#${direction} .quantity`);
    const quantity = parseInt(quantityInput.value);
    const stockElement = document.querySelector(`#${direction} .stock`);
  
    // Check if stockElement exists before accessing its properties
    if (stockElement) {
      const stock = parseInt(stockElement.textContent);
      let newQuantity;
  
      if (button.classList.contains('plus')) {
        newQuantity = quantity + 1;
  
        // Disable plus button when stock is 0 or when quantity is equal to stock
        if (stock === 0 || newQuantity === stock) {
          button.disabled = true;
        }
  
        // Enable minus button when quantity is greater than 0
        if (newQuantity > 0) {
          const minusButton = document.querySelector(`#${direction} .minus`);
          minusButton.disabled = false;
        }
      } else if (button.classList.contains('minus')) {
        newQuantity = quantity - 1;
  
        // Disable minus button when quantity is 0
        if (newQuantity === 0) {
          button.disabled = true;
        }
  
        // Enable plus button when stock is greater than 0
        if (stock > 0) {
          const plusButton = document.querySelector(`#${direction} .plus`);
          plusButton.disabled = false;
        }
      }
  
      // Update quantity input value
      quantityInput.value = newQuantity;
    }
  }

const plusButtons = document.querySelectorAll('.plus');
const minusButtons = document.querySelectorAll('.minus');

plusButtons.forEach(button => {
  button.addEventListener('click', event => {
    const direction = event.target.dataset.direction;
    changeQuantity(direction, 1);
  });
});

minusButtons.forEach(button => {
  button.addEventListener('click', event => {
    const direction = event.target.dataset.direction;
    changeQuantity(direction, -1);
  });
});

  