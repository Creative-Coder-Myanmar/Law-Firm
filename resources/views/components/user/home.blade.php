<x-user.common.section class="bg-secondary md:py-28 py-20">
    <div class="mx-auto flex flex-col lg:flex-row overflow-hidden">
        <!-- Left -->
        <div class="w-full lg:w-1/2 flex items-center md:p-3 p-0" data-aos="fade-right">
            <div class="space-y-6 text-center lg:text-start">
                <span class="2xl:text-5xl md:text-4xl text-3xl font-semibold max-w-lg text-slate-100">
                    Brief Profile of HTIP Law Firm Company Limited
                </span>

                <p class="text-slate-300 text-lg pt-3 leading-[2]">
                    The former name <b>“MYANMAR TRADEMARK AND PATENT LAW FIRM (MTP) ”</b> was founded on October 18, 1995 as
                    the Partnership Law Firm and <b>officially registered</b> in Myanmar at the Ministry of Commerce under the
                    Registration no. 55/96 dated 19-8-1996. It was founded by two lawyers at the time when there were
                    only a few private law offices in Myanmar providing <b>legal services</b> relating to trademark protection.
                    MTP was officially introduced to the <b>International IP community</b> on October 18, 1995.
                </p>

                <div class="md:gap-3 flex md:flex-row gap-5 flex-col justify-center lg:justify-start md:pt-8 py-5">
                    <x-user.common.button class="bg-warning text-light md:w-auto md:px-14 w-full flex justify-center py-4" route="{{ route('about.index') }}" />
                    <x-user.common.button class="bg-light text-dark flex justify-center md:w-auto md:px-11  w-full" content="Contact Us"
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
