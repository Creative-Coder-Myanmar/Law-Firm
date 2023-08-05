@props(['content' => 'Read More'])

<button {{$attributes->merge(['class'=>"px-6 py-3 rounded-full flex items-center text-md md:text-lg"])}}>
    {{ $content }}
</button>
