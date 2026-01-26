<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Locofy</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900">

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

</body>