<div id="home" />
<nav class="bg-primary shadow-md px-3 py-7 md:px-1 lg:px-4 z-10 animate__animated duration-200" id="navbar">
    <div class="container flex flex-row justify-between items-center mx-auto">

        <div class="flex items-center">
            <a href="/" class="text-3xl font-bold text-slate-200">Law Firm</a>
        </div>

        <ul class="flex flex-col md:flex-row gap-x-0 md:gap-11 gap-y-11 md:gap-y-0 text-lg text-slate-200 dark:text-slate-800 cursor-pointer bg-primary fixed md:static top-0 -right-full md:right-0 w-full md:w-auto h-screen md:h-auto z-10 justify-center items-center duration-200 "
            id="menuItem">

            <i class="absolute top-5 right-5 fa fa-xmark text-3xl text-white flex md:hidden" onclick="closeMenu()"></i>

            <li onclick="closeMenu()">
                <a href="{{ route('index') }}">Home</a>
            </li>
            <li onclick="closeMenu()">
                <a href="{{ route('about.index') }}">About</a>
            </li>
            <li onclick="closeMenu()">
                <a href="{{ route('news.index') }}">News</a>
            </li>
            <li onclick="closeMenu()">
                <a href="{{ route('user.members.index') }}">Team Members</a>
            </li>
            {{-- <li onclick="closeMenu()">
                <a href="{{ route('performances') }}">Our Performances</a>
            </li> --}}
            {{-- <li onclick="closeMenu()">
                <a href="{{ route('services') }}">Our Services</a>
            </li> --}}
            <li onclick="closeMenu()">
                <a href="{{ route('contact.index') }}">Contact</a>
            </li>
        </ul>

        <!-- Menuicon -->
        <div class="flex justify-center items-center md:hidden">
            <i class="fa-solid fa-bars text-white dark:text-slate-800 text-2xl" onclick="openMenu()"></i>
        </div>

    </div>
</nav>
