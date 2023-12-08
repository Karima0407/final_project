// pour le panier:

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
// pour la barre de recherche
document.addEventListener("DOMContentLoaded", function () {
  var recherche = document.getElementById("searchInput");
  var articles = document.querySelectorAll(".container-vetements");

  recherche.addEventListener("input", function () {
    var searchTerm = recherche.value.toLowerCase();
    articles.forEach(function (article) {
      var articleName = article.querySelector("h4").textContent.toLowerCase();
      if (articleName.startsWith(searchTerm)) {
        article.style.display = "block";
        console.log('oui');
      } else {
        console.log('non');
        article.style.display = "none";
      }
    });
  });
});

//pour le fichier detail(pour la partie politique de Retour)
  function toggleText() {
    var hiddenText = document.getElementById("hiddenText");

    if (hiddenText.style.display === "none") {
      hiddenText.style.display = "block";
    } else {
      hiddenText.style.display = "none";
    }
  }

  document.addEventListener("click", function (event) {
    var isClickInside = document
      .getElementById("hiddenText")
      .contains(event.target);
    var isTitleClick = event.target.classList.contains("custom-title");

    if (!isClickInside && !isTitleClick) {
      document.getElementById("hiddenText").style.display = "none";
    }
  });