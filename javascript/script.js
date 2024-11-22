let menu = document.querySelector("#menu-btn");
let navBar = document.querySelector(".header-navbar");
console.log("Hello");
const menuCLick = () => {
  menu.classList.toggle("fa-times");
  console.log("Hello World");
};
menu.addEventListener("click", menuCLick);
