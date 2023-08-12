@props(['type', 'data'])

<link rel="stylesheet" href="/css/ckeditor/style.css">
<x-admin.common.form-wallpaper>
    <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">
        {{ $type === 'create' ? 'Create News' : 'Edit News' }}
    </h1>

    <form class="space-y-4" action="{{ $type === 'create' ? route('news.store') : route('news.update', $data->id) }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $type === 'create' ? old('id') : $data->id }}">

        <x-admin.common.form-input title="Image" name="image" type="file" />

        <x-admin.common.form-input title="Title" name="title" type="text"
            value="{{ $type === 'create' ? old('title') : $data->title }}" />

            <x-admin.common.form-input title="Authors" name="authors" type="text"
            value="{{ $type === 'create' ? old('authors') : $data->authors }}" />

        <div class="flex flex-col">
            <label class="mb-2 font-bold text-lg text-gray-900">Content</label>
            <textarea name="description" class="editor">
                {!! $type === 'create' ? old('description') : $data->description !!}
            </textarea>
            <x-admin.common.error error="description" />
        </div>

        <x-admin.common.button class="w-full" content="{{ $type === 'create' ? 'Create' : 'Update' }}" />
    </form>
</x-admin.common.form-wallpaper>
