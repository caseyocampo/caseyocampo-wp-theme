// Responsive navigation menu
const navBtn = document.getElementById("nav-btn")

navBtn.addEventListener("click", toggleNav)

function toggleNav() {
  const navList = document.getElementById("nav")
  if (navList.className === "nav-links") {
    navList.className += " responsive"
    navBtn.setAttribute("aria-expanded", true)
  } else {
    navList.className = "nav-links"
    navBtn.setAttribute("aria-expanded", false)
  }
}
