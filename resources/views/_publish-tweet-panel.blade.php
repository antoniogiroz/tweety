<div class="px-8 py-6 mb-8 border border-blue-300 rounded-lg">
    <form method="POST" action="{{ route('tweets.store') }}">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up doc?">
            {{ @old('body') }}
        </textarea>

        <hr class="my-4">

        <div class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}" alt="Your avatar" class="mr-2 rounded-full">
            <button type="submit" class="py-1 px-4 text-white bg-blue-500 rounded-full">Tweet-a-roo!</button>
        </div>

        @error('body')
        <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
        @enderror
    </form>
</div>
