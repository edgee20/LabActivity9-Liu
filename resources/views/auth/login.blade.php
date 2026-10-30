@extends('layouts.app')

@section('title', 'Sign in')

@section('content')
    <main class="flex min-h-screen items-center justify-center bg-gray-100 px-4 py-8">
        <div class="w-full max-w-md rounded-lg bg-white p-6 shadow">
            <h1 class="text-2xl font-bold text-gray-900">Sign in</h1>
            <p class="mt-1 text-sm text-gray-600">Bakuna Tracker</p>

            <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                    Sign in
                </button>
            </form>
        </div>
    </main>
@endsection
