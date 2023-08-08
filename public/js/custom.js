const menuItem = document.getElementById('menuItem');
  function openMenu() {
    menuItem.classList.remove('-right-full');
    menuItem.classList.add('right-0');
  }

  function closeMenu() {
    menuItem.classList.add('-right-full');
    menuItem.classList.remove('right-0');
  }

// AOS Animation
AOS.init({
    duration: 1600,
});

var lastScrollTop = 0;

const navbar = document.getElementById("navbar");
const topArrow = document.getElementById("top-arrow");

window.addEventListener("scroll", function () {
var scrollTop =
    window.pageYOffset || document.documentElement.scrollTop;

if (scrollTop > lastScrollTop && scrollTop > 400) {
    navbar.classList.add(
    "fixed",
    "w-full",
    "top-0",
    "animate__fadeInDown"
    );
    topArrow.classList.remove("hidden");
} else if (scrollTop < lastScrollTop && scrollTop < 300) {
    navbar.classList.remove(
    "fixed",
    "w-full",
    "top-0",
    "animate__fadeInDown"
    );
    topArrow.classList.add("hidden");
}

lastScrollTop = scrollTop;
});

function scrollUp(){
    window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
}
