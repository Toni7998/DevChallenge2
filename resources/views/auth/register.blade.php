@extends('layouts.auth-layout')

@section('content')
<form method="POST" action="{{ route('post-register') }}">
    @csrf

    <!-- Name -->
    <div>
        <label for="name" class="block text-sm font-medium text-light-900 dark:text-white">
            {{ __('Name') }}
        </label>
        <input id="name" name="name" type="text" :value="old('name')" required autofocus autocomplete="name"
            class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-700 dark:bg-dark-300 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error('name')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <label for="email" class="block text-sm font-medium text-light-900 dark:text-white">
            {{ __('Email') }}
        </label>
        <input id="email" name="email" type="email" :value="old('email')" required autocomplete="username"
            class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-700 dark:bg-dark-300 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error('email')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div class="mt-4">
        <label for="password" class="block text-sm font-medium text-light-900 dark:text-white">
            {{ __('Password') }}
        </label>
        <input id="password" name="password" type="password" required autocomplete="new-password"
            class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-700 dark:bg-dark-300 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error('password')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <label for="password_confirmation" class="block text-sm font-medium text-light-900 dark:text-white">
            {{ __('Confirm Password') }}
        </label>
        <input id="password_confirmation" name="password_confirmation" type="password" required
            autocomplete="new-password"
            class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-700 dark:bg-dark-300 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error('password_confirmation')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit -->
    <div class="flex items-center justify-between mt-6">
        <a href="{{ route('login') }}" class="text-sm text-light-500 dark:text-gray-400 hover:underline">
            {{ __('Already registered?') }}
        </a>
        <button type="submit"
            class="py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
            {{ __('Register') }}
        </button>
    </div>
</form>
@stop