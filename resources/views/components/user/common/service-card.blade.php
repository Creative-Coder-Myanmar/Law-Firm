@props(['service'])

<div class="flex flex-col text-center space-y-6 p-6 rounded-lg mx-auto w-80 md:w-auto bg-white" data-aos="fade-up"
    data-aos-duration="{{ $service['duration'] }}">
    <img src="{{ $service['image'] }}" class="w-20 mx-auto">
    <span class="text-3xl text-slate-700 line-clamp-2">{{ $service['title'] }}</span>
    <span class="text-slate-500 dark:text-slate-50 line-clamp-3">{{ $service['content'] }}</span>
</div>
