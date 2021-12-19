// RESPONSIVE NAV MENU
function toggleNav() {
  var nav = document.getElementById('nav')
  if (nav.className === 'nav-links') {
    nav.className += ' responsive'
  } else {
    nav.className = 'nav-links'
  }
}

// CLOSE DROPDOWN WHEN CLICKING ANYWHERE ON SCREEN
window.onclick = function (toggle) {
  if (!toggle.target.matches('.toggle-nav')) {
    var dropdowns = document.getElementsByClassName('nav-links')
    var i
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i]
      if (openDropdown.classList.contains('responsive')) {
        openDropdown.classList.remove('responsive')
      }
    }
  }
}

// ADD ACTIVE CLASS TO NAV LINK WHEN SELECTED
$(function () {
  var current = location.pathname
  $('#nav li a').each(function () {
    var $this = $(this)
    // if the current path is like this link, make it active
    if ($this.attr('href').indexOf(current) !== -1) {
      $this.addClass('active')
    }
  })
})

// SHARE CURRENT PAGE VIA EMAIL
function sendMail() {
  var link =
    'mailto:?' +
    '&subject=' +
    escape('Check out this article: ') +
    document.title +
    '&body=' +
    escape('Article: ') +
    escape(window.location.href)
  window.location.href = link
}

// Get the button
var mybutton = document.getElementById('scrollToTop')

// When the user scrolls down 300px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction()
}

function scrollFunction() {
  if (
    document.body.scrollTop > 300 ||
    document.documentElement.scrollTop > 300
  ) {
    mybutton.style.display = 'block'
  } else {
    mybutton.style.display = 'none'
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0
  document.documentElement.scrollTop = 0
}
