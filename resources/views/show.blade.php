<x-user.master>
    <x-user.common.section class="bg-light py-14">
        <div class="flex justify-between items-center bg-red-500 px-20">
            <h1 class=" text-dark font-semibold text-2xl">
                {{ $new->title }}
            </h1>
            <p>{{ $new->created_at->diffForHumans() }}</p>
        </div>
        <img src="{{ $new->image }}" class="rounded-md mx-auto object-cover mb-5">
        <p class="text-smoke text-lg">{!! $new->description !!}</p>
    </x-user.common.section>
</x-user.master>
