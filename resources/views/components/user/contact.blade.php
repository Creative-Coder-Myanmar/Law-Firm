<section class="py-10 px-8 lg:px-24 bg-light" id="contact">
    <x-user.common.section-title title="CONTACT US" content="Contact For Any Assist" />

    <div class="flex flex-col md:flex-row items-center mt-8 space-x-0 md:space-x-5 space-y-5 md:space-y-0">
        <div class="m-auto shadow-md rounded-lg p-8 md:pt-10 h-auto w-full md:w-2/5">
            <h1 class="text-2xl font-semibold mb-5 border-b-4 border-primary pb-2 inline-block">Our Address</h1>
            <div class="space-y-5 text-dark">
                <a href="tel:+95942377834" class="flex items-center justify-start space-x-3 hover:text-blue-400">
                    <i class="fa-solid fa-phone text-dark"></i>
                    <p>099-42-377-834</p>
                </a>

                <a href="mailto:hlaingminthan92@gmail.com"
                    class="flex items-start md:items-center justify-start space-x-3 hover:text-blue-400">
                    <i class="fa-solid fa-envelope text-dark"></i>
                    <p class="line-clamp-2 md:line-clamp-1">hlaingminthan92@gmail.com</p>
                </a>

                <a href="https://www.google.com/maps/place/Creative+Coder+Myanmar/@16.7721598,96.1734532,101m/data=!3m1!1e3!4m6!3m5!1s0x30c1ed279f680e7d:0x2f76d0ee1cb1be69!8m2!3d16.7721552!4d96.1737006!16s%2Fg%2F11qnrkbdyj?entry=ttu"
                    target="_blank" class="flex items-start justify-start space-x-3 hover:text-blue-400">
                    <i class="fa-solid fa-location-dot text-dark"></i>
                    <div class="flex flex-col">
                        <p>No.75, 3rd Floor, 54th Street Botahtaung</p>
                        <p>( ကုန်သည်လမ်းဘက် ဂန္ဒီဆေးရုံဘေးလမ်း )</p>
                    </div>
                </a>

                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7640.513133450913!2d96.1754061009709!3d16.763906201203035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1edec359b616f%3A0xa24ad81f72e7df02!2z4YCe4YCZ4YCt4YCv4YCE4YC64YC4IOGAmeGArOGAnOGArOGAnOGAmeGAuuGAuA!5e0!3m2!1smy!2smm!4v1691212269999!5m2!1smy!2smm"
                        class="rounded-md w-full h-[250px]" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="flex items-center justify-start space-x-3">
                    <i class="fa-brands fa-facebook text-blue-600 text-2xl"></i>
                    <i class="fa-brands fa-youtube text-red-500 text-2xl"></i>
                    <i class="fa-brands fa-twitter text-blue-600 text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div
            class="m-auto shadow-md dark:bg-dcard dark:shadow-none rounded-lg p-8 h-auto w-full md:w-3/5">
            <x-user.common.contact-title />
            <form class="space-y-5" action="/send-contact-us-mail" method="POST">
                @csrf
                <x-user.common.input type="text" name="name" placeholder="Your name" />
                <x-user.common.input type="email" name="email" placeholder="Your email" />
                <x-user.common.input type="number" name="phone" placeholder="Your phone" />
                <textarea name="message" cols="30" rows="7"
                    class="shadow-sm bg-light text-gray-900 text-sm rounded-md focus:ring-primary focus:border-primary outline-0 border-1 block w-full p-2.5"
                    placeholder="Write a message"></textarea>
                <button class="shadow-sm bg-primary text-light text-lg rounded-md block w-full py-3">Send
                    Message</button>
            </form>
        </div>
        <!-- End -->
    </div>
</section>
