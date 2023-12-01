document.addEventListener("input", function (event) {
  if (event.target.classList.contains("quantity-input")) {
    const index = parseFloat(event.target.dataset.index);
    const quantity = parseFloat(event.target.value);
    const productPrice = parseFloat(event.target.dataset.price);

    if (!isNaN(quantity) && !isNaN(productPrice)) {
      const totalPrice = quantity * productPrice;
      const totalPriceElement = document.querySelector(
        '.total-price[data-index="' + index + '"]'
      );

      if (totalPriceElement) {
        totalPriceElement.innerHTML =
          "Total : " + parseFloat(totalPrice.toFixed(2));
      }
    } else {
      console.error("Invalid quantity or product price");
    }
  }
});
