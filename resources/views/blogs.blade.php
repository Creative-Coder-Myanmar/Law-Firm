<x-user.master>
    <x-user.common.section class="bg-light py-14">
        <x-user.common.section-title title="OUR NEWS" content="Recently Updated News" />
        <x-admin.common.search type="news" />
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mx-auto my-4">
            @foreach ($news as $new)
                <x-user.common.blog-card :new="$new" />
            @endforeach
        </div>
        @if ($news->total() === 0)
            <x-admin.common.not-found />
        @endif
        <div class="flex justify-center bg-light">
            {{ $news->links() }}
        </div>
    </x-user.common.section>
</x-user.master>
