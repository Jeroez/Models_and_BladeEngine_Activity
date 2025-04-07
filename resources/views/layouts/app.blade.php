<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 font-sans leading-relaxed">
    @include('partials.header')

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
