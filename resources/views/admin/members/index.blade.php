<x-admin.master>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg mt-14">
            <div class="flex items-center justify-between pb-4">

                <x-admin.common.search type="people" />

                <x-admin.common.button type="button" class="ml-2" route="{{ route('members.create') }}"
                    content="Create Members" />

            </div>
            {{-- <x-admin.common.table :news="$members" /> --}}

            @php
                $titles = ['Profile', 'Name', 'Position', 'Action'];
            @endphp

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
                    @foreach ($members as $member)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="py-4">
                                <img class="w-20 h-20 object-cover rounded-full" src="{{ $member->profile }}">
                            </td>
                            <td class="py-4">
                                {{ $member->name }}
                            </td>
                            <td class="py-4">
                                {{ $member->position }}
                            </td>
                            <td class="py-4">
                                <div class="cursor-pointer flex space-x-5 text-xl">
                                    <div>
                                        <a href="{{ route('members.edit', $member->id) }}"
                                            class="fa-solid fa-pen-to-square text-secondary"></a>
                                    </div>
                                    <div>
                                        <a href="{{ route('members.destroy', $member->id) }}"
                                            class="fa-solid fa-trash text-red-600"></a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($members->total() === 0)
                <x-admin.common.not-found />
            @endif

            <div class="mt-3">
                {{ $members->links() }}
            </div>

        </div>
    </div>
</x-admin.master>
