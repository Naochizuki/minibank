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

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
                                <p class="user-name">{{ Auth::user()->nama }}</p>
                            </div>
                            <div class="picture-container">
                                <div class="profile-picture transition-all-500 overflow-hidden">
                                    @if (Auth::user()->foto)
                                        <img src="{{ Storage::url(Auth::user()->foto) }}" alt="{{ Auth::user()->id }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="menuToggle">
                            <ul class="menuToggle-ul">
                                <li class="group">
                                    <a href="{{ url('/setting') }}" class="menuToggle-item">
                                        <div class="icon-menu">
                                            <i class="fa-solid fa-gear icon"></i>
                                        </div>
                                        <p class="menu-name">Setting</p>
                                    </a>
                                </li>
                                <li class="group md:hidden">
                                    <a href="#" class="menuToggle-item">
                                        <div class="icon-menu">
                                            <i class="fa-regular fa-envelope icon"></i>
                                        </div>
                                        <p class="menu-name">Messages</p>
                                    </a>
                                </li>
                                <li class="group md:hidden">
                                    <a href="#" class="menuToggle-item">
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
                            <a href="{{ url('/logout') }}">
                            <div class="btn-container group">
                                <button class="btn">
                                    <div class="icon-menu">
                                        <i class="fa-solid fa-right-from-bracket icon"></i>
                                    </div>
                                        <p class="menu-name">Log out</p>
                                    </button>
                                </div>
                            </a>
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
