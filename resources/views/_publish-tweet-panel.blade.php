<div class="px-8 py-6 mb-8 border border-blue-300 rounded-lg">
    <form method="POST" action="{{ route('tweets.store') }}">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up doc?" required autofocus>
            {{ @old('body') }}
        </textarea>

        <hr class="my-4">

        <footer class="flex items-center justify-between">
            <a href="{{ current_user()->profilePath() }}">
                <img src="{{ current_user()->avatar }}" alt="Your avatar" class="mr-2 rounded-full" width="50px"
                    height="50px">
            </a>
            <button type="submit"
                class="h-10 px-10 text-sm text-white bg-blue-500 rounded-lg shadow hover:bg-blue-600">Tweet-a-roo!</button>
        </footer>

        @error('body')
        <p class="mt-4 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </form>
</div>
