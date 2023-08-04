const menuItem = document.getElementById('menuItem');
  function openMenu() {
    menuItem.classList.remove('-right-full');
    menuItem.classList.add('-right-48');
  }

  function closeMenu() {
    menuItem.classList.add('-right-full');
    menuItem.classList.remove('-right-48');
  }
