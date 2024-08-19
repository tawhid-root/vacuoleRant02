document.addEventListener("DOMContentLoaded", function () {
  // Code to populate bus options dynamically
});

/*===============================
Sidebar
==================================*/

let sidebarObj = {
  barsIcon: document.querySelector(".bars"),
  xIcon: document.querySelector(".xIcon > i"),
  sidebar: document.getElementById("sidebar"),
  sidebarBefore: document.querySelector(".sidebarBefore"),
  insideContainer: document.querySelectorAll("#container > :not(#sidebar)"),
  exposeSidebar: function () {
    sidebarObj.sidebar.classList.replace("hide", "expose");
    sidebarObj.sidebarBefore.classList.replace("hide", "expose");
  },
  hideSidebar: function () {
    sidebarObj.sidebar.classList.replace("expose", "hide");
    sidebarObj.sidebarBefore.classList.replace("expose", "hide");
  },
};

sidebarObj.barsIcon.addEventListener("click", sidebarObj.exposeSidebar);
sidebarObj.xIcon.addEventListener("click", sidebarObj.hideSidebar);
sidebarObj.sidebarBefore.addEventListener("click", sidebarObj.hideSidebar);
