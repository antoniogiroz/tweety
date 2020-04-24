<ul>
    <li>
        <a class="block mb-4 text-lg font-bold" href="{{ route('home') }}">
            Home
        </a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/explore">
            Explore
        </a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="{{ current_user()->profilePath() }}">
            Profile
        </a>
    </li>
    <form method="POST" action="/logout">
        @csrf

        <button class="text-lg font-bold">Logout</button>
    </form>
</ul>
