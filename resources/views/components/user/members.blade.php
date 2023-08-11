@props(['members'])

<x-user.common.section class="bg-light py-14" id="members">
    <x-user.common.section-title title="OUR TEAM" content="Our Team Members" />
    <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-20">
        @foreach ($members as $member)
            <x-user.common.member-card :member="$member" />
        @endforeach
    </div>
</x-user.common.section>
