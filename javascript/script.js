let menu = document.querySelector("#menu-btn");
let navBar = document.querySelector(".header-navbar");
const menuCLick = () => {
  menu.classList.toggle("fa-times");
  navBar.classList.toggle("header-navbar--active");
};
window.onscroll = () => {
  menu.classList.remove("fa-times");
  navBar.classList.remove("active");
};
menu.addEventListener("click", menuCLick);

var swiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
