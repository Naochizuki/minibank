<!doctype html>
<html lang="en" class="">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/style.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;600&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Minibank | @yield("title")</title>
</head>

<body class="font-quicksand dark:bg-slate-600">
    <header>
        @include('layout.header')
    </header>
    <main class="container mx-auto sm:bg-red-100 md:bg-sky-100 lg:bg-yellow-100">
        @yield("content")
    </main>
    <footer></footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
