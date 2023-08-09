<x-user.common.section class="bg-primary py-5">
    <div class="w-full mx-auto flex flex-col md:flex-row items-center justify-between">
        <span class="text-sm text-slate-400 sm:text-center">© 2023 <a href="#" class="hover:underline">LAWFIRM™</a>.
            All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-slate-400 sm:mt-0">
            <li>
                <a href="{{ route('about.index') }}" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</x-user.common.section>
