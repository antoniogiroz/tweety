<div class="px-6 py-4 bg-gray-200 rounded-lg">
    <h3 class="mb-4 text-xl font-bold">Following</h3>

    <ul>
        @foreach (current_user()->follows as $user)
        <li class="mb-4">
            <div>
                <a class="flex items-center text-sm" href="{{ $user->profilePath() }}">
                    <img src="{{ $user->avatar }}" alt="" class="mr-2 rounded-full" width="40px" height="40px">

                    {{ $user->name }}
                </a>
            </div>
        </li>
        @endforeach
    </ul>
</div>
