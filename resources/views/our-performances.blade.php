<x-user.master>
  <div class="min-h-[100vh] container m-auto">
    <div class="max-w-full mt-11 lg:px-0  px-11">
        <h1 class="text-3xl font-semibold">Our remarkable performances</h1>
        <ul class="leading-[2.5] space-y-4 mt-8 text-lg animate__animated duration-500 animate__fadeIn">
          <li>The first Partnership officially set up in using the name of “Law Firm” in Myanmar.</li>
          <li>The first INTA member from Myanmar (as a firm member).</li>
          <li>The first APAA member from Myanmar (Htain Lin Oo as an individual member).</li>
          <li>The first AIPPI member from Myanmar(Thein Aung as an individual member).</li>
          <li>Author of the article “Legal Action Against Intellectual Property Infringement in Myanmar” for the book, “Legal Action Against Intellectual Property Infringement in Asia” in commemoration of 60th birthday of Patent Attorney, Myung-Shin Kim from R.O.K.</li>
          <li>
            The author of IP related articles, regularly contributed to The World Economic Journal (the first Myanmar Economic Intellectual property), published in Myanmar.
          </li>
        </ul>
      <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 my-[100px]">
        @foreach($members as $member)
            <x-user.common.member-card :member="$member" />
        @endforeach
      </div>
    </div>
  </div>
</x-user.master>