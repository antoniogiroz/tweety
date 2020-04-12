<x-app>
    <div>
        <header class="mb-8">
            <div class="relative mb-8">
                <img class="mb-2" src="/images/default-profile-banner.jpg" alt="">

                <img class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2 border-4 border-white"
                    style="left: 50%" src="{{ $user->avatar }}" alt="" width="150px">
            </div>

            <div>
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
                        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                    </div>
                    <div>
                        <a href="" class="px-4 py-2 mr-2 text-xs border border-gray-400 rounded-full">Edit Profile</a>
                        <a href="" class="px-4 py-2 text-xs text-white bg-blue-500 rounded-full shadow">Follow Me</a>
                    </div>
                </div>

                <p class="text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque doloribus, consectetur aliquid
                    laborum sed,
                    eum et laboriosam iste libero cumque obcaecati tenetur accusantium deserunt nostrum adipisci! Rerum,
                    reiciendis! Officia, laborum.
                </p>
            </div>
        </header>

        @include('_timeline', [
        'tweets' => $user->tweets
        ])

    </div>
</x-app>
