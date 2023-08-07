<x-user.common.section class="bg-light py-14">
    <x-user.common.section-title />

    @php
        $services = [
            [
                'image' => '',
                'title' => 'Trademark Search',
                'duration' => 500,
                'content' => 'Our firm is a Partnership Law Firm providing IP related legal services',
            ],
            [
                'image' => '',
                'title' => 'Trademark Search',
                'duration' => 1000,
                'content' => 'Our firm is a Partnership Law Firm providing IP related legal services',
            ],
            [
                'image' => '',
                'title' => 'Trademark Search',
                'duration' => 1500,
                'content' => 'Our firm is a Partnership Law Firm providing IP related legal services',
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mx-auto">
        @foreach ($services as $service)
            <x-user.common.service-card :service="$service" />
        @endforeach
    </div>
</x-user.common.section>
