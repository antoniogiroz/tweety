<div class="flex p-4 border border-gray-300">
    <div class="flex-shrink-0 mr-2">
        <img src="{{ $tweet->user->avatar }}" alt="" class="mr-2 rounded-full">
    </div>
    <div>
        <h5 class="mb-4 font-bold">{{ $tweet->user->name }}</h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
