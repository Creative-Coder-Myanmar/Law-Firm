@props(['title' => 'OUR SERVICES', 'content' => 'What Solutions We Provide'])

<div>
    <div class="inline-flex items-center justify-center w-full mb-7">
        <hr class="w-64 h-[3px] my-3 bg-warning" />
        <span class="absolute px-4 text-warning -translate-x-1/2 left-1/2 bg-light">
            {{ $title }}
        </span>
    </div>
    <h1 class="container mx-auto text-center text-dark font-semibold text-4xl mb-10">
        {{ $content }}
    </h1>
</div>
