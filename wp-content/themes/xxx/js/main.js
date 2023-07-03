window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  var menu = document.getElementById("navbar");

  const scroll = window.scrollY;
  console.log(scroll);

  if (window.scrollY > 90) {
    menu.classList.add("scroll-menu");
  } else {
    menu.classList.remove("scroll-menu");
  }
}
