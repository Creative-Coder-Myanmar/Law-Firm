<nav class="bg-primary shadow-md px-3 py-8 md:px-1 lg:px-4 z-10 animate__animated duration-200"
    id="nav">
    <div class="container flex flex-row justify-between items-center mx-auto">

      <div class="flex items-center">
        <h3 class="text-3xl font-bold text-slate-200">Law Firm</h3>
      </div>

      <ul
        class="flex flex-col md:flex-row space-x-0 md:space-x-6 space-y-6 md:space-y-0 text-lg text-slate-200 dark:text-slate-800 cursor-pointer / bg-primary fixed md:static top-0 -right-full md:right-0 w-full md:w-auto h-screen md:h-auto z-10 justify-center items-center duration-200 pe-48 md:pe-0"
        id="menuItem">

        <i class="absolute top-5 left-5 fa-solid fa-xmark flex md:hidden" onclick="closeMenu()"></i>

        <li onclick="closeMenu()">
          <a href="#home">Home</a>
        </li>
        <li onclick="closeMenu()">
          <a>Service</a>
        </li onclick="closeMenu()">
        <li>
          <a href="#">Team Members</a>
        </li>
        <li onclick="closeMenu()">
          <a href="#">Contact</a>
        </li>
      </ul>

      <div class="flex justify-center items-center space-x-3">
        <!-- Menuicon -->
        <i class="fa-solid fa-bars text-slate-200 dark:text-slate-800 text-2xl flex md:hidden" onclick="openMenu()"></i>
      </div>

    </div>
  </nav>
