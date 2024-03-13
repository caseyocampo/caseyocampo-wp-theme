const toggleSwitch = document.getElementById("checkboxToggle")
const currentTheme = localStorage.getItem("theme")

if (currentTheme) {
  document.documentElement.setAttribute("data-theme", currentTheme)

  if (currentTheme === "dark") {
    toggleSwitch.checked = true
  }
}

function switchTheme(e) {
  console.log("clicked")
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark")
    localStorage.setItem("theme", "dark")
  } else {
    document.documentElement.setAttribute("data-theme", "light")
    localStorage.setItem("theme", "light")
  }
}

window.addEventListener("DOMContentLoaded", e => {
  if (toggleSwitch) {
    toggleSwitch.addEventListener("click", switchTheme, false)
  }
})
