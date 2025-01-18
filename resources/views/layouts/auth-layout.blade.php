<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans text-light-900 bg-light-50 dark:text-dark-900 dark:bg-dark-50 antialiased">
    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <!-- Logo -->
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-light-400 dark:text-dark-400" />
            </a>
        </div>

        <!-- Contenedor del formulario -->
        <div class="w-full max-w-md bg-light-200 dark:bg-dark-200 p-6 mt-6 rounded-lg shadow-lg">
            @yield('content')
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