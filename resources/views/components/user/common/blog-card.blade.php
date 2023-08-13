<div class="bg-white shadow-md border border-gray-200 rounded-lg cursor-pointer" data-aos="zoom-in">
    <a href="{{ route('news.show', $new->slug) }}">
        <div class="md:h-[200px] h-[150px] overflow-hidden">
            <img class="rounded-t-lg transition duration-300 ease-in-out hover:scale-110 object-cover" src="{{ $new->image }}">
        </div>
        <div class="md:p-5 pt-0 px-5 pb-5">
            <div class="line-clamp-2">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 mt-5">{{ $new->title }}</h5>
            </div>
            <div class="line-clamp-3">
                <p class="font-normal text-gray-700 text-lg mb-3">{!! $new->description !!}</p>
            </div>
        </div>
    </a>
</div>
