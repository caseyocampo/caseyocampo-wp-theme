// Responsive navigation menu
const nav = document.getElementById("nav-icon")

nav.addEventListener("click", toggleNav)

function toggleNav() {
  const nav = document.getElementById("nav")
  if (nav.className === "nav-links") {
    nav.className += " responsive"
  } else {
    nav.className = "nav-links"
  }
}

// Get the responsive menu button
const navBtn = document.getElementById("nav-btn")

navBtn.setAttribute("aria-expanded", false)

navBtn.addEventListener("click", () => {
  const ariaExpanded = navBtn.getAttribute("aria-expanded")
  if (ariaExpanded === "true") {
    navBtn.setAttribute("aria-expanded", false)
  } else {
    navBtn.setAttribute("aria-expanded", true)
  }
  toggleNav()
})
