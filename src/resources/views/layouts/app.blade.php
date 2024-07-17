<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <script src="https://kit.fontawesome.com/f37650710a.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__title">
                <a class="menu-button__link" href="#menu"><i class="fa-solid fa-bars"></i></a>
                <h1>Rese</h1>
            </div>
            @yield('header')
        </div>
    </header>
    <main>
        <div class="modal-menu" id="menu">
            <div class="modal-menu__nav">
                <a href="#" class="modal-menu__close-btn"><i class="fa-solid fa-xmark"></i></a>
                <nav>
                    <li><a href="/">Home</a></li>
                    @guest
                    <li><a href="/register">Registration</a></li>
                    <li><a href="/login">Login</a></li>
                    @endguest
                    @auth
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="/mypage">Mypage</a></li>
                    @endauth
                </nav>
            </div>
        </div>
        @yield('content')
    </main>
</body>

</html>