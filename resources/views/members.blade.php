@props(['members'])

<x-user.master>
    <x-user.common.section class="bg-light py-14">
        <x-user.common.section-title title="OUR TEAM" content="Our Team Members" />
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 mx-auto my-4">
            @foreach ($members as $member)
                <x-user.common.member-card :member="$member" />
            @endforeach
        </div>
        <div class="flex justify-center bg-light">
            {{ $members->links() }}
        </div>
    </x-user.common.section>
</x-user.master>
