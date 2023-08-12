@props(['member'])

<a href={{ route('user.members.show', $member->name) }} class="text-center shadow-md hover:shadow-lg transition-all duration-500  px-3 py-11">
    <img class="mx-auto mb-4 w-32 h-32 object-cover rounded-full" src="{{ $member->profile }}">
    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 mt-5 dark:text-white">
        {{ $member->name }}
    </h3>
    <div class="w-[25%] h-[2px] bg-primary my-3 m-auto "></div>
    <p class="text-lg font-[100] tracking-wider">{{ $member->position }}</p>
</a>
