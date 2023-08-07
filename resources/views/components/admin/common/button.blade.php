@props(['type' => 'submit', 'content', 'route'])

<button type="{{ $type }}"
    {{ $attributes->merge(['class' => 'items-center py-2.5 px-3 text-sm font-medium text-white bg-secondary rounded-lg']) }}>
    <a href="{{ $type === 'submit' ? '' : $route }}">
        {{ $content }}
    </a>
</button>
