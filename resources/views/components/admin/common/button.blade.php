@props(['type' => 'submit', 'content', 'route'])

<button type="{{ $type }}"
    {{ $attributes->merge(['class' => 'items-center py-2.5 px-3 text-sm font-medium text-white bg-secondary rounded-lg']) }}>
    @if ($type === 'submit')
        {{ $content }}
    @else
        <a href="{{ $route }}">
            {{ $content }}
        </a>
    @endif
</button>
