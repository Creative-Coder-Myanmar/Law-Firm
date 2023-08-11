@props(['news'])

<x-user.common.section class="bg-light py-14">
    <x-user.common.section-title title="OUR NEWS" content="Recently Updated News" />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mx-auto mt-[60px]">
        @foreach ($news as $new)
            <x-user.common.blog-card :new="$new" />
        @endforeach
    </div>
</x-user.common.section>
