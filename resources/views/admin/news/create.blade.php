<x-admin.master>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

    <div class="p-4 sm:ml-64 bg-light">
        <div class="flex justify-center items-center h-screen w-full">
            <div class="w-full md:w-2/3 bg-white rounded shadow-xl p-8">
                <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Create News</h1>
                <form class="space-y-4" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col">
                        <label class="mb-2 font-bold text-lg text-smoke">Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-2 font-bold text-lg text-gray-900">Title</label>
                        <input class="border py-2 px-3 text-grey-800" type="text" name="title">
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-2 font-bold text-lg text-gray-900">Content</label>
                        <textarea name="description" class="editor"></textarea>
                    </div>
                    <button type="submit"
                        class="shadow-sm bg-secondary text-light text-sm rounded-md block w-full py-3">Create</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>
        const inputElement = document.querySelector('input[type="file"]');

        FilePond.registerPlugin(
            FilePondPluginImagePreview,
        );

        const pond = FilePond.create(inputElement, {
            server: {
                url: '/news/store',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
        pond.labelIdle = `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`;
        // pond.stylePanelLayout = 'compact circle';
        // styleLoadIndicatorPosition: 'center bottom',
        // styleProgressIndicatorPosition: 'right bottom',
        // styleButtonRemoveItemPosition: 'left bottom',
        // styleButtonProcessItemPosition: 'right bottom',
    </script>
</x-admin.master>
