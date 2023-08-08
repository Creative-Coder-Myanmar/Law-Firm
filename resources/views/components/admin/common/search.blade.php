@props(['type'])

<form class="flex items-center">
    <label class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <i class="fa-solid fa-magnifying-glass w-4 mr-2"></i>
        </div>
        <input type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
            name="search" value="{{ request('search') }}" placeholder="Search {{ $type }}...">
    </div>
    <x-admin.common.button content="Search" class="ml-2" />
</form>
