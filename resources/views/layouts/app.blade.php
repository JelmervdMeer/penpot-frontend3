<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>