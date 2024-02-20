
document.addEventListener("DOMContentLoaded", function() {
  // Éléments des curseurs
  const kilometerSlider = document.getElementById("kilometer-max");
  const priceSlider = document.getElementById("price-max-input");
  const yearSlider = document.getElementById("year-max-input");

  // Éléments pour afficher les valeurs actuelles des curseurs
  const kilometerDisplay = document.getElementById("kilometer-max-value");
  const priceDisplay = document.getElementById("price-max-value");
  const yearDisplay = document.getElementById("year-max-value");

  const resetButton = document.getElementById("reset-button");

  // Mise à jour des valeurs et affichage des véhicules correspondants
  function updateFilter() {
      const maxKilometer = parseInt(kilometerSlider.value, 10);
      const maxPrice = parseInt(priceSlider.value, 10);
      const maxYear = parseInt(yearSlider.value, 10);

      kilometerDisplay.textContent = `${maxKilometer} km`;
      priceDisplay.textContent = `${maxPrice} €`;
      yearDisplay.textContent = maxYear;

      // Filtrage des véhicules
      const cars = document.querySelectorAll(".cars-filter");
      cars.forEach(car => {
          const kilometer = parseInt(car.getAttribute("data-kilometer"), 10);
          const price = parseInt(car.getAttribute("data-price"), 10);
          const year = parseInt(car.getAttribute("data-year"), 10);

          if (kilometer <= maxKilometer && price <= maxPrice && year <= maxYear) {
              car.style.display = "";
          } else {
              car.style.display = "none";
          }
      });
  }
  kilometerSlider.addEventListener("input", updateFilter);
  priceSlider.addEventListener("input", updateFilter);
  yearSlider.addEventListener("input", updateFilter);

  // Fonction de réinitialisation
  function resetFilters() {
      kilometerSlider.value = 180000;
      priceSlider.value = 100000;
      yearSlider.value = 2023;

      kilometerDisplay.textContent = "180000 km";
      priceDisplay.textContent = "100000 €";
      yearDisplay.textContent = "2023";

      const cars = document.querySelectorAll(".cars-filter");
      cars.forEach(car => car.style.display = "");

      updateFilter();
  }
  resetButton.addEventListener("click", resetFilters);
  updateFilter();
});