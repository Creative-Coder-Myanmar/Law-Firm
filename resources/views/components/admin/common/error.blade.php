@props(['error'])

@error($error)
    <p class="text-danger mt-1">{{ $message }}</p>
@enderror
