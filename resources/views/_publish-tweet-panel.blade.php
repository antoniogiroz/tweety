<div class="px-8 py-6 mb-8 border border-blue-300 rounded-lg">
    <form method="POST" action="{{ route('tweets.store') }}">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up doc?">
            {{ @old('body') }}
        </textarea>

        <hr class="my-4">

        <div class="flex justify-between">
            <a href="{{ current_user()->profilePath() }}">
                <img src="{{ current_user()->avatar }}" alt="Your avatar" class="mr-2 rounded-full" width="50px"
                    height="50px">
            </a>
            <button type="submit" class="px-4 py-1 text-white bg-blue-500 rounded-full shadow">Tweet-a-roo!</button>
        </div>

        @error('body')
        <p class="mt-4 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </form>
</div>
