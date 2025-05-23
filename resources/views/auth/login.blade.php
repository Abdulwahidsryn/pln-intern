<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-8">
            <!-- <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 tracking-tight leading-tight">
                Siap Jadi Bagian <span class="text-yellow-500 dark:text-yellow-400">Energi</span> di <span
                    class="text-indigo-600 dark:text-indigo-400">PLN Banjarmasin</span>?
            </h2> -->
            <div class="mt-4">
                <span class="text-orange-700 font-bold text-xl">Ayo,
                    segera raih
                    kesempatanmu!</span>
            </div>
            <p class="mt-3 text-lg text-gray-700 dark:text-gray-300 italic">
                Temukan <span class="text-blue-500 font-semibold">peluang magang menarik</span> di PLN Internship dan
                wujudkan petualangan karirmu!
            </p>

        </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline mr-8 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <a href="{{ route('register') }}" class="ms-3 hover:text-indigo-600 dark:hover:text-indigo-400">
                Daftar
            </a>

            <x-primary-button class="ms-4 bg-yellow-300 hover:bg-yellow-600 focus:bg-yellow-600">
                {{ __('Masuk') }}
            </x-primary-button>


        </div>
    </form>
</x-guest-layout>