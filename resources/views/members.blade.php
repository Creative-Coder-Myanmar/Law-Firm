@props(['members'])

<x-user.master>
    <x-user.common.section class="bg-light py-14 min-h-[100vh]">
        <x-user.common.section-title title="OUR TEAM" content="Our Team Members" />
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 mx-auto mt-20 mb-4">
            @foreach ($members as $member)
                <x-user.common.member-card :member="$member" />
            @endforeach
        </div>
        <div class="flex justify-center bg-light">
            {{ $members->links() }}
        </div>
    </x-user.common.section>
</x-user.master>
