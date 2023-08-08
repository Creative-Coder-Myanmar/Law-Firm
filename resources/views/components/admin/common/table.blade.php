@props(['news', 'titles' => ['Image', 'Title', 'Date', 'Action']])

<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            @foreach ($titles as $tilte)
                <th scope="col" class="py-3">
                    {{ $tilte }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $new)
            <tr class="bg-white border-b hover:bg-gray-50">
                <td class="py-4">
                    <img class="w-32 h-20 object-cover rounded-md" src="{{ $new->image }}">
                </td>
                <td class="py-4">
                    {{ $new->title }}
                </td>
                <td class="py-4">
                    {{ $new->created_at->diffForHumans() }}
                </td>
                <td class="py-4">
                    <div class="cursor-pointer flex space-x-5 text-xl">
                        <div>
                            <a href="{{ route('news.edit', $new->id) }}"
                                class="fa-solid fa-pen-to-square text-secondary"></a>
                        </div>
                        <div>
                            <a href="{{ route('news.destroy', $new->id) }}" class="fa-solid fa-trash text-red-600"></a>

                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@if ($news->total() === 0)
    <x-admin.common.not-found />
@endif

<div class="mt-3">
    {{ $news->links() }}
</div>
