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
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1>Rese</h1>
            @yield('header')
        </div>
    </header>
    <main>
        <div class="sidebar">
            <nav class="sidebar__nav">
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
        @yield('content')
    </main>
</body>

</html>