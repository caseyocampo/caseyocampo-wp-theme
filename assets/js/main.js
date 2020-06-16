// RESPONSIVE NAV MENU

function toggleNav() {
  var nav = document.getElementById("nav");
  if (nav.className === "nav-links") {
    nav.className += " responsive";
  } else {
    nav.className = "nav-links";
  }
}

// CLOSE DROPDOWN WHEN CLICKING ANYWHERE ON SCREEN

window.onclick = function (toggle) {
  if (!toggle.target.matches(".toggle-nav")) {
    var dropdowns = document.getElementsByClassName("nav-links");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("responsive")) {
        openDropdown.classList.remove("responsive");
      }
    }
  }
};

// ADD ACTIVE CLASS TO NAV LINK WHEN SELECTED

$(function () {
  var current = location.pathname;
  $("#nav li a").each(function () {
    var $this = $(this);
    // if the current path is like this link, make it active
    if ($this.attr("href").indexOf(current) !== -1) {
      $this.addClass("active");
    }
  });
});

// SHARE CURRENT PAGE VIA EMAIL

function sendMail() {
  var link =
    "mailto:?" +
    "&subject=" +
    escape("Hey! Check out this article: ") +
    document.title +
    "&body=" +
    escape("Found this article I think you might find interesting: ") +
    escape(window.location.href);
  window.location.href = link;
}
