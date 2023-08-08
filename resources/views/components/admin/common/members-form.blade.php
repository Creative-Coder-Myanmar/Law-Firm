@props(['type', 'data'])

<x-admin.common.form-wallpaper>
    <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">
        {{ $type === 'create' ? 'Create People' : 'Edit People' }}
    </h1>

    <form class="space-y-4"
        action="{{ $type === 'create' ? route('members.store') : route('members.update', $data->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <x-admin.common.form-input title="Profile" name="profile" type="file" />

        <x-admin.common.form-input title="Position" name="position" type="text"
            value="{{ $type === 'create' ? '' : $data->position }}" />

        <div class="flex flex-col">
            <label class="mb-2 font-bold text-lg text-gray-900">About</label>
            <textarea name="about" class="editor">
                        {!! $type === 'create' ? '' : $data->about !!}
                    </textarea>
            <x-admin.common.error error="about" />
        </div>

        <x-admin.common.button class="w-full" content="{{ $type === 'create' ? 'Create' : 'Update' }}" />
    </form>
</x-admin.common.form-wallpaper>
