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
                    'route' => route('admin.news.index'),
                    'name' => 'News List',
                ], 
            ]" 
            icon='<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path
                            d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z" />
                    </svg>
                    '
            />

            <x-admin.common.aside-dropdown id="members" title="People Management" :dropdownItems="[
                [
                    'route' => route('members.create'),
                    'name' => 'Add Pepole',
                ],
                [
                    'route' => route('members.index'),
                    'name' => 'People List',
                ],
            ]"
            icon='<i class="fa-solid fa-users"></i>'
            />

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
