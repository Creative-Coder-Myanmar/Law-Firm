
<section class="py-10">
    <x-user.common.section-title/>

    <div class="flex flex-col md:flex-row mt-8 space-x-0 md:space-x-5 space-y-5 md:space-y-0">
      <div class="m-auto shadow-md bg-slate-800 rounded-lg p-8 md:pt-10 h-auto md:h-[550px] w-full md:w-2/5">
        <ContactTitle
          title="Contact Information"
          title-class="justify-start items-start text-white"
        />
        <div class="space-y-5 text-white">
          <a
            href="tel:+95942377834"
            class="flex items-center justify-start space-x-3 hover:text-blue-400"
          >
            <Phone />
            <p>099-42-377-834</p>
          </a>

          <a
            href="mailto:hlaingminthan92@gmail.com"
            class="flex items-start md:items-center justify-start space-x-3 hover:text-blue-400"
          >
            <EmailIcon email-class="text-white mt-1" />
            <p class="line-clamp-2 md:line-clamp-1">hlaingminthan92@gmail.com</p>
          </a>

          <a
            href="https://www.google.com/maps/place/Creative+Coder+Myanmar/@16.7721598,96.1734532,101m/data=!3m1!1e3!4m6!3m5!1s0x30c1ed279f680e7d:0x2f76d0ee1cb1be69!8m2!3d16.7721552!4d96.1737006!16s%2Fg%2F11qnrkbdyj?entry=ttu"
            target="_blank"
            class="flex items-start justify-start space-x-3 hover:text-blue-400"
          >
            <Location />
            <div class="flex flex-col">
              <p>No.75, 3rd Floor, 54th Street Botahtaung</p>
              <p>( ကုန်သည်လမ်းဘက် ဂန္ဒီဆေးရုံဘေးလမ်း )</p>
            </div>
          </a>

          <div>
            <iframe
              class="rounded-md w-[100%] border-0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15281.235374842701!2d96.16330505!3d16.761303200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec5dc203b9d5%3A0x949c8f28127348e0!2sVintage%20Luxury%20Yacht%20Hotel!5e0!3m2!1smy!2smm!4v1691172934261!5m2!1smy!2smm" frameborder="0"
              aria-hidden="false"
              tabindex="0"></iframe>
          </div>

          <div class="social-links flex items-center justify-start space-x-2">
            <Facebook
              width="35"
              height="35"
            />
            <Youtube
              width="35"
              height="35"
            />
            <Linkedin
              width="38"
              height="38"
            />
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="m-auto shadow-md rounded-lg p-4 py-10 md:p-8 md:pt-10 h-auto md:h-[550px] w-full md:w-3/5">
        {{-- <ContactTitle /> --}}
        <form>
          <input name="firstName"
            rules="required|min:3|max:20"
            placeholder="Your Name ..."
            class="bg-[#F5F5F5] focus:ring-white">

          {{-- <Input
            v-model="form.email"
            name="email"
            mode="input-border"
            type="email"
            rules="required|email"
            placeholder="Your Email ..."
            class="bg-[#F5F5F5] cy-contactus-email mt-4 focus:ring-white"
            :server-error-msg="form.errors.email"
          />

          <Input
            v-model="form.phone"
            rules="required|min:9|max:15"
            mode="input-border"
            placeholder="Your Phone ..."
            name="phone"
            class="input-phone bg-[#F5F5F5] cy-contactus-phone mt-4 focus:ring-white"
            :server-error-msg="form.errors.phone"
            @input="$formatPhone('.input-phone')"
          />

          <Textarea
            v-model="form.messages"
            :server-error-msg="form.errors.bio"
            type="text"
            name="messages"
            placeholder="Your Messages ..."
            rules="required|min:5|max:2500"
            class="border max-h-[100px] bg-[#F5F5F5] focus:ring-white cy-contactus-messages !px-3 py-3 rounded-md outline-none focus:!border-gray-200 focus:ring-2 ring-main ring-offset-1 min-h-[100px] mt-4"
            :error-msg="form.errors.messages"
          />

          <Button
            class="mt-4"
            type="submit"
            :is-loading="form.processing"
            :disabled="form.processing || !meta.valid"
          >
            Send Message
          </Button> --}}
        </form>
      </div>
    </div>
</section>

