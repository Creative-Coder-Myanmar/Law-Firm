<x-user.master>
    <div class="blog-container min-h-[100vh]">
        <div class="flex justify-between items-start gap-8">
            <div class="flex flex-col gap-2 max-w-[1000px]">
                <h1 class=" text-dark font-semibold text-3xl m-0 p-0 break-words md:w-[auto] w-[310px]">
                    {{ $new->title }}
                </h1>
                <div class="flex text-sm items-center gap-2 shrink-0">
                <i class="fa-regular fa-clock"></i>
                <p>{{ $new->created_at->diffForHumans() }}</p>
            </div>
         </div>
        </div>
        <img src="{{ $new->image }}" class="rounded-md mx-auto object-contain mt-11">
        <p class="font-[500] text-lg md:mt-[50px] mt-8">{!! $new->description !!}</p>
        @if($new->authors)
            <div class="mt-8 md:text-xl text-md">
                <p>Written By : {{ $new->authors }}</p>
            </div>
        @endif
    </div>
</x-user.master>
