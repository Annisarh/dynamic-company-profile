const menu = document.querySelector("#menu-icon");
const navbar = document.querySelector("#nav-bar");
const tombol = document.querySelector("#tombol");

menu.addEventListener("click", function () {
    navbar.classList.toggle("hidden");
});
