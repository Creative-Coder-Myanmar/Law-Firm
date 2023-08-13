const menuItem = document.getElementById('menuItem');
  function openMenu() {
    document.body.classList.add('overflow-hidden');
    menuItem.classList.remove('-right-full');
    menuItem.classList.add('right-0');
  }

  function closeMenu() {
    document.body.classList.remove('overflow-hidden');
    menuItem.classList.add('-right-full');
    menuItem.classList.remove('right-0');
  }

// AOS Animation
AOS.init({
    duration: 1600,
});

var lastScrollTop = 0;

const navbar = document.getElementById("navbar");
const topArrow = document.querySelector("#top-arrow");

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
    topArrow.classList.remove("bottom-[-50%]", 'opacity-0');
    topArrow.classList.add("md:bottom-12","bottom-[5%]", 'opacity-[1]');
} else if (scrollTop < lastScrollTop && scrollTop < 300) {
    navbar.classList.remove(
    "fixed",
    "w-full",
    "top-0",
    "animate__fadeInDown"
    );
    topArrow.classList.remove("md:bottom-12","bottom-[5%]", 'opacity-[1]');
    topArrow.classList.add("bottom-[-50%]", 'opacity-0');

}

lastScrollTop = scrollTop;
});

function scrollUp(){
    window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
}
