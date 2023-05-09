const burgerBtn = document.querySelector("#burger");
const stickElems = document.querySelectorAll("#stick");
const menu = document.querySelector("#menu");

let isActive = false;

burgerBtn.addEventListener("click", function() {
  if (isActive) {
    stickElems.forEach(stick => stick.classList.remove("active"));
    burgerBtn.classList.remove("active");
    menu.classList.remove("active");
    isActive = false;
  } else {
    stickElems.forEach(stick => stick.classList.add("active"));
    menu.classList.add("active");
    burgerBtn.classList.add("active");
    isActive = true;
  }
});
