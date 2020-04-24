<x-app>
    <form action="{{ $user->profilePath() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="mb-6">
            <label for="name" class="block mb-2 text-xs font-bold text-gray-700 uppercase">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="w-full p-2 border border-gray-400" name="name"
                    value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                @error('name')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="username"
                class="block mb-2 text-xs font-bold text-gray-700 uppercase">{{ __('Username') }}</label>

            <div class="col-md-6">
                <input id="username" type="text" class="w-full p-2 border border-gray-400" name="username"
                    value="{{ old('username', $user->username) }}" required autocomplete="username">

                @error('username')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="avatar" class="block mb-2 text-xs font-bold text-gray-700 uppercase">{{ __('avatar') }}</label>

            <div class="col-md-6">
                <input id="avatar" type="file" class="w-full p-2 border border-gray-400" name="avatar"
                    value="{{ old('avatar', $user->avatar) }}">

                @error('avatar')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="email"
                class="block mb-2 text-xs font-bold text-gray-700 uppercase">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="w-full p-2 border border-gray-400" name="email"
                    value="{{ old('email', $user->email) }}" required autocomplete="email">

                @error('email')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="password"
                class="block mb-2 text-xs font-bold text-gray-700 uppercase">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="w-full p-2 border border-gray-400" name="password" required
                    autocomplete="new-password">

                @error('password')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="password-confirm"
                class="block mb-2 text-xs font-bold text-gray-700 uppercase">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="w-full p-2 border border-gray-400"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="mb-6">
            <button type="submit" class="px-4 py-2 mr-4 text-white bg-blue-400 rounded hover:bg-blue-500">
                Save Profile
            </button>

            <a href="{{ $user->profilePath() }}" class="hover:underline">Cancel</a>
        </div>
    </form>
</x-app>
