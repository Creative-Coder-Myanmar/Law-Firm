<x-user.master>
    <div class="blog-container min-h-[100vh]">
      <div class="flex gap-5">
        <div class="w-[100px] h-[100px]">
          <img class="w-full h-full object-cover rounded-full" src="{{ $member->profile }}" alt="">
        </div>
        <div>
          <div class="mb-8 mt-2">
            <h1 class="text-3xl font-semibold mb-3">{{ $member->name }}</h1>
            <span>{{ $member->position }}</span>
          </div>
        </div>
      </div>
      {{-- about --}}
          <div class="mt-8">
            <h1 class="text-3xl font-bold mb-4">About</h1>
            <p class="leading-[2] text-lg">
              {{ $member->about }}
            </p>
          </div>
    </div>
</x-user.master>
