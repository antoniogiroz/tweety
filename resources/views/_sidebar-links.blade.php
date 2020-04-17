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
        <a class="block mb-4 text-lg font-bold" href="/">
            Notifications
        </a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">
            Messages
        </a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">
            Bookmarks
        </a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">
            List
        </a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="{{ current_user()->profilePath() }}">
            Profile
        </a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">
            More
        </a>
    </li>
</ul>
