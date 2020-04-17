<x-app>
    <div>
        <header class="mb-8">
            <div class="relative mb-4">
                <img src="/images/default-profile-banner.jpg" alt="">

                <img class="absolute bottom-0 mr-2 transform -translate-x-1/2 translate-y-1/2 border-4 border-white rounded-full"
                    style="left: 50%" src="{{ $user->avatar }}" alt="" width="150px">
            </div>


            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>
                @auth
                <div class="flex">
                    @can ('edit', $user)
                    <a href="{{ current_user()->profilePath('edit') }}"
                        class="px-4 py-2 mr-2 text-xs border border-gray-400 rounded-full">Edit Profile</a>
                    @endcan

                    <x-follow-button :user="$user"></x-follow-button>
                </div>
                @endauth
            </div>

            <p class="text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque doloribus, consectetur aliquid
                laborum sed,
                eum et laboriosam iste libero cumque obcaecati tenetur accusantium deserunt nostrum adipisci! Rerum,
                reiciendis! Officia, laborum.
            </p>
        </header>

        @include('_timeline', [
        'tweets' => $user->tweets
        ])

    </div>
</x-app>
