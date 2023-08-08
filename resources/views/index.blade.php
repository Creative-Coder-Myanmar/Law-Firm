<x-user.master>
    <x-user.home />
    <x-user.service />
    <x-user.blogs :news="$news" />
    <div class="flex justify-center bg-light -mt-10">
        <x-user.common.button class="bg-warning text-light" route="{{ route('blogs.index') }}" content="See More" />
    </div>
    <x-user.members :members="$members" />
    <x-user.contact />
</x-user.master>
