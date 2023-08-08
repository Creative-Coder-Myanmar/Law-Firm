<div id="home" />
<nav class="bg-primary shadow-md px-3 py-7 md:px-1 lg:px-4 z-10 animate__animated duration-200" id="navbar">
    <div class="container flex flex-row justify-between items-center mx-auto">

        <div class="flex items-center">
            <a href="/" class="text-3xl font-bold text-slate-200">Law Firm</a>
        </div>

        <ul class="flex flex-col md:flex-row space-x-0 md:space-x-6 space-y-6 md:space-y-0 text-lg text-slate-200 dark:text-slate-800 cursor-pointer / bg-primary fixed md:static top-0 -right-full md:right-0 w-full md:w-auto h-screen md:h-auto z-10 justify-center items-center duration-200 pe-48 md:pe-0"
            id="menuItem">

            <i class="absolute top-5 left-5 fa-solid fa-xmark flex md:hidden" onclick="closeMenu()"></i>

            <li onclick="closeMenu()">
                <a href="#top">Home</a>
            </li>
            <li onclick="closeMenu()">
                <a href="#service">Service</a>
            </li>
            <li onclick="closeMenu()">
                <a href="{{ route('user.members.index') }}">Team Members</a>
            </li>
            <li onclick="closeMenu()">
                <a href="{{ route('contact.index') }}">Contact</a>
            </li>
        </ul>

        <!-- Menuicon -->
        <div class="flex justify-center items-center md:hidden">
            <i class="fa-solid fa-bars text-slate-200 dark:text-slate-800 text-2xl" onclick="openMenu()"></i>
        </div>

    </div>
</nav>
