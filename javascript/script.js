let menu = document.querySelector("#menu-btn");
let navBar = document.querySelector(".header-navbar");
console.log("Hello");
const menuCLick = () => {
  menu.classList.toggle("fa-times");
  navBar.classList.toggle("header-navbar--active");
};
menu.addEventListener("click", menuCLick);
