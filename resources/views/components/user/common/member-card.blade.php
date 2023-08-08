@props(['member'])

<div class="text-center cursor-pointer">
    <img class="mx-auto mb-4 w-32 h-32 rounded-full" src="{{ $member->profile }}">
    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        {{ $member->name }}
    </h3>
    <p>{{ $member->position }}</p>
</div>
