@props(['service'])

<div class="flex flex-col text-center space-y-6 p-6 rounded-lg mx-auto w-full shadow-md hover:shadow-xl !transition-all !duration-500 bg-white"
    data-aos="fade-up" data-aos-duration="{{ $service['duration'] }}">
    <img src="{{ $service['image'] }}" class="w-20 mx-auto">
    <span class="text-2xl text-slate-700">{{ $service['title'] }}</span>    
</div>
