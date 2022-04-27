<!doctype html>
<html lang="en" class="">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Font Style --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;600&family=Ubuntu&display=swap"
        rel="stylesheet">

    {{-- TailwindCSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Minibank | @yield("title")</title>
</head>

<body class="font-quicksand dark:bg-slate-600">
    <div class="w-full mx-auto">
        <header class="fixed z-50">
            @yield('header')
        </header>
        <main>
            @yield("content")
        </main>
    </div>
    <footer></footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
