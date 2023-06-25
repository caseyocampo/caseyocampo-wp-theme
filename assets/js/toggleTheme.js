// const toggleThemeButton = document.getElementById("toggleTheme")

// const themeTags = document.querySelectorAll("header, main, body, footer, .breadcrumbs-container, .sidebar--footer")

// toggleThemeButton.addEventListener("click", function () {
//   for (var i = 0; i < themeTags.length; i++) {
//     themeTags[i].classList.toggle("theme")
//     themeTags[i].classList.toggle("theme-alt")
//     themeTags[i].classList.toggle("theme-alt-text")
//     themeTags[i].classList.toggle("theme-alt-border")
//   }
// })

// NEW CODE

// const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]')
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
