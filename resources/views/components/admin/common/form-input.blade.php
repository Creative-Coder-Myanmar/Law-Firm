@props(['title', 'name', 'type', 'value' => null])

<div class="flex flex-col">
    <label class="mb-2 font-bold text-lg text-gray-900">{{ $title }}</label>
    <input class="border py-2 px-3 text-grey-800" type="{{ $type }}" name="{{ $name }}"
        value="{{ $value }}">
    <x-admin.common.error error="{{ $name }}" />
</div>
