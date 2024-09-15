@extends('layouts.guest')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <!-- Email -->
        <div class="mt-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" placeholder="bruce@wayne.com"
                    required
                    class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
            </div>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" placeholder="••••••••"
                    required
                    class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
            </div>
        </div>

        <div class="mt-4">
            <button type="submit"
                class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                Login
            </button>
        </div>

        <p class="mt-10 text-center text-sm text-gray-500">
            Don't have an account?
            <a href="{{ route('register.form') }}" class="font-semibold leading-6 text-black hover:text-black">Register</a>
        </p>
    </form>


@endsection