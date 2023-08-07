<x-admin.master>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

    <x-admin.common.form type="edit" :data="$new" />

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
