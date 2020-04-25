<div class="flex p-4 {{ !$loop->last ? 'border-b border-gray-300' : '' }}">
    <div class="flex-shrink-0 mr-2">
        <a href="{{ $tweet->user->profilePath() }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="mr-2 rounded-full" width="50px" height="50px">
        </a>
    </div>
    <div>
        <a href="{{ $tweet->user->profilePath() }}">
            <h5 class="mb-0 font-bold">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet" />
    </div>


</div>
