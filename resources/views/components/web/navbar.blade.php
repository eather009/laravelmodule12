
@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/home') }}" class="font-semibold  hover:text-gray-900 dark:text-gray-400 dark:hover:text-dark focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold  hover:text-gray-900 dark:text-gray-400 dark:hover:text-dark focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold  hover:text-gray-900 dark:text-gray-400 dark:hover:text-dark focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif
