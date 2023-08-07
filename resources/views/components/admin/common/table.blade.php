@props(['news', 'titles' => ['Image', 'Title', 'Content', 'Date', 'Action']])

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
                {{-- <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                <div class="pl-3">
                    <div class="text-base font-semibold">Neil Sims</div>
                    <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                </div>
            </th> --}}
                <td class="py-4">
                    <img class="w-32 rounded-md"
                        src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg">
                </td>
                <td class="py-4">
                    {{ $new->title }}
                </td>
                <td class="py-4">
                    {!! $new->description !!}
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

<div class="mt-3">
    {{ $news->links() }}
</div>
