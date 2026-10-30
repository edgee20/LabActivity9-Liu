<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-900">
    <nav class="border-b border-blue-900 bg-blue-800 text-white shadow-sm">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3">
                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-lg font-bold text-blue-800">
                    B
                </span>
                <span>
                    <span class="block text-base font-semibold">Bakuna Tracker</span>
                    <span class="block text-xs text-blue-200">Purok Liu Health Center</span>
                </span>
            </a>

            @auth
                <div class="flex items-center gap-3 text-sm">
                    <div class="hidden items-center gap-4 sm:flex">
                        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-blue-100 hover:bg-blue-700 hover:text-white">
                            Dashboard
                        </a>
                        <a href="{{ url('/schedule') }}" class="rounded-md px-3 py-2 text-blue-100 hover:bg-blue-700 hover:text-white">
                            Schedule
                        </a>
                    </div>

                    <span class="hidden border-l border-blue-600 pl-3 text-blue-100 md:inline">
                        Hi, {{ auth()->user()->name }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded-md bg-white px-3 py-2 font-medium text-blue-800 hover:bg-blue-50">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="rounded-md bg-white px-4 py-2 text-sm font-medium text-blue-800 hover:bg-blue-50">
                    Sign in
                </a>
            @endguest
        </div>
    </nav>

    @yield('content')
</body>
</html>
