let hamb = document.querySelector(".hamb");
let navMenu = document.querySelector(".nav__menu");

hamb.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamb.classList.toggle("active");
    navMenu.classList.toggle("active");

}