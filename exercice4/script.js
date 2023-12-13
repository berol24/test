function showPopup() {
  document.getElementById("popup").style.display = "block";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}

function toggleMenu() {
  var nav = document.querySelector("nav");
  nav.classList.toggle("show");
}

let $MenuButton = document.querySelector(".MenuButton");

let $CloseButton = document.querySelector(".CloseButton");

$MenuButton.addEventListener("click", function () {
  $CloseButton.style.display = "block";
  $MenuButton.style.display = "none";
});

$CloseButton.addEventListener("click", function () {
  $MenuButton.style.display = "block";
  $CloseButton.style.display = "none";
});
