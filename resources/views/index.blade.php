<x-user.master>
    <x-user.home />
    <x-user.service />
    @if(count($news) > 0)
        <x-user.blogs :news="$news" />
        <div class="flex justify-center bg-light">
        <x-user.common.button class="bg-warning text-light" route="{{ route('news.index') }}" content="See More" />
    </div>
    @endif
    @if(count($members) > 0)
        <x-user.members :members="$members" />
    @endif
    <x-user.brands />
    <x-user.contact />
</x-user.master>
