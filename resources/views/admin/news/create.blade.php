<x-admin.master>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

    <div class="p-4 sm:ml-64 bg-light">
        <div class="flex justify-center items-center h-screen w-full">
            <div class="w-full md:w-2/3 bg-white rounded shadow-xl p-8">
                <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Create News</h1>
                <form class="space-y-4">
                    <div class="flex flex-col">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Image</label>
                        <input type="file" name="image" accept="image/png, image/jpeg" id="first_name">
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Title</label>
                        <input class="border py-2 px-3 text-grey-800" type="text" name="title" id="first_name">
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="password">Description</label>
                        <textarea name="description" class="editor"></textarea>
                    </div>
                    <button class="shadow-sm bg-primary text-light text-sm rounded-md block w-full py-3">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        FilePond.registerPlugin(
            FilePondPluginImagePreview,
        );


        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {
            labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            // stylePanelLayout: 'compact circle',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
        });
    </script>
</x-admin.master>
