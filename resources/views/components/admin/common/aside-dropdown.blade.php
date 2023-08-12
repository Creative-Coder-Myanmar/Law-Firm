@props(['title' => '', 'id', 'dropdownItems' ,'icon' => ''])

<li>
    <button type="button"
        class="flex items-center w-full p-2 text-base text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
        data-collapse-toggle="{{ $id }}">

        {!! $icon !!}
         <span class="flex-1 ml-3 text-left whitespace-nowrap">{{ $title }}</span>
        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 4 4 4-4" />
        </svg>
    </button>

    @php
        $currentUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parsedUrl = parse_url($currentUrl);
        $path = $parsedUrl['path'];
        $pathSegments = explode('/', $path);
        $output = $pathSegments[2];
    @endphp

    <ul id="{{ $id }}" class="{{ $output === $id ? '' : 'hidden' }} py-2 space-y-2">
        @foreach ($dropdownItems as $item)
            <li>
                <a href="{{ $item['route'] }}"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</li>
