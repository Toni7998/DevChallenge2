<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-light-900 bg-light-50 dark:text-dark-900 dark:bg-dark-50 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <!-- Logo -->
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-light-400 dark:text-dark-400" />
            </a>
        </div>

        <!-- Form Container -->
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-light-200 dark:bg-dark-200 shadow-md overflow-hidden sm:rounded-lg">
            <form>
                <!-- Email -->
                <label class="block text-sm font-medium text-light-900 dark:text-white" for="email">Email</label>
                <input
                    class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-700 dark:bg-dark-300 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="email" id="email" name="email" required>

                <!-- Password -->
                <label class="block text-sm font-medium text-light-900 dark:text-white mt-4"
                    for="password">Password</label>
                <input
                    class="block w-full mt-1 rounded-md border-gray-300 dark:border-gray-700 dark:bg-dark-300 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="password" id="password" name="password" required>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 dark:border-gray-700 dark:bg-dark-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <span class="ml-2 text-sm text-light-900 dark:text-white">Remember me</span>
                    </label>

                    <a href="/forgot-password" class="text-sm text-light-500 dark:text-gray-400 hover:underline">Forgot
                        your password?</a>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full mt-4 py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    LOG IN
                </button>
            </form>
        </div>

        <!-- SSO Google -->
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-light-200 dark:bg-dark-200 shadow-md overflow-hidden sm:rounded-lg text-center">
            <a href="/google-auth/redirect" class="text-sm text-light-500 dark:text-gray-400 hover:underline">
                SSO amb Google
            </a>
        </div>

        <!-- SSO Twitter -->
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-light-200 dark:bg-dark-200 shadow-md overflow-hidden sm:rounded-lg text-center">
            <a href="{{ url('auth/twitter') }}" class="text-sm text-light-500 dark:text-gray-400 hover:underline">
                SSO amb Twitter
            </a>
        </div>
    </div>
</body>

</html>