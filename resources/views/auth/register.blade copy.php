<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb25">
            <x-input-label for="email" :value="__('Email')" class="form-label fw500 dark-color" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb25">
            <x-input-label for="password" :value="__('Password')" class="form-label fw500 dark-color"/>

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb15">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label fw500 dark-color"/>

            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            placeholder="••••••••"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ud-btn btn-thm default-box-shadow2">
                {{ __('Register') }}
            </x-primary-button>

            <x-button-link class="ml-4" href="/auth/redirect">
                {{ __('Register with GitHub') }}
            </x-button-link>            
        </div>
    </form>
</x-guest-layout>
