// Responsive navigation menu
const navBtn = document.getElementById("nav-btn")
const nav = document.getElementById("nav")
navBtn.addEventListener("click", toggleNav)

function toggleNav() {
  if (!nav.classList.contains("responsive")) {
    nav.classList.toggle("responsive")
    navBtn.setAttribute("aria-expanded", "true")
  } else if (nav.classList.contains("responsive")) {
    nav.classList.remove("responsive")
    navBtn.setAttribute("aria-expanded", "false")
  }
}
