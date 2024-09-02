const body = document.querySelector("body");

const Menu = {
  open() {
    const mobileMenu = document.querySelector(".mobile-menu");
    mobileMenu.classList.add("active");
    body.style.overflowY = "hidden";
  },
  close() {
    const mobileMenu = document.querySelector(".mobile-menu");
    mobileMenu.classList.remove("active");
    body.style.overflowY = "inherit";
  },
};
