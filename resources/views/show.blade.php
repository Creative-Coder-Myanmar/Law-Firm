<x-user.master>
    <div class="blog-container">
        <div class="flex justify-between items-start mb-5">
            <h1 class=" text-dark font-semibold text-2xl w-3/4">
                {{ $new->title }}
            </h1>
            <p>{{ $new->created_at->diffForHumans() }}</p>
        </div>
        <img src="{{ $new->image }}" class="rounded-md mx-auto object-cover mb-5">
        <p class="text-smoke text-lg">{!! $new->description !!}</p>
    </div>
</x-user.master>
