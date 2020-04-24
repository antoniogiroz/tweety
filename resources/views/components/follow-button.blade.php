@unless (current_user()->is($user))
<form action="{{ route('follow', $user->username) }}" method="POST">
    @csrf
    <button type="submit" class="px-4 py-2 text-xs text-white bg-blue-500 rounded-full shadow">
        {{ current_user()->following($user) ? 'Unfollow me' : 'Follow me' }}
    </button>
</form>
@endunless
