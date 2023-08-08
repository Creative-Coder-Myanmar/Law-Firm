<x-user.common.section class="bg-secondary py-28">
    <div class="mx-auto flex flex-col lg:flex-row">
        <!-- Left -->
        <div class="w-full lg:w-1/2 flex items-end p-3" data-aos="fade-right">
            <div class="space-y-6 text-center lg:text-start">
                <span class="text-4xl font-semibold max-w-lg text-slate-100">
                    A Digital Agency Of Inteligents & Creative People
                </span>

                <p class="text-slate-300">
                    Our firm is a Partnership Law Firm providing IP related legal services to the global and domestic
                    individuals and entrepreneurs.Our services include:
                </p>

                <div class="space-x-3 flex justify-center lg:justify-start">
                    <x-user.common.button class="bg-warning text-light" route="#service" />
                    <x-user.common.button class="bg-light text-dark" content="Contact Us"
                        route="{{ route('contact.index') }}" />
                </div>
            </div>
        </div>
        <!-- Right -->
        <div class="w-full lg:w-1/2 p-3" data-aos="fade-left">
            <img src="https://htiplawfirm.com/img/hero.png" class="mx-auto">
        </div>
    </div>
</x-user.common.section>
