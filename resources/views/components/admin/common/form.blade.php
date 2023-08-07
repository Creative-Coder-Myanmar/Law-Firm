@props(['type', 'data'])

<div class="p-4 sm:ml-64 bg-light">
    <div class="flex justify-center items-center w-full mt-14">
        <div class="w-full md:w-2/3 bg-white rounded shadow-xl p-8">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">
                {{ $type === 'create' ? 'Create News' : 'Edit News' }}
            </h1>

            <form class="space-y-4"
                action="{{ $type === 'create' ? route('news.store') : route('news.update', $data->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col">
                    <label class="mb-2 font-bold text-lg text-smoke">Image</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-bold text-lg text-gray-900">Title</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="title"
                        value="{{ $type === 'create' ? '' : $data->title }}">
                    <x-admin.common.error error="title" />
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-bold text-lg text-gray-900">Content</label>
                    <textarea name="description" class="editor">
                        {!! $type === 'create' ? '' : $data->description !!}
                    </textarea>
                    <x-admin.common.error error="description" />
                </div>

                <x-admin.common.button class="w-full" content="{{ $type === 'create' ? 'Create' : 'Update' }}" />
            </form>
        </div>
    </div>
</div>
