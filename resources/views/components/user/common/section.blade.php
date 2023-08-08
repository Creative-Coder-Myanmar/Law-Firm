@props(['id' => null])

<section {{ $attributes->merge(['class' => 'px-10 lg:px-24']) }} id="{{ $id }}">
    {{ $slot }}
</section>
