<div class="bg-white shadow-md border border-gray-200 rounded-lg cursor-pointer" data-aos="zoom-in">
    <div class="h-[230px] overflow-hidden">
        <img class="rounded-t-lg transition duration-300 ease-in-out hover:scale-110" src="{{ $new->image }}">
    </div>
    <div class="p-5">
        <a href="#">
            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">{{ $new->title }}</h5>
        </a>
        <div class="line-clamp-3">
            <p class="font-normal text-gray-700 mb-3">{!! $new->description !!}</p>
        </div>
    </div>
</div>
