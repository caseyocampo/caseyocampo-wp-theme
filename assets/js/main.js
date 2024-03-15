// Responsive navigation menu
const navBtn = document.getElementById("nav-btn")
const nav = document.getElementById("nav")
navBtn.addEventListener("click", toggleNav)

function toggleNav() {
  if (nav.className === "flex") {
    nav.classList.add("responsive")
    navBtn.setAttribute("aria-expanded", "true")
  } else if (nav.className === "flex responsive") {
    nav.classList.remove("responsive")
    navBtn.setAttribute("aria-expanded", "false")
  }
}
