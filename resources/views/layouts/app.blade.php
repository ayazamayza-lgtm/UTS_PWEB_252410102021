<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.head')
    <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen bg-slate-50 font-sans text-slate-800 antialiased">
    <x-navbar :username="$username ?? 'someone'" />
    <main class="grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>