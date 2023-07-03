document.querySelector(".menu-icon").addEventListener("click", function () {
  console.log("clicked");
  document.querySelector(".nav-bar-menu").classList.add("open");
});

document.querySelector(".close-icon").addEventListener("click", function () {
  document.querySelector(".nav-bar-menu").classList.remove("open");
});
