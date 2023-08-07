@props(['route' => null, 'content' => 'Dashboard'])

<li>
    <a href="{{ $route }}"
        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        {{ $slot }}
        <span class="ml-2">
            {{ $content }}
        </span>
    </a>
</li>
