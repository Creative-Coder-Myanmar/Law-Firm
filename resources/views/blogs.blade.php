<x-user.master>
    <x-user.common.section class="bg-light py-14">
        <x-user.common.section-title title="OUR NEWS" content="Recently Updated News" />
        <x-admin.common.search type="news" />
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mx-auto my-4">
            @forelse ($news as $new)
                <x-user.common.blog-card :new="$new" />
            @empty
                <div class="w-full text-center">
                    No Results Found.
                </div>
            @endforelse
        </div>
        <div class="flex justify-center bg-light">
            {{ $news->links() }}
        </div>
    </x-user.common.section>
</x-user.master>
