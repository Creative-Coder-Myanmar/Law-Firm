<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-700">
        <ul class="space-y-2 font-medium">
            <x-admin.common.aside-item route="{{ route('news.create') }}">
                <i class="fa-solid fa-gauge w-5 text-gray-800"></i>
            </x-admin.common.aside-item>
            <x-admin.common.aside-dropdown />
            <x-admin.common.aside-item route="{{ route('news.create') }}" content="Logout">
                <i class="fa-solid fa-right-from-bracket w-5 text-gray-700"></i>
            </x-admin.common.aside-item>

            {{-- <form method="post" action="{{ route('logout') }}">
                @csrf
                <button>Hello</button>
            </form> --}}
        </ul>
    </div>
</aside>
