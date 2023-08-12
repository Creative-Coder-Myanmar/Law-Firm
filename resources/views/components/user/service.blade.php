<x-user.common.section class="bg-light py-14" id="service">
    <x-user.common.section-title />

    @php
        $services = [
            [
                'image' => '/images/search.png',
                'title' => 'Trademark Search',
                'duration' => 500,
                // 'content' => 'A trademark search is a comprehensive and systematic process conducted to determine the availability and potential conflicts of a proposed trademark before it is officially registered with the appropriate government authority. This search helps individuals, businesses, and organizations assess the likelihood of successfully obtaining trademark protection for their brand, logo, slogan, or other distinctive identifiers.',
            ],
            [
                'image' => '/images/video.png',
                'title' => 'Trademark watch',
                'duration' => 1000,
                // 'content' => 'Trademark Watch is a comprehensive and proactive monitoring service designed to safeguard and protect valuable trademarks and brand assets of a company',
            ],
            [
                'image' => '/images/quality.png',
                'title' => 'Trademark Registration',
                'duration' => 1500,
                // 'content' => 'Trademark Registration is a legal process that provides exclusive rights and protection to a distinctive sign, symbol, word, phrase, logo, design, or combination thereof, which identifies and distinguishes goods or services of a particular business or individual from those of others in the marketplace.',
            ],
            [
                'image' => '/images/design.png',
                'title' => 'Industrial Design Registration',
                'duration' => 2500,
                // 'content' => 'Industrial Design Registration is a legal and intellectual property process that provides exclusive rights and protection for the unique visual and ornamental aspects of a functional product.',
            ],
            [
                'image' => '/images/registration.png',
                'title' => 'Patent Registration',
                'duration' => 3000,
                // 'content' => 'Patent registration is a legal process by which an inventor or assignee seeks exclusive rights for a new and innovative invention. ',
            ],
            [
                'image' => '/images/law.png',
                'title' => 'Copyright Registration',
                'duration' => 3500,
                // 'content' => 'Copyright registration is a legal process that provides creators of original works with a formal and documented recognition of their intellectual property rights. This process involves submitting an application and relevant materials to a copyright office or authority, typically run by the government. ',
            ],
            [
                'image' => '/images/legal.png',
                'title' => 'Legal Consultancy for IP rights',
                'duration' => 4000,
                // 'content' => 'Our Legal Consultancy for Intellectual Property (IP) Rights offers comprehensive and expert guidance to safeguard and maximize the value of your creative and innovative assets. Intellectual Property encompasses a wide range of intangible assets, including patents, trademarks, copyrights, and trade secrets. ',
            ],
            [
                'image' => '/images/lawyer.png',
                'title' => 'Civil and criminal litigation on IP related cases',
                'duration' => 4500,
                // 'content' => 'Civil litigation in IP related cases involves legal disputes between individuals or entities over intellectual property rights. These disputes are typically resolved through the court system, where the plaintiff (the party claiming a violation of their IP rights) sues the defendant (the alleged infringing party) for damages or injunctive relief.',
            ],
        ];
    @endphp

    <div class="grid -2 lg:grid-colsgrid-cols-1 md:grid-cols-4 gap-10 mx-auto">
        @foreach ($services as $service)
            <x-user.common.service-card :service="$service" />
        @endforeach
    </div>
</x-user.common.section>
