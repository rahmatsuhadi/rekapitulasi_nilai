const hamBurger = document.querySelector(".button-sidebar");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});