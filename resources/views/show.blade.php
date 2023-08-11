<x-user.master>
    <div class="blog-container min-h-[100vh]">
        <div class="flex justify-between items-start mt-[100px]">
            <h1 class=" text-dark font-semibold text-2xl w-3/4">
                {{ $new->title }}
            </h1>
            <p>{{ $new->created_at->diffForHumans() }}</p>
        </div>
        <img src="{{ $new->image }}" class="rounded-md mx-auto object-cover mt-11">
        <p class="font-[500] text-lg mt-20">{!! $new->description !!}</p>
    </div>
</x-user.master>
