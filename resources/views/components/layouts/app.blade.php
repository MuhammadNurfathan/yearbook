<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Yearbook Angkatan' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 text-gray-900 min-h-screen flex flex-col relative overflow-x-hidden">


    {{-- Navbar --}}
    @include('components.layouts.partials.navbar')

    {{-- Main Content --}}
    <main class="flex-1 relative z-10">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('components.layouts.partials.footer')
</body>
</html>
