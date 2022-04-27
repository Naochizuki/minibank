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

    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Minibank | @yield("title")</title>
</head>

<body class="font-quicksand dark:bg-slate-700">
    <header>
        <div id="vertical-navbar" class="vertical-navbar transition-all-500">
            <label for="minibank-logo" class="label-minibank-container">
                <div id="label-logo" class="label-minibank transition-transform-500">
                    <span class="label-minibank-first-letter">M</span>
                    <span id="afterM" class="label-minibank-after-content transition-all-500">inibank</span>
                </div>
            </label>
            <input type="checkbox" name="minibank-logo" id="minibank-logo" class="hidden">
            @yield('header-vertical-content')
        </div>
        <div class="top-navbar-container">
            <div id="navbar-fill" class="navbar-fill transition-all-500"></div>
            <div class="top-navbar transition-all-500">
                <form action="" class="relative">
                    <input type="search" name="seach" id="search" placeholder="Search.."
                        class="top-navbar-input-search transition-all-500">
                    <label for="search" class="top-navbar-input-search-label">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="text-lg">|</span>
                    </label>
                </form>
                <div class="navibar">
                    <div class="mail-notif-container">
                        <div class="group">
                            <a href="/" class="mail-notif-item">
                                    <i class="fa-regular fa-envelope mail-notif-icon  md:group-hover:animate-none"></i>
                            </a>
                        </div>
                        <div class="group">
                            <a href="/" class="mail-notif-item">
                                    <i class="fa-regular fa-bell mail-notif-icon  md:group-hover:animate-none"></i>
                            </a>
                        </div>
                    </div>
                    <div class="profile-container">
                        <div class="profile-picture-container">
                            <div class="user-name-container">
                                <p class="user-name">Abiyyu Dzaky Muhammad</p>
                            </div>
                            <div class="picture-container">
                                <div class="profile-picture transition-all-500">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="menuToggle">
                            <ul class="menuToggle-ul">
                                <li class="group">
                                    <a href="/" class="menuToggle-item">
                                        <div class="icon-menu">
                                            <i class="fa-solid fa-gear icon"></i>
                                        </div>
                                        <p class="menu-name">Setting</p>
                                    </a>
                                </li>
                                <li class="group md:hidden">
                                    <a href="/" class="menuToggle-item">
                                        <div class="icon-menu">
                                            <i class="fa-regular fa-envelope icon"></i>
                                        </div>
                                        <p class="menu-name">Messages</p>
                                    </a>
                                </li>
                                <li class="group md:hidden">
                                    <a href="/" class="menuToggle-item">
                                        <div class="icon-menu">
                                            <i class="fa-regular fa-bell icon"></i>
                                        </div>
                                        <p class="menu-name">Notification</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="btn-dark-container">
                                @include('partials.dark mode toggle')
                            </div>
                            <div class="btn-container group">
                                <button class="btn">
                                    <div class="icon-menu">
                                        <i class="fa-solid fa-right-from-bracket icon"></i>
                                    </div>
                                    <p class="menu-name">Log out</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        @yield("content")
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
