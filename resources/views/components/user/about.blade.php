@props(['members'])
<x-user.common.section class="bg-light py-14">
    <x-user.common.section-title title="ABOUT US" content="Brief Profile of HTIP Law Firm Company Limited" />
    <div class="leading-8 text-xl text-smoke">
        <p class="mb-10">
            The former name <span class="font-semibold">“MYANMAR TRADEMARK AND PATENT LAW FIRM (MTP)”</span> was founded
            on
            October 18, 1995 as
            the
            Partnership Law Firm and officially registered in Myanmar at the Ministry of Commerce under the Registration
            no.
            55/96 dated 19-8-1996. It was founded by two lawyers at the time when there were only a few private law
            offices
            in Myanmar providing legal services relating to trademark protection. MTP was officially introduced to the
            International IP community on October 18, 1995 with the aspiration to assist with the competent skill in
            protecting IP right of the global business owners who rightly choose to expend their market in this
            fascinating
            Country MYANMAR , which is the 2nd largest in booming South East Asia , with the population of Over 50
            million ,
            situated in the advantageous geographical position , gifted with rich natural resources and a promising land
            of
            greater economic potential.
        </p>

        <div class="mb-10">
            <h1 class="container mx-auto text-center text-dark font-semibold text-3xl mb-10">
                The new name HT IP LAW FIRM COMPANY LIMITED
            </h1>
            <p>
                As of now, the new era of IP protection is started in Myanmar. The new IP laws of Trademark, Design,
                Copyright and Patent have been enacted in Myanmar in 2019. These IP Laws have been drafted in conform
                with International standard and norms. Thus, the scope of IP protection becomes wider and As such, it
                needs to reform this firm , to recruit new generation and to set up new structure in conformity with
                wider scope of services.
                <span class="font-semibold">HT IP LAW FIRM COMPANY LIMITED</span> was registered at the Directorate of
                Investment and Company
                Administration in Myanmar, under registration no.127649375 dated 25-9-2020. Company office is located at
                NO.567, MAC TOWER, ROOM NO.303, KYAUKTADA TOWNSHIP, YANGON REGION, MYANMAR. This company is rendering
                services of protection of Intellectual Property right for local and foreign clients.
            </p>
        </div>

        <div>
            <h1 class="container mx-auto text-center text-dark font-semibold text-3xl mb-10">
                Management team of HT IP LAW FIR COMPANY LIMITED
            </h1>
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 my-11">
                @foreach($members as $member)
                    <x-user.common.member-card :member="$member" />
                @endforeach
            </div>
            <p>
                At present, our firm, which is located in the heart of the Business City Yangon, professionally operates
                legal matters with 15 skillful paralegals , 9 well-experienced Advocates and legal consultants. With
                this efficient team HTIP law firm is successfully handling IP related matters entrusted by the prominent
                local and international law firms, business institutions and individual IP rights owners, with the
                dedication to serve the best interests of the clients.
            </p>
        </div>
    </div>
</x-user.common.section>
