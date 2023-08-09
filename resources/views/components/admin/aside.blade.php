<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">

            <x-admin.common.aside-item route="{{ route('dashboard') }}">
                <i class="fa-solid fa-gauge w-5 text-gray-800"></i>
            </x-admin.common.aside-item>

            <x-admin.common.aside-dropdown id="news" title="News Management" :dropdownItems="[
                [
                    'route' => route('news.create'),
                    'name' => 'Create News',
                ],
                [
                    'route' => route('news.index'),
                    'name' => 'News List',
                ],
            ]" />

            <x-admin.common.aside-dropdown id="members" title="People Management" :dropdownItems="[
                [
                    'route' => route('members.create'),
                    'name' => 'Add Pepole',
                ],
                [
                    'route' => route('members.index'),
                    'name' => 'People List',
                ],
            ]" />

            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full">
                    <x-admin.common.aside-item content="Logout">
                        <i class="fa-solid fa-right-from-bracket w-5 text-gray-700"></i>
                    </x-admin.common.aside-item>
                </button>
            </form>
        </ul>
    </div>
</aside>
