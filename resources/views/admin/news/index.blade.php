<x-admin.master>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg mt-14">
            <div class="flex items-center justify-between pb-4">

                <x-admin.common.search type="news" />

                <x-admin.common.button type="button" class="ml-2" route="{{ route('news.create') }}"
                    content="Create News" />

            </div>
            <x-admin.common.table :news="$news" />
        </div>
    </div>
</x-admin.master>
