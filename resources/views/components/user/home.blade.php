<x-user.common.section class="bg-secondary py-28">
    <div class="mx-auto flex flex-col lg:flex-row">
        <!-- Left -->
        <div class="w-full lg:w-1/2 flex items-center p-3" data-aos="fade-right">
            <div class="space-y-6 text-center lg:text-start">
                <span class="2xl:text-5xl text-4xl font-semibold max-w-lg text-slate-100">
                    Brief Profile of HTIP Law Firm Company Limited
                </span>

                <p class="text-slate-300 text-lg indent-[20px] leading-[2]">
                    The former name <b>“MYANMAR TRADEMARK AND PATENT LAW FIRM (MTP) ”</b> was founded on October 18, 1995 as
                    the Partnership Law Firm and <b>officially registered</b> in Myanmar at the Ministry of Commerce under the
                    Registration no. 55/96 dated 19-8-1996. It was founded by two lawyers at the time when there were
                    only a few private law offices in Myanmar providing <b>legal services</b> relating to trademark protection.
                    MTP was officially introduced to the <b>International IP community</b> on October 18, 1995.
                </p>

                <div class="space-x-3 flex justify-center lg:justify-start">
                    <x-user.common.button class="bg-warning text-light px-11" route="{{ route('about.index') }}" />
                    <x-user.common.button class="bg-light text-dark px-11" content="Contact Us"
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
