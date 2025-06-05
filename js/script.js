const body = document.querySelector("body"),
      navsidebar = body.querySelector(".navsidebar"),
      toggle = body.querySelector(".menuToggle");

// Minimise the sidebar when the user click to the toggle button. 
toggle.addEventListener("click", () => {
  navsidebar.classList.toggle("close");
});