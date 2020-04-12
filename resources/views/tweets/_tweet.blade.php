<div class="flex p-4 border border-gray-300">
    <div class="flex-shrink-0 mr-2">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="mr-2 rounded-full">
        </a>
    </div>
    <div>
        <a href="{{ route('profile', $tweet->user) }}">
            <h5 class="mb-0 font-bold">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
